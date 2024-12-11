  <div class="search <?php if($active): ?> active <?php endif; ?>" id="searchList">
   <div class="search__container container" id="searchContent">
    <div class="search__top">
     <div class="search__input">
      <button class="search__button" id="searching" aria-label="go to search page">
       <svg>
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
       </svg>
      </button>
      <input id="searchInput" name="search" wire:model.live.debounce.500ms="search" maxlength="100" type="text"
       autocomplete="off" placeholder="<?php if(app()->has('label_breadcrumbs_search')): ?> <?php echo app('label_breadcrumbs_search'); ?> <?php endif; ?>">
     </div>
     <button class="search__close" type="button" id="searchClose" wire:click.prevent="close"
      aria-label="close search component">
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
    <?php if($search && $active): ?>
     <ul class="search__list">
      <?php if(count($objects) > 0 || count($cats) > 0): ?>
       <?php if(count($objects) > 0): ?>
        <?php $__currentLoopData = $objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="search__item">
          <a class="search__link"
           href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>">
           <?php if($product->media->where('type', 'min')->first() != null): ?>
            <img title="<?php echo e($product->name); ?>" loading="eager"
             src="/<?php echo e($product->media->where('type', 'min')->first()->path); ?><?php echo e($product->media->where('type', 'min')->first()->name); ?>"
             alt="<?php echo e($product->name); ?>">
           <?php endif; ?>

           <div class="search__link--text">
            <div class="search__link--top">
             <p><?php echo e($product->short_description); ?></p>
            </div>
            <div class="search__link--bottom">
             <h4><?php echo e($product->name); ?></h4>

             <?php if($product->product_prices->count() != 0): ?>
              <span>
               <?php
                $price = number_format($product->product_prices->first()->value, 2, $decimal, $mill);
               ?>
               <?php if($price): ?>
                <?php echo e($price); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
                 <?php echo app('global_currency_primary_symbol'); ?>

                <?php endif; ?>
               <?php endif; ?>
              </span>
             <?php endif; ?>
            </div>
           </div>
          </a>
         </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       <?php endif; ?>
       <?php if(count($cats) > 0): ?>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="search__item">
          <a class="search__link"
           href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
           <?php if($category->media->first() != null): ?>
            <img title="<?php echo e(strip_tags($category->name)); ?>" loading="eager"
             src="/<?php echo e($category->media->first()->path); ?><?php echo e($category->media->first()->name); ?>"
             alt="<?php echo e($category->media->first()->name); ?> <?php echo e(strip_tags($category->name)); ?>">
           <?php endif; ?>

           <div class="search__link--text">
            <div class="search__link--bottom">
             <h4><?php echo $category->name; ?></h4>
            </div>
           </div>
          </a>
         </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endif; ?>
      <?php else: ?>
       <span>
        <?php if(app()->has('label_message_no_elements')): ?>
         <?php echo app('label_message_no_elements'); ?>

        <?php endif; ?>
       </span>
      <?php endif; ?>
     </ul>
    <?php endif; ?>
   </div>
   <button class="search__close--hidden" id="modalClose" type="button" wire:click.prevent="close"
    aria-label="Close hidden general searchbar">
   </button>
  </div>
<?php /**PATH D:\tireslot\resources\views/livewire/general-search.blade.php ENDPATH**/ ?>