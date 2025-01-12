<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;


class StoreSearch extends Component
{
  use WithPagination;

  public $search;
  public $loadAmount;

  public $showproducts = true;
  public $showcategories = false;
  public $session_id;
  public $quantity;


  public function render()
  {
    return view('livewire.store-search', [
      'products' => $this->products
    ]);
  }
  public function mount($data = null)
  {
    if ($data != null) {
      $this->search = urldecode($data);
      $search_from_session = session()->get('search_values', []);
      if (isset($search_from_session['value']) && $search_from_session['value'] != $data) {
        session()->put('search_values', [
          'value' => $data,
          'loadAmount' => app('global_limit_load')
        ]);
        $this->loadAmount = app('global_limit_load');
      } else {
        if (isset($search_from_session['loadAmount'])) {
          $this->loadAmount = $search_from_session['loadAmount'];
        } else {
          $this->loadAmount = app('global_limit_load');
        }
      }
    } else {
      session()->forget('search_values');

      $this->search = "";
    }
    $this->session_id = request()->cookie('sessionId') ?? session()->getId();

    $this->quantity = app('global_low_stock');
  }

  public function loadMore()
  {
    $this->loadAmount += app('global_limit_load');
    session()->put('search_values', [
      'value' => $this->search,
      'loadAmount' =>  $this->loadAmount
    ]);
  }


  public function getProductsProperty()
  {
    if ($this->search != "") {

      return Product::search($this->search)
        ->select('id', 'name', 'seo_id', 'short_description', 'type', 'quantity')
        ->where('active', true)
        ->where('type', '!=', 'parent')
        ->where('start_date', '<=',  now()->format('Y-m-d'))
        ->where('end_date', '>=',  now()->format('Y-m-d'))
        ->with([
          'media' => function ($query) {
            $query->select('path', 'name', 'type')->where('type', 'main');
          },
          'product_prices' => function ($query) {
            $query->select('product_id', 'value', 'discount', 'value_no_discount', 'pricelist_id');
          },
          'product_categories' => function ($query) {
            $query->select('product_id', 'category_id', 'primary_category')
              ->where('primary_category', true);
            $query->with(['category' => function ($query) {
              $query->select('id', 'short_description', 'seo_id');
            }]);
          }
        ])
        ->orderBy('popularity', 'DESC')
        ->orderBy('innerid', 'ASC')
        ->paginate($this->loadAmount);
    } else {
      return collect();
    }
  }
}
