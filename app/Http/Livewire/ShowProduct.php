<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\Cart_Item;
use App\Models\Product_Spec;
use App\Models\Related_Products;
use App\Models\PricelistEntries;
use App\Models\Products_categories;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use App\Models\ProductReviews as ModelsProductReviews;


class ShowProduct extends Component
{
  public $productId;
  public $editproduct = null;
  public $delete = false;
  public $prod;

  public function mount($productId)
  {
    $this->productId = $productId;
  }
  public function confirmProductRemoval($id)
  {
    $this->productId = $id;
    $this->dispatchBrowserEvent('show-delete-modal');
    $this->delete = true;
  }
  public function cancelItemRemoval()
  {
    $this->delete = false;
  }
  public function editproduct()
  {
    $this->prod = [
      'product_name' => $this->product->name,
      'active' => $this->product->active == 1 ? true : false,
      'is_new' => $this->product->is_new == 1 ? true : false,
      'start_date' => $this->product->start_date,
      'end_date' => $this->product->end_date,
      'popularity' => $this->product->popularity,
      'short_description' => $this->product->short_description,
      'meta_description' => $this->product->meta_description,
      'long_description' => $this->product->long_description,
      'seo_title' => $this->product->seo_title,
      'quantity' => $this->product->quantity,
      'sku' => $this->product->sku,
      'ean' => $this->product->ean,
      'seo_id' => $this->product->seo_id,
      'type' => $this->product->type,
      'comments' => $this->product->comments

    ];
    $this->editproduct = true;
  }

  public function getProductProperty()
  {
    return Product::find($this->productId);
  }
  private function generateUniqueSeoId($name)
  {
    $seoId = Str::slug($name, '-');
    $baseSeoId = $seoId;
    $counter = 1;
    while (
      Product::where('seo_id', $seoId)->orWhere('seo_id', $seoId . '-' . $counter)->exists()
    ) {
      $seoId = $baseSeoId . '-' . $counter;
      $counter++;
    }
    return $seoId;
  }

  public function saveproduct()
  {
    $product_new = $this->prod ?? NULL;
    if (!is_null($product_new)) {
      $new = Product::find($this->productId);
      if (array_key_exists('product_name', $product_new)) {
        $new->name = $product_new['product_name'];
      }
      if (array_key_exists('seo_id', $product_new)) {
        if ($product_new['seo_id'] == "") {
          $new->seo_id = null;
        } elseif ($new->seo_id != $product_new['seo_id']) {
          $new->seo_id = $this->generateUniqueSeoId($product_new['seo_id']);
        }
      }
      if (array_key_exists('type', $product_new)) {
        $new->type = $product_new['type'];
      }

      if (array_key_exists('start_date', $product_new)) {
        $new->start_date = $product_new['start_date'];
      }
      if (array_key_exists('active', $product_new)) {
        $new->active = $product_new['active'];
      }
      if (array_key_exists('is_new', $product_new)) {
        $new->is_new = $product_new['is_new'];
      }
      if (array_key_exists('end_date', $product_new)) {
        $new->end_date = $product_new['end_date'];
      }
      if (array_key_exists('quantity', $product_new)) {
        $new->quantity = $product_new['quantity'];
      }
      if (array_key_exists('short_description', $product_new)) {
        $new->short_description = $product_new['short_description'];
      }
      if (array_key_exists('comments', $product_new)) {
        $new->comments = $product_new['comments'];
      }
      if (array_key_exists('meta_description', $product_new)) {
        $new->meta_description = $product_new['meta_description'];
      }
      if (array_key_exists('popularity', $product_new)) {
        $new->popularity = $product_new['popularity'];
        Cache::forget('max_popularity');
        if (!$new->reviews->first()) {
          $value = (100 / (app('max_popularity') / $new->popularity)) / 20;

          ModelsProductReviews::create([
            'product_id' => $new->id,
            'count' => 1,
            'value' => $value
          ]);
        } else {
          $value = (100 / (app('max_popularity') / $new->popularity)) / 20;
          ModelsProductReviews::where('product_id', $new->id)->update([
            'value' => $value,
          ]);
        }
      }
      if (array_key_exists('long_description', $product_new)) {
        $new->long_description = $product_new['long_description'];
      }
      if (array_key_exists('seo_title', $product_new)) {
        $new->seo_title = $product_new['seo_title'];
      }
      if (array_key_exists('sku', $product_new)) {
        $new->sku = $product_new['sku'];
      }
      if (array_key_exists('ean', $product_new)) {
        $new->ean = $product_new['ean'];
      }
      $new->last_modified_by = Auth::user()->name;
      $new->updated_at = now();
      $new->save();
      $this->emit('itemSaved');
      session()->flash('notification', [
        'message' => 'Record edited successfully!',
        'type' => 'success',
        'title' => 'Success'
      ]);
    }
    $this->prod = [];
    $this->editproduct = null;
  }
  public function updated()
  {
    $this->dispatchBrowserEvent('tabNavigation');
  }
  public function cancelproduct()
  {
    $this->editproduct = null;
    $this->prod = [];
  }
  public function deleteRecord()
  {
    $id = $this->productId;
    $product = Product::find($id);
    $productcats = Products_categories::where('product_id', $id)->get();
    if ($productcats != NULL) {
      foreach ($productcats as $productcat) {
        $productcat->delete();
      }
    }
    $productspecs = Product_Spec::where('product_id', $id)->get();
    if ($productspecs != NULL) {
      foreach ($productspecs as $productspec) {
        $productspec->delete();
      }
    }
    $productcarts = Cart_Item::where('product_id', $id)->get();
    if ($productcarts != NULL) {
      foreach ($productcarts as $cartitem) {
        $cart = $cartitem->cart;
        $cart->sum_amount -= $cartitem->price;
        $cart->quantity_amount -= $cartitem->quantity;
        $cart->save();
        $cartitem->delete();
        $this->emit('cartUpdated');
      }
    }
    $relproducts = Related_Products::where('product_id', $id)->orwhere('parent_id', $id)->get();
    if ($relproducts != NULL) {
      foreach ($relproducts as $item) {
        $item->delete();
      }
    }
    $productswishlist = Wishlist::where('product_id', $id)->get();
    if ($productswishlist != NULL) {
      foreach ($productswishlist as $productwis) {
        $productwis->delete();
        $this->emit('wishlistUpdated');
      }
    }

    ModelsProductReviews::where('product_id', $id)->delete();

    $productpricelists = PricelistEntries::where('product_id', $id)->get();
    if ($productpricelists != NULL) {
      foreach ($productpricelists as $productpricelist) {
        $productpricelist->delete();
      }
    }
    $medias = $product->media()->get();
    foreach ($medias as $media) {
      $media->delete();
    }
    $productType = class_basename(get_class($product));
    $filespath = 'media/' . $productType . '/' . $product->id;
    if (File::exists($filespath)) {
      File::deleteDirectory($filespath);
    }


    if ($product->type == 'parent') {
      $variants = ProductVariant::where('parent_id', $id)->get();
      if ($variants != NULL) {
        foreach ($variants as $variant) {
          $variant->delete();
        }
        $parentids = Product::where('parent_id', $id)->update(['parent_id' => NULL]);
      }
    }
    $product->delete();
    $this->delete = false;
    return redirect()->route('all_products')->with('notification', [
      'message' => 'Record deleted successfully!',
      'type' => 'success',
      'title' => 'Success'
    ]);
  }
  public function render()
  {
    return view('livewire.show-product', [
      'product' => $this->product
    ]);
  }
}