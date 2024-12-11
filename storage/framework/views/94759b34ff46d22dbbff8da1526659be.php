<div
 class="leftbar <?php if($showcart): ?> active <?php endif; ?> <?php if($cartmodified): ?> problem <?php endif; ?> <?php if($aplicabble_voucher): ?> mod <?php endif; ?>"
 id="basketList">
 <button class="leftbar__hidden--close" wire:click="$set('showcart', false)" id="basketHidden"></button>
 <div class="leftbar__content" id="basketContent">
  <div class="leftbar__top">
   <span id="price_change">
    <?php if(app()->has('label_cart_page_title')): ?>
     <?php echo app('label_cart_page_title'); ?>

    <?php endif; ?>
   </span>
   <button class="leftbar__close" id="basketClose" wire:click="$set('showcart', false)">
    <svg>
     <line x1="18" y1="6" x2="6" y2="18"></line>
     <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
   </button>
  </div>

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

  <?php if(!isset($cart) || $cart->quantity_amount == 0): ?>
   <span class="leftbar__empty">
    <?php if(app()->has('label_cart_empty')): ?>
     <?php echo app('label_cart_empty'); ?>

    <?php endif; ?>
   </span>
  <?php else: ?>
   <?php echo e($timer); ?>

   <ul class="leftbar__list">
    <?php
    $isdisabled = false;
    $disables = [];
    $nonquantity = [];
    ?>
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

     <li class="leftbar__item">
      <?php if($nonquantity[$index]): ?>
       <div class="basket__split">
        <div class="leftbar__link">
         <?php if($cartItem->product->media->where('type', 'min')->first()): ?>
          <img loading="eager" class="cart__list--img" title="<?php echo e($cartItem->product->name); ?>"
           src="/<?php echo e($cartItem->product->media->where('type', 'min')->first()->path); ?><?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?>"
           alt="<?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?><?php echo e($cartItem->product->name); ?>">
         <?php else: ?>
          <img title="Default image" loading="eager" class="cart__list--img" src="/images/store/default/default70.webp"
           alt="something wrong">
         <?php endif; ?>
         <div class="leftbar__link--text">
          <h4 class="leftbar__link--title"><?php echo e($cartItem->product->name); ?></h4>
          <span class="item__product--error">
           <?php if(app()->has('label_product_quantity_error')): ?>
            <?php echo app('label_product_quantity_error'); ?>

           <?php endif; ?>
           <?php echo e($cartItem->product->quantity); ?>

          </span>
         </div>
        </div>
        <div class="basket__item" style="border-top:1px solid #333333">
         <div class="quantity" style="border-bottom: 0 !important">
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
       </div>
      <?php else: ?>
       <div class="basket__split">
        <div class="basket__item__mini">
         <a class="leftbar__link"
          href="<?php echo e(route('product', ['product' => $cartItem->product->seo_id !== null && $cartItem->product->seo_id !== '' ? $cartItem->product->seo_id : $cartItem->product->id])); ?>">
          <?php if($cartItem->product->media->where('type', 'min')->first()): ?>
           <img loading="eager" class="cart__list--img" title="<?php echo e($cartItem->product->name); ?>"
            src="/<?php echo e($cartItem->product->media->where('type', 'min')->first()->path); ?><?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?>"
            alt="<?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?><?php echo e($cartItem->product->name); ?>">
          <?php else: ?>
           <img title="Default image" loading="eager" class="cart__list--img" src="/images/store/default/default70.webp"
            alt="something wrong">
          <?php endif; ?>
          <div class="leftbar__link--text">
           <h4 class="leftbar__link--title"><?php echo e($cartItem->product->name); ?></h4>
           <span class="leftbar__link--price">
            <?php
             if (optional($cartItem->product->product_prices->first())->value) {
                 $price = number_format($cartItem->product->product_prices->first()->value, 2, $decimal, $mill);
             } else {
                 $price = null;
             }
            ?>
            <?php if($price && $price != null): ?>
             <?php echo e($price); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            <?php else: ?>
             <?php if(app()->has('label_product_status_indisponible')): ?>
              <?php echo app('label_product_status_indisponible'); ?>

             <?php endif; ?>
            <?php endif; ?>
           </span>
          </div>
         </a>
         <button class="leftbar__delete" style="border: none" type="button"
          wire:click="removeFromCart(<?php echo e($cartItem->product->id); ?>)">
          <svg>
           <polyline points="3 6 5 6 21 6"></polyline>
           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
          </svg>
         </button>
        </div>
        <div class="basket__item__mini" style="border-top:1px solid #333333">
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
       </div>
      <?php endif; ?>

      <?php if($disabled[$index]): ?>
       <div class="item__product--disabled">
        <span>
         <?php if(app()->has('label_product_status_indisponible')): ?>
          <?php echo app('label_product_status_indisponible'); ?>

         <?php endif; ?>
        </span>
        <button class="leftbar__delete" type="button" wire:click="removeFromCart(<?php echo e($cartItem->product->id); ?>)">
         <svg>
          <polyline points="3 6 5 6 21 6"></polyline>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
         </svg>
        </button>
       </div>
      <?php endif; ?>
     </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>

   <div class="leftbar__total">
    <h5 class="leftbar__total--text">
     <?php if(app()->has('label_cart_products_tag')): ?>
      <?php echo app('label_cart_products_tag'); ?>

     <?php endif; ?>
     <span <?php if(app()->has('global_display_delivery_price_on_cart') && app('global_display_delivery_price_on_cart') != 'true'): ?> id="leftbarTotalPrice" <?php endif; ?>>
      <?php echo e(number_format($cart->sum_amount, 2, $decimal, $mill)); ?>

      <?php if(app()->has('global_currency_primary_symbol')): ?>
       <?php echo app('global_currency_primary_symbol'); ?>

      <?php endif; ?>
     </span>
    </h5>
    <?php if(app()->has('global_display_delivery_price_on_cart') && app('global_display_delivery_price_on_cart') === 'true'): ?>
     <h5 class="leftbar__total--text">
      <?php if(app()->has('label_cart_delivery_tag')): ?>
       <?php echo app('label_cart_delivery_tag'); ?>

      <?php endif; ?>
      <span>
       <?php if($cart->delivery_price == 0): ?>
        <?php if(app()->has('label_cart_delivery_free')): ?>
         <?php echo app('label_cart_delivery_free'); ?>

        <?php endif; ?>
       <?php else: ?>
        <?php echo e(number_format($cart->delivery_price, 2, $decimal, $mill)); ?><?php if(app()->has('global_currency_primary_symbol')): ?>
         <?php echo app('global_currency_primary_symbol'); ?>

        <?php endif; ?>
       <?php endif; ?>
      </span>
     </h5>
    <?php endif; ?>
    <?php if($cart->voucher_id != null): ?>
     <h5 class="leftbar__total--text">
      <?php if(app()->has('label_cart_voucher_tag')): ?>
       <?php echo app('label_cart_voucher_tag'); ?>

      <?php endif; ?>
      <span class="voucher__choice">
       -<?php echo e(number_format($cart->voucher_value, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
        <?php echo app('global_currency_primary_symbol'); ?>

       <?php endif; ?>
       <button wire:click="removevoucher" class="details__delete" aria-label="Remove voucher">
        <svg>
         <polyline points="3 6 5 6 21 6"></polyline>
         <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
        </svg>
       </button>
      </span>
     </h5>
    <?php endif; ?>
    <?php if(app()->has('global_display_delivery_price_on_cart') && app('global_display_delivery_price_on_cart') === 'true'): ?>

     <h5 class="leftbar__total--text">
      <?php if(app()->has('label_cart_total_tag')): ?>
       <?php echo app('label_cart_total_tag'); ?>

      <?php endif; ?>
      <span id="leftbarTotalPrice">
       <?php echo e(number_format($cart->final_amount, 2, $decimal, $mill)); ?>

       <?php if(app()->has('global_currency_primary_symbol')): ?>
        <?php echo app('global_currency_primary_symbol'); ?>

       <?php endif; ?>
      </span>
     </h5>
    <?php endif; ?>
    <?php if($message): ?>
     <p class="voucher__error"><?php echo e($message); ?></p>
    <?php endif; ?>

    <?php if(app()->has('global_voucher_system_on') && app('global_voucher_system_on') === 'true'): ?>
     <?php if($cart->voucher_id == null): ?>
      <div class="voucher">
       <input type="text" wire:model="voucher" maxlength="100" name="voucher"
        placeholder="<?php if(app()->has('label_cart_voucher_placeholder')): ?> <?php echo app('label_cart_voucher_placeholder'); ?> <?php endif; ?>">
       <button type="submit" wire:click="checkvoucher">
        <?php if(app()->has('label_cart_voucher_apply')): ?>
         <?php echo app('label_cart_voucher_apply'); ?>

        <?php endif; ?>
       </button>
      </div>
     <?php endif; ?>
    <?php endif; ?>




    <?php if($isdisabled): ?>
     <a class="leftbar__button leftbar__button--long item__button--disabled">
      <?php if(app()->has('label_cart_order')): ?>
       <?php echo app('label_cart_order'); ?>

      <?php endif; ?>
     </a>
     <span class="item__text--disabled" id="headerContinue">
      <?php if(app()->has('label_cart_order_mesage')): ?>
       <?php echo app('label_cart_order_mesage'); ?>

      <?php endif; ?>
     </span>
    <?php else: ?>
     <a class="leftbar__button leftbar__button--long" id="headerContinue" wire:click.prevent="continue()">
      <?php if(app()->has('label_cart_order')): ?>
       <?php echo app('label_cart_order'); ?>

      <?php endif; ?>
     </a>
    <?php endif; ?>
   </div>

   <script>
    document.getElementById('headerContinue').addEventListener('click', function() {
     let productsList = [];
     let products = document.querySelectorAll('.leftbar__item');
     let total = parseFloat(document.getElementById('leftbarTotalPrice').innerText.replace('RON', '')
      .trim());

     products.forEach(function(product) {
      let productName = product.querySelector('.leftbar__link--title').innerText; // Extrage numele produsului
      let productPrice = parseFloat(product.querySelector('.leftbar__link--price').innerText.replace('RON', '')
       .trim());

      let productQuantity = parseInt(product.querySelector('.product__quantity').innerText);


      productsList.push(productName + ' --- ' + productQuantity + 'buc --- ' + productPrice);
     });

     window.dataLayer = window.dataLayer || [];
     window.dataLayer.push({
      'event': 'addToCart',
      'products': productsList,
      'total': total,
      'event': 'continueToCheckout'
     });
    });
   </script>
  <?php endif; ?>
 </div>
 <div class="leftbar__modal">
  <div class="leftbar__modal--text">
   <?php if(app()->has('label_cart_voucher_question')): ?>
    <?php echo app('label_cart_voucher_question'); ?>

    <?php endif; ?> "<?php echo e($voucher); ?>"?
  </div>
  <div class="leftbar__modal--bundle">
   <button class="leftbar__modal--btn" wire:click="confirm_aplicabble">
    <?php if(app()->has('label_cart_voucher_question_confirm')): ?>
     <?php echo app('label_cart_voucher_question_confirm'); ?>

    <?php endif; ?>
   </button>
   <button class="leftbar__modal--btn" wire:click="cancel_aplicabble">
    <?php if(app()->has('label_cart_voucher_question_cancel')): ?>
     <?php echo app('label_cart_voucher_question_cancel'); ?>

    <?php endif; ?>
   </button>
  </div>
 </div>
 <div class="leftbar__problem">
  <div class="leftbar__modal--text">
   <?php if(app()->has('label_cart_changed_mesage')): ?>
    <?php echo app('label_cart_changed_mesage'); ?>

   <?php endif; ?>
  </div>
  <div class="leftbar__modal--bundle">
   <button class="leftbar__modal--btn" wire:click="seen">
    <?php if(app()->has('label_cart_changed_confirm')): ?>
     <?php echo app('label_cart_changed_confirm'); ?>

    <?php endif; ?>
   </button>
  </div>
 </div>
 <script>
  document.addEventListener('livewire:load', function() {
   let observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
     if (entry.isIntersecting) {
      window.livewire.find('<?php echo e($_instance->id); ?>').call('pricechanged');
     }
    });
   });

   observer.observe(document.getElementById('price_change'));
  });
 </script>
</div>
<?php /**PATH D:\tireslot\resources\views/livewire/cart-products-list.blade.php ENDPATH**/ ?>