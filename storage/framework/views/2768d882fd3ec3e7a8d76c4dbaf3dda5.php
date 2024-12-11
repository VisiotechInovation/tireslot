<div class="leftbar <?php if($showwis): ?> active <?php endif; ?>" id="wishList">
 <button class="leftbar__hidden--close" id="wishHidden" wire:click="$set('showwis', false)"></button>
 <div class="leftbar__content" id="wishContent">
  <div class="leftbar__top">

    <!-- MAKE DYNAMIC -->

   <!-- <a class="leftbar__button" href="/wishlist">
    <?php if(app()->has('label_wishlist_title')): ?>
     <?php echo app('label_wishlist_title'); ?>

    <?php endif; ?>
   </a> -->
   <span><?php if(app()->has('label_wishlist_page_title')): ?>
    <?php echo app('label_wishlist_page_title'); ?>

    <?php endif; ?>
</span>
   <!-- MAKE DYNAMIC -->

   <button class="leftbar__close" wire:click="$set('showwis', false)" id="wishClose" href="#">
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
  <?php if(!isset($items) || $items->isEmpty()): ?>
   <span class="leftbar__empty">
    <?php if(app()->has('label_wishlist_empty')): ?>
     <?php echo app('label_wishlist_empty'); ?>

    <?php endif; ?>
   </span>
  <?php else: ?>
   <?php
   $disables = [];
   ?>
   <ul class="leftbar__list">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php
     $disabled[$index] = false;
     if ($item->product->active != true || $item->product->start_date > now()->format('Y-m-d') || $item->product->end_date < now()->format('Y-m-d')) {
         $disabled[$index] = true;
     } ?>
     <li class="leftbar__item">

      <a class="leftbar__link"
       href="<?php echo e(route('product', ['product' => $item->product->seo_id !== null && $item->product->seo_id !== '' ? $item->product->seo_id : $item->product->id])); ?>">
       <?php if($item->product->media->where('type', 'min')->first()): ?>
        <img title="<?php echo e($item->product->name); ?>" loading="eager" class="cart__list--img"
         src="/<?php echo e($item->product->media->where('type', 'min')->first()->path); ?><?php echo e($item->product->media->where('type', 'min')->first()->name); ?>"
         alt="<?php echo e($item->product->name); ?>">
       <?php else: ?>
        <img title="Default image" loading="eager" class="heart__list--img" src="/images/store/default/default70.webp"
         alt="something wrong">
       <?php endif; ?>

       <div class="leftbar__link--text">
        <h4 class="leftbar__link--title"><?php echo e($item->product->name); ?></h4>
        <span class="leftbar__link--price">
         <?php
          if (optional($item->product->product_prices->first())->value) {
              $price = number_format(optional($item->product->product_prices->first())->value, 2, $decimal, $mill);
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
      <?php if($item->product->quantity > 0 && $item->product->product_prices->first() !== null): ?>
       <button class="leftbar__delete" style="border: none"
        wire:click="addToCart(<?php echo e($item->product->id); ?>, <?php echo e($index); ?>)" aria-label="add to cart">
        <svg>
         <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
         <line x1="3" y1="6" x2="21" y2="6"></line>
         <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
       </button>
      <?php endif; ?>

      <button class="leftbar__delete" style="border: none" wire:click="removeFromWishlist(<?php echo e($item->product->id); ?>)"
       aria-label="delete from wishlist">
       <svg>
        <polyline points="3 6 5 6 21 6"></polyline>
        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
       </svg>
      </button>
      <?php if($disabled[$index]): ?>
       <div class="item__product--disabled">
        <span>
         <?php if(app()->has('label_product_status_indisponible')): ?>
          <?php echo app('label_product_status_indisponible'); ?>

         <?php endif; ?>
        </span>
        <button class="leftbar__delete" type="button" wire:click="removeFromWishlist(<?php echo e($item->product->id); ?>)">
         <svg>
          <polyline points="3 6 5 6 21 6"></polyline>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
         </svg>
        </button>
       </div>
      <?php endif; ?>
     </li>
     <?php if($message === $index): ?>
      <p class="leftbar__message">
       <?php if(app()->has('label_wishlist_add_to_cart')): ?>
        <?php echo app('label_wishlist_add_to_cart'); ?>

       <?php endif; ?>
      </p>
      <script>
       setTimeout(function() {
        window.livewire.find('<?php echo e($_instance->id); ?>').removemessage();
       }, 2500);
      </script>
     <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>
  <?php endif; ?>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/wishlist-products-list.blade.php ENDPATH**/ ?>