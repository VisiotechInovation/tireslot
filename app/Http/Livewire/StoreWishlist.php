<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Cart;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\Cart_Item;


class StoreWishlist extends Component
{
  protected $listeners = ['wishlistProductRemoved' => 'mount'];
  public $session_id;
  public $message = null;



  public function render()
  {
    $data = [
      'wishlistitems' => $this->items
    ];
    return view('livewire.store-wishlist', $data);
  }
  public function removemessage()
  {
    $this->message = null;
  }
  public function mount()
  {
    $this->session_id = request()->cookie('sessionId') ?? session()->getId();
  }
  public function removeFromWishlist($productId)
  {
    Wishlist::where('session_id', $this->session_id)
      ->where('product_id', $productId)
      ->delete();
    $this->emit('wishlistUpdated');
  }
  public function getItemsProperty()
  {
    if (app()->has('global_cache_data') && app('global_cache_data') === 'true') {
      $cachedProducts = app()->make('cached_products')->keyBy('id');

      $wishlistItems = Wishlist::select('id', 'product_id')
        ->where('session_id', $this->session_id)
        ->get();

      foreach ($wishlistItems as $item) {
        if ($cachedProducts->has($item->product_id)) {
          $item->setRelation('product', $cachedProducts->get($item->product_id));
        }
      }

      return $wishlistItems;
    } else {

      return Wishlist::select('id', 'product_id')
        ->where('session_id', $this->session_id)
        ->with([
          'product' => function ($query) {
            $query->select('id', 'name', 'seo_id', 'active', 'start_date', 'end_date', 'quantity')->with([
              'media' => function ($query) {
                $query->select('path', 'name', 'type')->where('type', 'min');
              },
              'product_prices' => function ($query) {
                $query->select('product_id', 'value', 'pricelist_id');
              }
            ]);
          }
        ])->get() ?? collect();
    }
  }

  public function addToCart($productId, $index)
  {
    $cart = Cart::where('session_id', $this->session_id)
      ->where('status_id', '!=', app('global_cart_closed'))
      ->with('voucher')
      ->latest()
      ->first();

    $product = Product::with(['product_prices' => function ($query) {
      $query->select('product_id', 'value', 'pricelist_id')
        ->with(['pricelist' => function ($query) {
          $query->select('id', 'currency_id');
        }]);
    }])->find($productId);

    if (!$cart) {
      $baseName = class_basename(Cart::class);
      $cartNumber = 1;
      $uniqueName = $baseName . '_' . str_pad($cartNumber, 2, '0', STR_PAD_LEFT);
      while (Cart::where('name', $uniqueName)->exists()) {
        $cartNumber++;
        $uniqueName = $baseName . '_' . str_pad($cartNumber, 2, '0', STR_PAD_LEFT);
      }
      $cart = Cart::create([
        'session_id' => $this->session_id,
        'name' => $uniqueName,
        'delivery_price' => app('global_delivery_price'),
        'status_id' => app('global_cart_new'),
        'currency_id' => $product->product_prices->first()->pricelist->currency_id,
      ]);
      $this->emit('newcart');
    }

    $cartItem = Cart_Item::where('cart_id', $cart->id)
      ->where('product_id', $productId)
      ->first();

    if (!$cartItem) {
      $cartItem = Cart_Item::create([
        'cart_id' => $cart->id,
        'product_id' => $productId,
        'price' => $product->product_prices->first()->value,
        'quantity' => 1
      ]);
      $cart->increment('quantity_amount');
      $cart->sum_amount += $product->product_prices->first()->value;
      if ($cart->voucher && $cart->voucher->percent !== null) {
        $cart->voucher_value = ($cart->voucher->percent / 100) * $cart->sum_amount;
      } elseif ($cart->voucher && $cart->voucher->value !== null) {
        $cart->voucher_value = $cart->voucher->value;
      }
      $cart->final_amount = $cart->sum_amount + $cart->delivery_price;
      $cart->final_amount -= $cart->voucher_value;
      $this->message = $index;
    } else {
      if ($cartItem->quantity < $product->quantity) {
        $cartItem->increment('quantity');
        $cart->increment('quantity_amount');
        $cart->delivery_price = app('global_delivery_price');
        if ($cartItem->price != $product->product_prices->first()->value) {
          $cartItem->price = $product->product_prices->first()->value;
          $cartItem->save();
          $sum_amount = 0;
          foreach ($cart->carts as $item) {
            $sum_amount = $sum_amount + $item->price * $item->quantity;
          }
          $cart->sum_amount = $sum_amount;
          $cart->seen_by_customer = true;
        } else {
          $cart->sum_amount += $product->product_prices->first()->value;
        }
        if ($cart->voucher && $cart->voucher->percent !== null) {
          $cart->voucher_value = ($cart->voucher->percent / 100) * $cart->sum_amount;
        } elseif ($cart->voucher && $cart->voucher->value !== null) {
          $cart->voucher_value = $cart->voucher->value;
        }
        $cart->final_amount = $cart->sum_amount + app('global_delivery_price');
        $cart->final_amount -= $cart->voucher_value;
        $this->message = $index;
      }
    }
    $cart->status_id = app('global_cart_new');
    $cart->save();
    $this->emit('cartUpdated');
  }
}
