<div>
 <!------------------------Breadcrumbs----------------------->
 <ol class="breadcrumbs container">
  <li>
   <a class="breadcrumbs__link" href="<?php echo e(url('/')); ?>">
    <?php if(app()->has('label_breadcrumbs_home_page')): ?>
     <?php echo app('label_breadcrumbs_home_page'); ?>

    <?php endif; ?>
   </a>
  </li>
  <li>
   <a class="breadcrumbs__link" href="<?php echo e(url('/search')); ?>">
    <?php if(app()->has('label_breadcrumbs_search')): ?>
     <?php echo app('label_breadcrumbs_search'); ?>

    <?php endif; ?>
   </a>
  </li>
 </ol>
 <!---------------------------------------------------------->
 <section class="controls container controls--search">
  <input class="controls__search" type="text" maxlength="100" autocomplete="off" name="search" id="search"
   wire:model="search" placeholder="<?php if(app()->has('label_placeholder_search')): ?> <?php echo app('label_placeholder_search'); ?> <?php endif; ?>">
  <h2 class="section__title">
   <?php if(app()->has('label_search_title')): ?>
    <?php echo app('label_search_title'); ?>

   <?php endif; ?>
  </h2>
  <div>
   <button class="tab__button tab__button--long <?php if($showproducts): ?> active <?php endif; ?>"
    wire:click="toggle('products')">
    <?php if(app()->has('label_search_product_element')): ?>
     <?php echo app('label_search_product_element'); ?>

     <?php endif; ?> <?php if($products->isNotEmpty()): ?>
      (<?php echo e($products->total()); ?>)
     <?php else: ?>
      (0)
     <?php endif; ?>
   </button>
   <button class="tab__button tab__button--long <?php if($showcategories): ?> active <?php endif; ?>"
    wire:click="toggle('categories')">
    <?php if(app()->has('label_search_category_element')): ?>
     <?php echo app('label_search_category_element'); ?>

     <?php endif; ?> <?php if($categories->isNotEmpty()): ?>
      (<?php echo e($categories->total()); ?>)
     <?php else: ?>
      (0)
     <?php endif; ?>
   </button>
  </div>
 </section>
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
 <?php if($showproducts): ?>
  <section class="catalogue container">
   <?php if($products->isEmpty()): ?>
    <p>
     <?php if(app()->has('label_message_no_elements')): ?>
      <?php echo app('label_message_no_elements'); ?>

     <?php endif; ?>
    </p>
   <?php else: ?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="product">
      <div <?php if($loop->last): ?> id="last_record" <?php endif; ?> class="card">
       <a
        href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>">
        <?php if($product->media->where('type', 'main')->first() != null): ?>
         <img title="<?php echo e($product->name); ?>, <?php echo e($product->short_description); ?>" loading="eager" class="card-image"
          src="/<?php echo e($product->media->where('type', 'main')->first()->path); ?><?php echo e($product->media->where('type', 'main')->first()->name); ?>"
          alt="<?php echo e($product->name); ?>">
        <?php else: ?>
         <img title="Default image" loading="eager" class="card-image" src="/images/store/default/default300.webp"
          alt="something wrong">
        <?php endif; ?>
       </a>
       <?php if ($product->product_prices->count() != 0) {
           $price = number_format($product->product_prices->first()->value, 2, $decimal, $mill);
           $discount = $product->product_prices->first()->discount != 0 ? true : false;
       } else {
           $price = null;
           $discount = false;
       }
       ?>

       <?php if($price): ?>
        
        <?php if($product->quantity < app('global_low_stock') && $product->quantity > 0): ?>
         <p class="card-status out">
          <?php if(app()->has('label_product_status_stock')): ?>
           <?php echo app('label_product_status_stock'); ?>

          <?php endif; ?>
         </p>
         <?php if($discount): ?>
          <p class="card-status save-secondary">
           -<?php echo e($product->product_prices->first()->discount); ?>%
          </p>
         <?php endif; ?>
        <?php elseif($product->quantity == 0 && (app()->has('global_preorder') && app('global_preorder') != 'true')): ?>
         <p class="card-status out">
          <?php if(app()->has('label_product_status_indisponible')): ?>
           <?php echo app('label_product_status_indisponible'); ?>

          <?php endif; ?>
         </p>
        <?php else: ?>
         <?php if($discount): ?>
          <p class="card-status save">
           -<?php echo e($product->product_prices->first()->discount); ?>%
          </p>
         <?php endif; ?>
        <?php endif; ?>
        
       <?php else: ?>
        <p class="card-status save">
         <?php if(app()->has('label_product_status_coming_soon')): ?>
          <?php echo app('label_product_status_coming_soon'); ?>

         <?php endif; ?>
        </p>
       <?php endif; ?>
       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button',
           [
               'productId' => $product->id,
               'class' => 'card__action',
               'is_in_wishlist' => $product->wishlists->isNotEmpty(),
           ])->html();
} elseif ($_instance->childHasBeenRendered($product->id)) {
    $componentId = $_instance->getRenderedChildComponentId($product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($product->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button',
           [
               'productId' => $product->id,
               'class' => 'card__action',
               'is_in_wishlist' => $product->wishlists->isNotEmpty(),
           ]);
    $html = $response->html();
    $_instance->logRenderedChild($product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

       <div class="card-info">
        <div class="card-text">
         <h2 class="card-title"><a style="text-decoration: none; font-weight:500"
           href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>"><?php echo e($product->name); ?></a>
         </h2>
         <?php
          if (app()->has('global_cache_data') && app('global_cache_data') === 'true') {
              $primaryCategory = $product->product_categories->where('primary_category', true)->first();
          } else {
              $primaryCategory = $product->product_categories->first();
          }
         ?>

         <?php if($primaryCategory && $primaryCategory->category): ?>
          <a class="categorylink"
           href="<?php echo e(route('products', ['categorySlug' => $primaryCategory->category->seo_id !== null && $primaryCategory->category->seo_id !== '' ? $primaryCategory->category->seo_id : $primaryCategory->category->id])); ?>">
           <?php echo e($primaryCategory->category->short_description); ?>

          </a>
         <?php endif; ?>

         <p class="card-price">
          <?php if($discount): ?>
           <span class="card-price discount">
            <?php if($product->product_prices->first()): ?>
             <?php echo e($price); ?>

             <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            <?php endif; ?>
           </span>
           <span class="card-price oldprice">
            <?php echo e(number_format($product->product_prices->first()->value_no_discount, 2, $decimal, $mill)); ?>

            <?php if(app()->has('global_currency_primary_symbol')): ?>
             <?php echo app('global_currency_primary_symbol'); ?>

            <?php endif; ?>
           </span>
          <?php else: ?>
           <span>
            <?php if($product->product_prices->first()): ?>
             <?php echo e($price); ?>

             <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            <?php endif; ?>
           </span>
          <?php endif; ?>
         </p>
         <div style="display: none">
          <span class="dlv_name"><?php echo e($product->name); ?></span>
          <span class="dlv_price"><?php echo e($price); ?></span>
          <span class="dlv_currency">
           <?php if(app()->has('global_currency_primary_name')): ?>
            <?php echo app('global_currency_primary_name'); ?>

           <?php endif; ?>
          </span>
         </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered($product->id . $index)) {
    $componentId = $_instance->getRenderedChildComponentId($product->id . $index);
    $componentTag = $_instance->getRenderedChildComponentTagName($product->id . $index);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($product->id . $index);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild($product->id . $index, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
       </div>
      </div>
     </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal605876b7eed402330ce0f26b73dba20a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal605876b7eed402330ce0f26b73dba20a = $attributes; } ?>
<?php $component = App\View\Components\Lazy::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Lazy::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal605876b7eed402330ce0f26b73dba20a)): ?>
<?php $attributes = $__attributesOriginal605876b7eed402330ce0f26b73dba20a; ?>
<?php unset($__attributesOriginal605876b7eed402330ce0f26b73dba20a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal605876b7eed402330ce0f26b73dba20a)): ?>
<?php $component = $__componentOriginal605876b7eed402330ce0f26b73dba20a; ?>
<?php unset($__componentOriginal605876b7eed402330ce0f26b73dba20a); ?>
<?php endif; ?>
   <?php endif; ?>
  </section>

 <?php endif; ?>

 <?php if($showcategories): ?>
  <section class="catalogue container catalogue--categories">
   <?php if($categories->isEmpty()): ?>
    <p>
     <?php if(app()->has('label_message_no_elements')): ?>
      <?php echo app('label_message_no_elements'); ?>

     <?php endif; ?>
    </p>
   <?php else: ?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div <?php if($loop->last): ?> id="last_record" <?php endif; ?> class="product">
      <a class="card card--category" role="listitem"
       href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
       <div>
        <?php if($category->media->first() != null): ?>
         <img title="<?php echo e(strip_tags($category->name)); ?>" loading="eager" class="card-image"
          src="/<?php echo e($category->media->first()->path); ?><?php echo e($category->media->first()->name); ?>"
          alt="<?php echo e(strip_tags($category->name)); ?>">
        <?php endif; ?>
       </div>
       <div class="card-info">
        <div class="card-text">
         <h3 class="card-title"><?php echo $category->name; ?></h2>
        </div>
        <?php echo $category->long_description; ?>

       </div>
      </a>
     </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal605876b7eed402330ce0f26b73dba20a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal605876b7eed402330ce0f26b73dba20a = $attributes; } ?>
<?php $component = App\View\Components\Lazy::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Lazy::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal605876b7eed402330ce0f26b73dba20a)): ?>
<?php $attributes = $__attributesOriginal605876b7eed402330ce0f26b73dba20a; ?>
<?php unset($__attributesOriginal605876b7eed402330ce0f26b73dba20a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal605876b7eed402330ce0f26b73dba20a)): ?>
<?php $component = $__componentOriginal605876b7eed402330ce0f26b73dba20a; ?>
<?php unset($__componentOriginal605876b7eed402330ce0f26b73dba20a); ?>
<?php endif; ?>
   <?php endif; ?>
  </section>
 <?php endif; ?>
 <?php if($products->count() > $loadAmount || $categories->count() > $loadAmount): ?>
  <section class="container">
   <button class="filter__apply" wire:click="loadMore" wire:loading.remove>Vezi mai mult!</button>
  </section>
 <?php endif; ?>

 <!---------------------------------------------------------->
 <script src="/script/store/catalog.js" defer></script>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-search.blade.php ENDPATH**/ ?>