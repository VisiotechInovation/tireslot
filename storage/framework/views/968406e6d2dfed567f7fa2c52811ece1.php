<div>
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
 <ol class="breadcrumbs container">
  <li>
   <a class="breadcrumbs__link" href="<?php echo e(url('/')); ?>">
    <?php if(app()->has('label_breadcrumbs_home_page')): ?>
     <?php echo app('label_breadcrumbs_home_page'); ?>

    <?php endif; ?>
   </a>
  </li>
  <?php if(app()->has('global_show_on_breadcrumbs') && app('global_show_on_breadcrumbs') == 'true'): ?>
   <li>
    <a class="breadcrumbs__link" href="<?php echo e(url('/storeproducts')); ?>">
     <?php if(app()->has('label_breadcrumbs_allproducts')): ?>
      <?php echo app('label_breadcrumbs_allproducts'); ?>

     <?php endif; ?>
    </a>
   </li>
  <?php endif; ?>
  <!-------------------If Category is appear------------------>
  <?php if($category != null && $category->id != app('global_default_category')): ?>
   <?php $__currentLoopData = $category->getCategoryBreadcrumbs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($breadcrumb['name'] === $category->name): ?>
     <li>
      <a class="breadcrumbs__link"
       href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
       <?php echo $category->name; ?>

      </a>
     </li>
    <?php else: ?>
     <li>
      <a class="breadcrumbs__link" href="<?php echo e(route('products', ['categorySlug' => $breadcrumb['slug']])); ?>">
       <?php echo e($breadcrumb['name']); ?>

      </a>
     </li>
    <?php endif; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
 </ol>
 <!----------------------Categorie + detalii--------------------->
 <?php if($category): ?>
  <section class="section__header container">
   <h1 class="section__title">
    <?php if(!empty($category->short_description)): ?>
     <?php echo e($category->short_description); ?>

    <?php else: ?>
     <?php echo $category->name; ?>

    <?php endif; ?>
   </h1>
   <p class="section__text">
    <?php echo $category->long_description; ?>

   </p>
  </section>
 <?php endif; ?>

 <!---------------------------Filter------------------------->
 <section class="controls container" id="productlist">
  <button class="controls__button" id="filterOpen" aria-label="Open filter button">
   <svg>
    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
   </svg>
  </button>
  <input class="controls__search" maxlength="100" type="text" name="search" id="search"
   wire:model.live.debounce.500ms="search" autocomplete="off"
   placeholder="<?php if(app()->has('label_placeholder_search')): ?> <?php echo app('label_placeholder_search'); ?> <?php endif; ?>">
  <button class="controls__button" id="sortOpen" aria-label="Open sort button">
   <svg>
    <line x1="21" y1="10" x2="7" y2="10"></line>
    <line x1="21" y1="6" x2="3" y2="6"></line>
    <line x1="21" y1="14" x2="3" y2="14"></line>
    <line x1="21" y1="18" x2="7" y2="18"></line>
   </svg>
  </button>
 </section>
 <!---------------------------- Display filters-------------------------->
 <?php if(!empty($selectedfilters)): ?>
  <section class="tag container">
   <?php $__currentLoopData = $selectedfilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $specname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button class="tag__button" wire:click="removeSpec('<?php echo e($key); ?>', '<?php echo e($specname); ?>')">
     <?php echo e($specname); ?>: <?php echo e($key); ?>

     <svg>
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
     </svg>
    </button>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <button class="tag__button" wire:click="clearall()" class="filter__applied--clear">
    <?php if(app()->has('label_remove_all_filters')): ?>
     <?php echo app('label_remove_all_filters'); ?>

    <?php endif; ?>
    <svg>
     <line x1="18" y1="6" x2="6" y2="18"></line>
     <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
   </button>
  </section>
 <?php endif; ?>
 <!-------------------------Catalogue------------------------>
 <section class="catalogue container">
  <?php if($products->isEmpty()): ?>
   <p>
    <?php if(app()->has('label_message_no_elements')): ?>
     <?php echo app('label_message_no_elements'); ?>

    <?php endif; ?>
   </p>
  <?php else: ?>
   <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php
     if ($product->type == 'parent') {
         if ($product->variants->count() == 0) {
             continue;
         } else {
             if ($product->variants->where('default_variant', true)->first()) {
                 $element = $product->variants->where('default_variant', true)->first()->product;
             } else {
                 $element = $product->variants->first()->product;
             }
         }
     } else {
         $element = $product;
     }
    ?>
    <div wire:key="product-<?php echo e($element->id); ?>" class="product">
     <div <?php if($loop->last): ?> id="last_record" <?php endif; ?> class="card">
      <a
       href="<?php echo e(route('product', ['product' => $element->seo_id !== null && $element->seo_id !== '' ? $element->seo_id : $element->id])); ?>">
       <?php if($element->media->first() != null): ?>
        <img title="<?php echo e($product->name); ?>, <?php echo e($product->short_description); ?>" loading="lazy" class="card-image"
         src="/<?php echo e($element->media->first()->path); ?><?php echo e($element->media->first()->name); ?>" alt="<?php echo e($element->name); ?>">
       <?php else: ?>
        <img title="Default image" loading="lazy" class="card-image" src="/images/store/default/default300.webp"
         alt="something wrong">
       <?php endif; ?>
      </a>


      <?php
       if ($element->product_prices->count() != 0) {
           $price = number_format($element->product_prices->first()->value, 2, $decimal, $mill);
           $discount = $element->product_prices->first()->discount != 0 ? true : false;
       } else {
           $price = null;
           $discount = false;
       }
      ?>
      <?php if($price): ?>
       
       <?php if($element->quantity < app('global_low_stock') && $element->quantity > 0): ?>
        <p class="card-status out">
         <?php if(app()->has('label_product_status_stock')): ?>
          <?php echo app('label_product_status_stock'); ?>

         <?php endif; ?>
        </p>
        <?php if($discount): ?>
         <p class="card-status save-secondary">
          -<?php echo e($element->product_prices->first()->discount); ?>%
         </p>
        <?php endif; ?>
       <?php elseif($element->quantity <= 0 && (app()->has('global_preorder') && app('global_preorder') != 'true')): ?>
        <p class="card-status out">
         <?php if(app()->has('label_product_status_indisponible')): ?>
          <?php echo app('label_product_status_indisponible'); ?>

         <?php endif; ?>
        </p>
       <?php else: ?>
        <?php if($discount): ?>
         <p class="card-status save">
          -<?php echo e($element->product_prices->first()->discount); ?>%
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
              'productId' => $element->id,
              'class' => 'card__action',
              'is_in_wishlist' => $this->isInWishlist($element->id),
          ])->html();
} elseif ($_instance->childHasBeenRendered('w' . $element->id)) {
    $componentId = $_instance->getRenderedChildComponentId('w' . $element->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('w' . $element->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('w' . $element->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button',
          [
              'productId' => $element->id,
              'class' => 'card__action',
              'is_in_wishlist' => $this->isInWishlist($element->id),
          ]);
    $html = $response->html();
    $_instance->logRenderedChild('w' . $element->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <div class="card-info">
       <div class="card-text">
        <h2 class="card-title"><a style="text-decoration: none; font-weight:500"
          href="<?php echo e(route('product', ['product' => $element->seo_id !== null && $element->seo_id !== '' ? $element->seo_id : $element->id])); ?>">
          <?php if($element->type === 'variant' && $category->accepted_items === 'parents'): ?>
           <?php echo e($element->parent->name); ?>

          <?php else: ?>
           <?php echo e($element->name); ?>

          <?php endif; ?>
         </a>
        </h2>
        <?php
         if ($element->type === 'variant' && $category->accepted_items === 'parents') {
             $corectproduct = $element->parent;
         } else {
             $corectproduct = $element;
         }
         if (app()->has('global_cache_data') && app('global_cache_data') === 'true') {
             $primaryCategory = $corectproduct->product_categories->where('primary_category', true)->first();
         } else {
             $primaryCategory = $corectproduct->product_categories->first();
         }
        ?>

        <?php if($primaryCategory && $primaryCategory->category): ?>
         <a class="categorylink"
          href="<?php echo e(route('products', ['categorySlug' => $primaryCategory->category->seo_id !== null && $primaryCategory->category->seo_id !== '' ? $primaryCategory->category->seo_id : $primaryCategory->category->id])); ?>">
          <?php echo e($primaryCategory->category->short_description); ?>

         </a>
        <?php endif; ?>
        <p class="card-price">
         
         <?php if(
             $category->display_variant_price == true &&
                 ($element->type == 'parent' || ($element->type === 'variant' && $category->accepted_items === 'parents')) &&
                 app()->has('global_variant_price_from') &&
                 app()->has('global_variant_add_to_cart') &&
                 app('global_variant_add_to_cart') === 'true' &&
                 app()->has('label_product_price_from') &&
                 app('global_variant_price_from') === 'true'): ?>
          <?php echo app('label_product_price_from'); ?>

         <?php endif; ?>
         
         <?php if($element->type == 'parent' || ($element->type === 'variant' && $category->accepted_items === 'parents')): ?>
          <?php if(
              $category->display_variant_price == true &&
                  app()->has('global_variant_add_to_cart') &&
                  app('global_variant_add_to_cart') === 'true'): ?>
           <?php if($discount): ?>
            <span class="card-price discount">
             <?php if($element->product_prices->first()): ?>
              <?php echo e($price); ?>

              <?php if(app()->has('global_currency_primary_symbol')): ?>
               <?php echo app('global_currency_primary_symbol'); ?>

              <?php endif; ?>
             <?php endif; ?>
            </span>
            <span class="card-price oldprice">
             <?php echo e(number_format($element->product_prices->first()->value_no_discount, 2, $decimal, $mill)); ?>

             <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            </span>
           <?php else: ?>
            <span>
             <?php if($element->product_prices->first()): ?>
              <?php echo e($price); ?>

              <?php if(app()->has('global_currency_primary_symbol')): ?>
               <?php echo app('global_currency_primary_symbol'); ?>

              <?php endif; ?>
             <?php endif; ?>
            </span>
           <?php endif; ?>
          <?php endif; ?>
         <?php else: ?>
          <?php if($discount): ?>
           <span class="card-price discount">
            <?php if($element->product_prices->first()): ?>
             <?php echo e($price); ?>

             <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            <?php endif; ?>
           </span>
           <span class="card-price oldprice">
            <?php echo e(number_format($element->product_prices->first()->value_no_discount, 2, $decimal, $mill)); ?>

            <?php if(app()->has('global_currency_primary_symbol')): ?>
             <?php echo app('global_currency_primary_symbol'); ?>

            <?php endif; ?>
           </span>
          <?php else: ?>
           <span>
            <?php if($element->product_prices->first()): ?>
             <?php echo e($price); ?>

             <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            <?php endif; ?>
           </span>
          <?php endif; ?>
         <?php endif; ?>
        </p>
        <div style="display: none">
         <span class="dlv_name"><?php echo e($element->name); ?></span>
         <span class="dlv_price"><?php echo e($price); ?></span>
         <span class="dlv_currency">
          <?php if(app()->has('global_currency_primary_name')): ?>
           <?php echo app('global_currency_primary_name'); ?>

          <?php endif; ?>
         </span>
        </div>
       </div>
       <?php if(
           ($element->type == 'parent' || ($element->type === 'variant' && $category->accepted_items === 'parents')) &&
               app()->has('global_variant_add_to_cart') &&
               app('global_variant_add_to_cart') === 'true' &&
               $price &&
               $category->display_variant_price == true): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $element])->html();
} elseif ($_instance->childHasBeenRendered('pro' . $element->id)) {
    $componentId = $_instance->getRenderedChildComponentId('pro' . $element->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('pro' . $element->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pro' . $element->id);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $element]);
    $html = $response->html();
    $_instance->logRenderedChild('pro' . $element->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
       <?php elseif(($price && $element->type == 'parent') || ($element->type === 'variant' && $category->accepted_items === 'parents')): ?>
        <div class="card__button--wrapper">
         <button class="card__button">

          <a style="text-decoration: none"
           href="<?php echo e(route('product', ['product' => $element->seo_id !== null && $element->seo_id !== '' ? $element->seo_id : $element->id])); ?>"
           class="card__button--text">
           <?php if(app()->has('label_show_parent')): ?>
            <?php echo app('label_show_parent'); ?>

           <?php endif; ?>
          </a>
         </button>
        </div>
       <?php elseif($price): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $element])->html();
} elseif ($_instance->childHasBeenRendered('pro' . $element->id)) {
    $componentId = $_instance->getRenderedChildComponentId('pro' . $element->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('pro' . $element->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pro' . $element->id);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $element]);
    $html = $response->html();
    $_instance->logRenderedChild('pro' . $element->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
       <?php else: ?>
        <button class="card-button-disabled" aria-label="Disabled Add to cart button">
         <?php if(app()->has('label_add_to_cart_button_indisponibil')): ?>
          <?php echo app('label_add_to_cart_button_indisponibil'); ?>

         <?php endif; ?>
        </button>
       <?php endif; ?>
      </div>
     </div>
     <div style="display: none" class="json-ld-data" data-product-json='<?php echo json_encode($element, 15, 512) ?>'></div>
    </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php if (! (app()->has('global_pagination') && app('global_pagination') === 'links')): ?>
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
  <?php endif; ?>
 </section>
 <!-----------------------Load more---------------------->
 <?php if(app()->has('global_pagination') && app('global_pagination') === 'links'): ?>
  <section class="container">
   <?php echo e($products->links()); ?>

  </section>
 <?php else: ?>
  <?php if($products->total() >= $loadAmount): ?>
   <section class="container">
    <button class="filter__apply" wire:click="loadMore" wire:loading.remove>Vezi mai mult!</button>
   </section>
  <?php endif; ?>
 <?php endif; ?>

 <!---------------------------Filters------------------------->
 <div class="filter" id="filterList" wire:ignore>
  <div class="filter__content" id="filterContent">
   <div class="filter__top">
    <button class="filter__apply" id="resetFilter" wire:click.prevent="clearall">
     <?php if(app()->has('label_remove_all_filters')): ?>
      <?php echo app('label_remove_all_filters'); ?>

     <?php endif; ?>
     <svg>
      <polyline points="23 4 23 10 17 10"></polyline>
      <polyline points="1 20 1 14 7 14"></polyline>
      <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
     </svg>
    </button>
    <button class="filter__reset" id="filterClose">
     <svg>
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
     </svg>
    </button>
   </div>
   <button class="filter__top filter__top--button" id="closeFilter">
    <?php if(app()->has('label_display_filters_results')): ?>
     <?php echo app('label_display_filters_results'); ?>

    <?php endif; ?>
    <span><?php echo e($products->total()); ?></span>
   </button>
   <div class="filter__list">
    <?php $__currentLoopData = $filtervalues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="dropfilter">
      <div class="dropfilter__button">
       <button class="dropfilter__open">
        <h4><?php echo e($values['spec']); ?></h4>
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </div>
      <div class="dropfilter__list">
       <?php $__currentLoopData = $values['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $productData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
         $productsString = collect($productData['product_data'])
             ->map(function ($product) {
                 if (isset($product['parent_id'])) {
                     return implode('|', [$product['product_id'], $product['parent_id']]);
                 } else {
                     return implode([$product['product_id']]);
                 }
             })
             ->implode(',');
         $sanitizedValue = str_replace('.', ',', $value);
        ?>
        <label class="dropfilter__link" for="<?php echo e($sanitizedValue); ?>">
         <input type="checkbox"
          wire:model="queryfilters.<?php echo e($values['spec']); ?>.<?php echo e($sanitizedValue); ?>.<?php echo e($productsString); ?>"
          wire:change="applyFilter" id="<?php echo e($sanitizedValue); ?>">
         <h4><?php echo e($value); ?></h4>
        </label>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   </div>
  </div>
  <button id="filterClose" class="filter__close-modal"></button>
  <script>
   document.addEventListener('livewire:load', function() {
    Livewire.on('filtersApplied', function(selectedCount, totalCount) {
     const filterButton = document.querySelector('.filter__top--button span');
     filterButton.textContent = selectedCount > 0 ? selectedCount : totalCount;
    });
   });
  </script>
 </div>
 <!-------------------------Sorting----------------------->
 <div class="filter" id="sortList">
  <div class="filter__content" id="sortContent">
   <div class="filter__top">
    <div class="filter__text--long">
     <?php if(app()->has('label_sort_title')): ?>
      <?php echo app('label_sort_title'); ?>

     <?php endif; ?>
    </div>
    <button class="filter__reset" id="sortClose">
     <svg>
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
     </svg>
    </button>
   </div>
   
   <div class="filter__list">

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort" value="best_selling"
     id="sort">
    <label class="filter__link sort__item" for="sort">
     <h4>
      <?php if(app()->has('label_sort_popularity')): ?>
       <?php echo app('label_sort_popularity'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort1" value="price_as"
     id="sort1">
    <label class="filter__link sort__item" for="sort1">
     <h4>
      <?php if(app()->has('label_sort_price_as')): ?>
       <?php echo app('label_sort_price_as'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort2" value="price_ds"
     id="sort2">
    <label class="filter__link sort__item" for="sort2">
     <h4>
      <?php if(app()->has('label_sort_price_ds')): ?>
       <?php echo app('label_sort_price_ds'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort3" value="quantity"
     id="sort3">
    <label class="filter__link sort__item" for="sort3">
     <h4>
      <?php if(app()->has('label_sort_quantity_ds')): ?>
       <?php echo app('label_sort_quantity_ds'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort8" value="quantity_as"
     id="sort8">
    <label class="filter__link sort__item" for="sort8">
     <h4>
      <?php if(app()->has('label_sort_quantity_as')): ?>
       <?php echo app('label_sort_quantity_as'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort4" value="name_az"
     id="sort4">
    <label class="filter__link sort__item" for="sort4">
     <h4>
      <?php if(app()->has('label_sort_name_az')): ?>
       <?php echo app('label_sort_name_az'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort5" value="name_za"
     id="sort5">
    <label class="filter__link sort__item" for="sort5">
     <h4>
      <?php if(app()->has('label_sort_name_za')): ?>
       <?php echo app('label_sort_name_za'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort6" value="date_old_new"
     id="sort6">
    <label class="filter__link sort__item" for="sort6">
     <h4>
      <?php if(app()->has('label_sort_date_ds')): ?>
       <?php echo app('label_sort_date_ds'); ?>

      <?php endif; ?>
     </h4>
    </label>

    <input class="filter__input" wire:model="orderBy" type="radio" name="sort7" value="date_new_old"
     id="sort7">
    <label class="filter__link sort__item" for="sort7">
     <h4>
      <?php if(app()->has('label_sort_date_as')): ?>
       <?php echo app('label_sort_date_as'); ?>

      <?php endif; ?>
     </h4>
    </label>
   </div>
  </div>
 </div>
 <!---------------------- Support Center -------------------->
 <?php if (isset($component)) { $__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78 = $attributes; } ?>
<?php $component = App\View\Components\Support::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('support'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Support::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78)): ?>
<?php $attributes = $__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78; ?>
<?php unset($__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78)): ?>
<?php $component = $__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78; ?>
<?php unset($__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78); ?>
<?php endif; ?>
 <script>
  document.addEventListener("livewire:load", function() {
   injectJsonLd();
   Livewire.hook('message.processed', (message, component) => {
    injectJsonLd();
   });

   function injectJsonLd() {
    let existingScripts = document.querySelectorAll('script[type="application/ld+json"]');
    existingScripts.forEach(script => script.remove());

    let jsonLdElements = document.querySelectorAll('.json-ld-data');
    jsonLdElements.forEach(element => {
     let productData = element.dataset.productJson;
     let product = JSON.parse(productData);

     let currencyElement = document.querySelector('.dlv_currency');
     let price = (product.product_prices && product.product_prices.length > 0) ?
      `${product.product_prices[0].value}` : `0`;
     let ratingValue = (product.reviews && product.reviews.length > 0) ?
      `${product.reviews[0].value}` : `0`;
     let reviewCount = (product.reviews && product.reviews.length > 0) ?
      `${product.reviews[0].count}` : `0`;
     let currency = currencyElement.textContent.trim();
     let media = (product.media && product.media.length > 0) ?
      `${window.location.origin}/${product.media[0].path}${product.media[0].name}` :
      `${window.location.origin}/images/store/default/default300.webp`;
     if (price != '0' || (ratingValue != '0') && (reviewCount != 0)) {
      let jsonLd = {
       "@context": "https://schema.org/",
       "@type": "Product",
       "name": product.name,
       "image": media,
       "description": product.long_description.replace(/(<([^>]+)>)/gi, ""),
       "brand": {
        "@type": "Brand",
        "name": product.brand
       },
       "sku": product.sku,
       "offers": {
        "@type": "Offer",
        "url": `${window.location.origin}/product/${product.seo_id || product.id}`,
        "priceCurrency": currency,
        "price": price,
        "availability": `https://schema.org/InStock`,
        "priceValidUntil": product.end_date,
        "hasMerchantReturnPolicy": {
         "value": true
        },
        "shippingDetails": {
         "type": "FreeShipping",
         "price": "0"
        },
        "aggregateRating": {
         "@type": "AggregateRating",
         "ratingValue": ratingValue,
         "reviewCount": reviewCount
        },
        "review": {
         "@type": "Review",
         "reviewRating": {
          "@type": "Rating",
          "ratingValue": ratingValue,
          "bestRating": 5
         },
         "author": {
          "@type": "Person",
          "name": "anonim"
         }
        },
       }
      };

      let script = document.createElement('script');
      script.type = 'application/ld+json';
      script.textContent = JSON.stringify(jsonLd);
      document.head.appendChild(script);
     }
    });
   }
  });
 </script>
 <script src="/script/store/catalog.js" defer></script>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-products.blade.php ENDPATH**/ ?>