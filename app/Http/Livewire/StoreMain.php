<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class StoreMain extends Component
{
  public $session_id;

  public function getNewProductsProperty()
  {
    return Product::with([
      'media' => function ($query) {
        $query->select('path', 'name', 'type')->where('type', 'main');
      },
      'reviews' => function ($query) {
        $query->select('product_id', 'count', "value");
      },
      'product_prices' => function ($query) {
        $query->select('product_id', "value", 'discount', 'value_no_discount');
      },
      'product_categories' => function ($query) {
        $query->select('product_id', 'category_id', 'primary_category')
          ->where('primary_category', true);
        $query->with(['category' => function ($query) {
          $query->select('id', 'short_description', 'seo_id');
        }]);
      }

    ])
      ->select('id', 'end_date', 'innerid', 'name', 'seo_id', 'ean', 'quantity', 'sku', 'long_description', 'short_description', 'popularity')
      ->where('active', true)
      ->where('type', '!=', 'parent')
      ->where('start_date', '<=',  now()->format('Y-m-d'))
      ->where('end_date', '>=',  now()->format('Y-m-d'))
      ->where('is_new', true)
      ->orderBy('popularity', 'DESC')
      ->orderBy('innerid', 'ASC')
      ->limit(15)
      ->get();
  }
  public function render()
  {
    return view('livewire.store-main', [
      'newproducts' => $this->newproducts
    ]);
  }
  public function mount()
  {
    $this->session_id = request()->cookie('sessionId') ?? session()->getId();
  }
}
