<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Status;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Product_Spec;
use App\Models\PriceList;
use App\Models\TextLabel;
use App\Models\CustomScript;
use App\Models\Promotion;
use App\Models\Store_Settings;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class GlobalVariablesServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    ///
  }
  /**
   * Bootstrap services.
   */
  public function boot()
  {
    $this->loadGlobalVariables();
    $this->loadLabelVariables();
    $this->loadGlobalStatuses();
    $this->loadGlobalPayments();
    $this->loadGlobalCustomScripts();
    $this->loadGlobalCurrencies();
    $this->loadHighestPopularity();
    $this->loadAllSpecificationsIntoCache();
  }
  private function loadHighestPopularity()
  {
    if (Schema::hasTable('products')) {

      $highestPopularity = Cache::rememberForever('max_popularity', function () {
        return Product::max('popularity');
      });

      $this->app->instance('max_popularity', $highestPopularity);
    }
  }
  private function loadGlobalVariables()
  {
    if (Schema::hasTable('store__settings')) {

      $globalVariables = Cache::rememberForever('global_variables', function () {
        $storeSettings = Store_Settings::all()->pluck('value', 'parameter')->toArray();
        return $storeSettings;
      });

      foreach ($globalVariables as $key => $value) {
        $this->app->instance('global_' . $key, $value);
      }
    }
  }
  private function loadLabelVariables()
  {
    if (Schema::hasTable('text_labels')) {

      $labelVariables = Cache::rememberForever('label_variables', function () {
        $labels = TextLabel::all()->pluck('value', 'parameter')->toArray();
        return $labels;
      });

      foreach ($labelVariables as $key => $value) {
        $this->app->instance('label_' . $key, $value);
      }
    }
  }
  private function loadGlobalCustomScripts()
  {
    if (Schema::hasTable('custom_scripts')) {

      $globalScripts = Cache::rememberForever('global_scripts', function () {
        $scripts = CustomScript::select(['id', 'name', 'type', 'content', 'active'])->where('active', true)->get()->groupBy('type');
        return $scripts->map(function ($group) {
          return $group->pluck('content')->implode(PHP_EOL);
        });
      });

      foreach ($globalScripts as $type => $content) {
        $this->app->instance('global_script_' . $type, $content);
      }
    }
  }
  private function loadGlobalPayments()
  {
    if (Schema::hasTable('payments')) {

      $globalPayments = Cache::rememberForever('global_payments', function () {
        $payments = Payment::all(['id', 'active', 'type', 'name'])->keyBy('id')->toArray();
        return $payments;
      });

      foreach ($globalPayments as $payment) {
        $this->app->instance('global_' . $payment['name'], $payment);
      }
    }
  }
  private function loadGlobalStatuses()
  {
    if (Schema::hasTable('statuses')) {

      $globalStatuses = Cache::rememberForever('global_statuses', function () {
        $statuses = Status::whereIn('type', ['cart', 'order', 'voucher'])->get();
        $statusesByType = $statuses->groupBy('type');

        $globalStatuses = [];

        foreach ($statusesByType as $type => $typeStatuses) {
          foreach ($typeStatuses as $status) {
            $globalStatuses[$type . '_' . $status->name] = $status->id;
          }
        }

        return $globalStatuses;
      });

      foreach ($globalStatuses as $key => $value) {
        $this->app->instance('global_' . $key, $value);
      }
    }
  }
  private function loadGlobalCurrencies()
  {
    if (Schema::hasTable('price_lists') && Schema::hasTable('currencies')) {

      $globalCurrencies = Cache::rememberForever('global_currencies', function () {
        return PriceList::join('currencies', 'price_lists.currency_id', '=', 'currencies.id')
          ->where('price_lists.active', true)
          ->get(['price_lists.name as price_list_name', 'currencies.name as currency_name', 'currencies.symbol as currency_symbol'])
          ->keyBy('price_list_name')
          ->toArray();
      });

      foreach ($globalCurrencies as $priceListName => $currency) {
        $this->app->instance('global_currency_' . strtolower($priceListName) . '_name', $currency['currency_name']);
        $this->app->instance('global_currency_' . strtolower($priceListName) . '_symbol', $currency['currency_symbol']);
      }
    }
  }
  private function loadAllSpecificationsIntoCache()
  {
    $productSpecs = Cache::rememberForever('cached_specifications', function () {
      $productSpecs = Product_Spec::select('value', 'spec_id', 'product_id')
        ->with([
          'spec' => function ($query) {
            $query->select('id', 'name', 'sequence');
          },
          'product' => function ($query) {
            $query->select('id', 'type', 'parent_id')->whereHas('product_categories');
          }
        ])
        ->whereHas('spec', function ($query) {
          $query->where('mark_as_filter', true);
        })
        ->whereHas('product', function ($query) {
          $query->where('active', true)
            ->where('type', '!=', 'parent')
            ->where('start_date', '<=', now()->format('Y-m-d'))
            ->where('end_date', '>=', now()->format('Y-m-d'))
            ->whereHas('product_categories');
        })
        ->get();

      $formattedSpecs = $productSpecs->groupBy('spec_id')->map(function ($specs) {
        $firstSpec = $specs->first();

        $uniqueValues = $specs->groupBy('value')->map(function ($items) {

          $productsWithCategories = $items->map(function ($item) {
            $categoryIds = $item->product->product_categories->pluck('category_id')->toArray();
            $parentId = $item->product->type === 'variant' ? $item->product->parent_id : null;

            return [
              'product_id' => $item->product_id,
              'categories' => $categoryIds,
              'parent_id' => $parentId,
              'type' => $item->product->type,
            ];
          });

          $uniqueCategories = $items->flatMap(function ($item) {
            return $item->product->product_categories->pluck('category_id');
          })->unique();

          return [
            'products' => $productsWithCategories->toArray(),
            'categories' => $uniqueCategories->toArray(),
          ];
        });

        return [
          'spec' => $firstSpec->spec->name,
          'sequence' => $firstSpec->spec->sequence,
          'values' => $uniqueValues,
        ];
      })->sortBy('sequence')->values();

      return $formattedSpecs->toArray();
    });

    $this->app->instance('cached_specifications', $productSpecs);
  }
}