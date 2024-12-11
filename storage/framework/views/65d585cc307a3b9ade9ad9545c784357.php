<div>

 <?php if (isset($component)) { $__componentOriginaled294631d37647e445f10fc8c8154197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled294631d37647e445f10fc8c8154197 = $attributes; } ?>
<?php $component = App\View\Components\StoreAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StoreAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled294631d37647e445f10fc8c8154197)): ?>
<?php $attributes = $__attributesOriginaled294631d37647e445f10fc8c8154197; ?>
<?php unset($__attributesOriginaled294631d37647e445f10fc8c8154197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled294631d37647e445f10fc8c8154197)): ?>
<?php $component = $__componentOriginaled294631d37647e445f10fc8c8154197; ?>
<?php unset($__componentOriginaled294631d37647e445f10fc8c8154197); ?>
<?php endif; ?>
 <?php
  if (app()->has('global_numberformat_element')) {
      if (app('global_numberformat_element') === '.') {
          $mill = '.';
          $decimal = ',';
      } else {
          $mill = ',';
          $decimal = '.';
      }
  } else {
      $mill = '.';
      $decimal = ',';
  }
 ?>
 <section>
  <div class="section__header container">
   <h1 class="section__title">
    <?php if(app()->has('label_cart_page_title')): ?>
     <?php echo app('label_cart_page_title'); ?>

    <?php endif; ?>
   </h1>
   <h2></h2>
   <?php if(isset($cart) && $cart->quantity_amount != 0): ?>
    <p class="section__text">
     <?php if(app()->has('label_cart_page_description')): ?>
      <?php echo app('label_cart_page_description'); ?>

     <?php endif; ?>
    </p>
   <?php endif; ?>
  </div>
 </section>
 <section>
  <div class="basket__container container">
   <!------------------- Products ------------------>
   <div class="basket">
    <?php if(!isset($cart) || $cart->quantity_amount == 0): ?>
     <span class="basket__empty">
      <?php if(app()->has('label_cart_empty')): ?>
       <?php echo app('label_cart_empty'); ?>

      <?php endif; ?>
     </span>
    <?php else: ?>
     <?php $disables = [];
     $nonquantity = [];
     $isdisabled = false; ?>
     <?php $__currentLoopData = $cart->cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $disabled[$index] = false;
      $nonquantity[$index] = false;
      
      if ($cartItem->product->active != true || $cartItem->product->start_date > now()->format('Y-m-d') || ($cartItem->product->end_date < now()->format('Y-m-d') || ($cartItem->product->quantity < 0 && (app()->has('global_preorder') && app('global_preorder') != 'true')))) {
          $disabled[$index] = true;
          $isdisabled = true;
      }
      if (!optional($cartItem->product->product_prices->first())->value) {
          $disabled[$index] = true;
          $isdisabled = true;
      }
      
      if ($cartItem->product->quantity > 0 && $cartItem->product->quantity < $cartItem->quantity && (app()->has('global_preorder') && app('global_preorder') != 'true')) {
          $nonquantity[$index] = true;
          $isdisabled = true;
      }
      
      ?>
      <div class="basket__split">
       <div class="basket__item">
        <a style="width: 100%; display: flex; flex: 1;text-decoration: none"
         href="<?php echo e(route('product', ['product' => $cartItem->product->seo_id !== null && $cartItem->product->seo_id !== '' ? $cartItem->product->seo_id : $cartItem->product->id])); ?>">
         <?php if($cartItem->product->media->where('type', 'min')->first()): ?>
          <img loading="eager" class="cart__list--img" title="<?php echo e($cartItem->product->name); ?>"
           src="/<?php echo e($cartItem->product->media->where('type', 'min')->first()->path); ?><?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?>"
           alt="<?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?> <?php echo e($cartItem->product->name); ?>">
         <?php else: ?>
          <img title="Default image" loading="eager" class="cart__list--img" src="/images/store/default/default70.webp"
           alt="something wrong">
         <?php endif; ?>
         <div class="basket__text">
          <h3><?php echo e($cartItem->product->name); ?></h3>
          <span>
           <?php echo e(number_format($cartItem->price, 2, $decimal, $mill)); ?>

           <?php if(app()->has('global_currency_primary_symbol')): ?>
            <?php echo app('global_currency_primary_symbol'); ?>

           <?php endif; ?>

          </span>
          <?php if($nonquantity[$index]): ?>
           <span class="item__product--error">
            <?php if(app()->has('label_product_quantity_error')): ?>
             <?php echo app('label_product_quantity_error'); ?>

            <?php endif; ?>
            <?php echo e($cartItem->product->quantity); ?>

           </span>
          <?php endif; ?>
         </div>
        </a>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button',
            [
                'productId' => $cartItem->product->id,
                'class' => 'basket__action',
                'is_in_wishlist' => $this->isInWishlist($cartItem->product->id),
            ])->html();
} elseif ($_instance->childHasBeenRendered($cartItem->product->id)) {
    $componentId = $_instance->getRenderedChildComponentId($cartItem->product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($cartItem->product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($cartItem->product->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button',
            [
                'productId' => $cartItem->product->id,
                'class' => 'basket__action',
                'is_in_wishlist' => $this->isInWishlist($cartItem->product->id),
            ]);
    $html = $response->html();
    $_instance->logRenderedChild($cartItem->product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <button class="basket__delete" aria-label="Remove from cart button"
         wire:click="removeFromCart(<?php echo e($cartItem->product->id); ?>)" onclick="removeItem(this)">
         <svg>
          <polyline points="3 6 5 6 21 6"></polyline>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
          </path>
         </svg>
        </button>
       </div>
       <div class="basket__item">
        <div class="quantity">
         <span>
          <?php if(app()->has('label_product_quantity_tag')): ?>
           <?php echo app('label_product_quantity_tag'); ?>

          <?php endif; ?>
         </span>
         <div class="quantity__buttons">
          <button class="quantity__arrow <?php if($cartItem->quantity == 1): ?> disabled <?php endif; ?>"
           style="width: 48px; height: 48px" aria-label="Decrease quantity"
           wire:click="decrement(<?php echo e($cartItem->id); ?>)">
           <svg>
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="8" y1="12" x2="16" y2="12">
            </line>
           </svg>
          </button>
          <span class="quantity__input product__quantity">
           <?php echo e($cartItem->quantity); ?>

          </span>
          <button class="quantity__arrow <?php if(
              $cartItem->quantity >= $cartItem->product->quantity &&
                  (app()->has('global_preorder') && app('global_preorder') != 'true')): ?> disabled <?php endif; ?>"
           style="width: 48px; height: 48px" aria-label="Increase quantity"
           wire:click="increment(<?php echo e($cartItem->id); ?>)">
           <svg>
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="16">
            </line>
            <line x1="8" y1="12" x2="16" y2="12">
            </line>
           </svg>
          </button>
         </div>
        </div>
        <div class="basket__subtotal">
         <span>
          <?php if(app()->has('label_cart_page_subtotal_tag')): ?>
           <?php echo app('label_cart_page_subtotal_tag'); ?>

          <?php endif; ?>
         </span>
         <span>
          <?php echo e(number_format($cartItem->quantity * $cartItem->price, 2, $decimal, $mill)); ?>

          <?php if(app()->has('global_currency_primary_symbol')): ?>
           <?php echo app('global_currency_primary_symbol'); ?>

          <?php endif; ?>
         </span>
        </div>
       </div>
       <?php if($disabled[$index]): ?>
        <div class="item__product--disabled">
         <span>
          <?php if(app()->has('label_product_status_indisponible')): ?>
           <?php echo app('label_product_status_indisponible'); ?>

          <?php endif; ?>
         </span>
         <button class="leftbar__delete" type="button" wire:click="removeFromCart(<?php echo e($cartItem->product->id); ?>)">
          <svg>
           <line x1="18" y1="6" x2="6" y2="18"></line>
           <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
         </button>
        </div>
       <?php endif; ?>
      </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
   </div>
   <?php if($cart != null && $cart->quantity_amount != 0): ?>
    <div class="details">
     <div class="details__content">
      <h2 class="details__title">
       <?php if(app()->has('label_cart_page_order_details')): ?>
        <?php echo app('label_cart_page_order_details'); ?>

       <?php endif; ?>
      </h2>
      <div class="details__text">
       <h3>
        <?php if(app()->has('label_cart_products_tag')): ?>
         <?php echo app('label_cart_products_tag'); ?>

        <?php endif; ?>
       </h3>
       <span> <?php echo e(number_format($cart->sum_amount, 2, $decimal, $mill)); ?>

        <?php if(app()->has('global_currency_primary_symbol')): ?>
         <?php echo app('global_currency_primary_symbol'); ?>

        <?php endif; ?>
       </span>
      </div>
      <?php if(app()->has('global_display_delivery_price_on_cart') && app('global_display_delivery_price_on_cart') === 'true'): ?>

       <div class="details__text">
        <h3>
         <?php if(app()->has('label_cart_delivery_tag')): ?>
          <?php echo app('label_cart_delivery_tag'); ?>

         <?php endif; ?>
        </h3>
        <span>
         <?php if($cart->delivery_price == 0): ?>
          <?php if(app()->has('label_cart_delivery_free')): ?>
           <?php echo app('label_cart_delivery_free'); ?>

          <?php endif; ?>
         <?php else: ?>
          <?php echo e(number_format($cart->delivery_price, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
           <?php echo app('global_currency_primary_symbol'); ?>

          <?php endif; ?>
         <?php endif; ?>
        </span>
       </div>
      <?php endif; ?>
      <?php if($cart->voucher_id != null): ?>
       <div class="details__text">
        <h3>
         <?php if(app()->has('label_cart_voucher_tag')): ?>
          <?php echo app('label_cart_voucher_tag'); ?>

         <?php endif; ?>
        </h3>
        <span class="voucher__choice">
         -<?php echo e(number_format($cart->voucher_value, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
          <?php echo app('global_currency_primary_symbol'); ?>

         <?php endif; ?>
         <button wire:click="removevoucher" class="details__delete" aria-label="Remove voucher">
          <svg>
           <polyline points="3 6 5 6 21 6"></polyline>
           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
           </path>
          </svg>
         </button>
        </span>
       </div>
      <?php endif; ?>
     </div>
     <div class="details__content">
      <div class="details__text">
       <h3>
        <?php if(app()->has('label_cart_total_tag')): ?>
         <?php echo app('label_cart_total_tag'); ?>

        <?php endif; ?>
       </h3>
       <span id="detailsTotal">
        <?php if(app()->has('global_display_delivery_price_on_cart') && app('global_display_delivery_price_on_cart') === 'true'): ?>
         <?php echo e(number_format($cart->final_amount, 2, $decimal, $mill)); ?>

        <?php else: ?>
         <?php echo e(number_format($cart->final_amount - app('global_delivery_price'), 2, $decimal, $mill)); ?>

        <?php endif; ?>
        <?php if(app()->has('global_currency_primary_symbol')): ?>
         <?php echo app('global_currency_primary_symbol'); ?>

        <?php endif; ?>
       </span>
      </div>
      <?php if($message): ?>
       <p class="voucher__error"><?php echo e($message); ?></p>
      <?php endif; ?>
      <?php if($cart->voucher_id == null): ?>

      <!-- CHANGE TO DYNAMIC -->

       <!-- <div class="voucher">
         <input type="text" wire:model="voucher" maxlength="100" name="voucher"
         placeholder="<?php if(app()->has('label_cart_voucher_placeholder')): ?> <?php echo app('label_cart_voucher_placeholder'); ?> <?php endif; ?>">
        <button type="submit" wire:click="checkvoucher">
         <?php if(app()->has('label_cart_voucher_apply')): ?>
          <?php echo app('label_cart_voucher_apply'); ?>

         <?php endif; ?>
        </button>
       </div> -->

       <!-- CHANGE TO DYNAMIC -->
      <?php endif; ?>
      <?php if($aplicabble_voucher): ?>
       <div class="voucher__question">
        <div class="voucher__question--text">
         <?php if(app()->has('label_cart_voucher_question')): ?>
          <?php echo app('label_cart_voucher_question'); ?>

         <?php endif; ?>
         "<?php echo e($voucher); ?>"?
        </div>
        <div class="voucher__question--bundle">
         <button class="voucher__question--btn" wire:click="confirm_aplicabble">
          <?php if(app()->has('label_cart_voucher_question_confirm')): ?>
           <?php echo app('label_cart_voucher_question_confirm'); ?>

          <?php endif; ?>
         </button>
         <button class="voucher__question--btn" wire:click="cancel_aplicabble">
          <?php if(app()->has('label_cart_voucher_question_cancel')): ?>
           <?php echo app('label_cart_voucher_question_cancel'); ?>

          <?php endif; ?>
         </button>
        </div>
       </div>
      <?php endif; ?>
      <?php if(!$aplicabble_voucher): ?>
       <?php if($isdisabled): ?>
        <a class="leftbar__button leftbar__button--long item__button--disabled">
         <?php if(app()->has('label_cart_voucher_question')): ?>
          <?php echo app('label_cart_order'); ?>

         <?php endif; ?>
        </a>

        <span class="item__text--disabled" id="detailsContinue">
         <?php if(app()->has('label_cart_voucher_question')): ?>
          <?php echo app('label_cart_order_error'); ?>

         <?php endif; ?>
        </span>
       <?php else: ?>
        <button id="detailsContinue" class="details__button details__continue" wire:click="continue()"
         aria-label="Continue form">
         <?php if(app()->has('label_cart_voucher_question')): ?>
          <?php echo app('label_cart_order'); ?>

         <?php endif; ?>
        </button>
       <?php endif; ?>
      <?php endif; ?>
     </div>
    </div>
   <?php endif; ?>
   <!----------------- End Basket Continue ---------------->
  </div>
 </section>
 <?php if($cart != null && $cart->quantity_amount != 0): ?>
  <div class="dlv" style="display: none">
   <span class="dlv_currency">
    <?php if(app()->has('global_currency_primary_symbol')): ?>
     <?php echo app('global_currency_primary_symbol'); ?>

    <?php endif; ?>
   </span>
   <span class="dlv_value"><?php echo e(number_format($cart->sum_amount, 2, $decimal, $mill)); ?></span>
   <?php $__currentLoopData = $cart->cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="dlv_item">
     <span class="dlv_item-id"><?php echo e($cartItem->product->id); ?></span>
     <span class="dlv_item-name"><?php echo e($cartItem->product->name); ?></span>
     <span class="dlv_item-price"><?php echo e($cartItem->price); ?></span>
     <span class="dlv_item-quantity"><?php echo e($cartItem->quantity); ?></span>
    </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <script>
   function view_cart() {
    // Variables
    const dlv = document.querySelector('.dlv');
    // Check if dlv element exists
    if (!dlv) {
     console.error('Elementul cu clasa .dlv nu a fost găsit.');
     return;
    }
    // Get all Values
    const currency = dlv.querySelector('.dlv_currency').innerText.trim();
    const value = parseFloat(dlv.querySelector('.dlv_value').innerText.trim().replace(',', '.'));
    const items = [];
    // Get all items
    const dlv_items = dlv.querySelectorAll('.dlv_item');
    // Loop through each item
    dlv_items.forEach(dlv_item => {
     const item_id = dlv_item.querySelector('.dlv_item-id').innerText.trim();
     const item_name = dlv_item.querySelector('.dlv_item-name').innerText.trim();
     const item_price = parseFloat(dlv_item.querySelector('.dlv_item-price').innerText.trim().replace(',', '.'));
     const item_quantity = parseInt(dlv_item.querySelector('.dlv_item-quantity').innerText.trim(), 10);

     // Create item object
     const item = {
      item_id: item_id,
      item_name: item_name,
      price: item_price,
      quantity: item_quantity
     };

     // Push item in the array
     items.push(item);
    });

    // Create the data object
    const dlvData = {
     currency: currency,
     value: value,
     items: items
    };
    // Show the object
    // console.log(dlvData);
    return dlvData;
   };

   const dlvData = view_cart();

   dataLayer.push({
    ecommerce: null
   });
   dataLayer.push({
    event: "view_cart",
    ecommerce: {
     currency: dlvData.currency,
     value: dlvData.value,
     items: dlvData.items
    }
   });
  </script>
 <?php endif; ?>

 <script src="/script/store/sickycartinfo.js" defer></script>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-cart.blade.php ENDPATH**/ ?>