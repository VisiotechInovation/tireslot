<div>
 <main>
  <!---------------------- Slider Images --------------------->
  <?php if(!$slideritems->isEmpty()): ?>
   <div class="main-slider">
    <div class="main-slider__wrapper">
     <?php $__currentLoopData = $slideritems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <a class="main-slider__slide"
       href="<?php echo e(route('products', ['categorySlug' => $item->seo_id !== null && $item->seo_id !== '' ? $item->seo_id : $item->id])); ?>"
       draggable="false">
       <picture>
        <?php if($item->media != null): ?>
         
         <?php if($item->media->where('sequence', 2)->first() != null): ?>
          <source media="(min-width: 992px)" sizes="(min-width: 992px) 50vw"
           srcset="/<?php echo e($item->media->where('sequence', 2)->first()->path); ?><?php echo e($item->media->where('sequence', 2)->first()->name); ?>"
           loading="eager" fetchpriority="high" height="<?php echo e($item->media->where('sequence', 2)->first()->height); ?>"
           width="<?php echo e($item->media->where('sequence', 2)->first()->width); ?>">
         <?php else: ?>
          <source media="(min-width: 992px)" sizes="(min-width: 992px) 50vw" srcset="/images/store/default/default.webp"
           loading="eager" fetchpriority="high">
         <?php endif; ?>
         
         <?php if($item->media->where('sequence', 3)->first() != null): ?>
          <source title="<?php echo e($item->media->where('sequence', 3)->first()->name); ?>" media="(min-width: 576px)"
           sizes="(min-width: 576px) 80vw"
           srcset="/<?php echo e($item->media->where('sequence', 3)->first()->path); ?><?php echo e($item->media->where('sequence', 3)->first()->name); ?>"
           loading="eager" fetchpriority="high" height="<?php echo e($item->media->where('sequence', 3)->first()->height); ?>"
           width="<?php echo e($item->media->where('sequence', 3)->first()->width); ?>">
         <?php elseif($item->media->where('sequence', 2)->first() != null): ?>
          <source title="<?php echo e($item->media->where('sequence', 2)->first()->name); ?>" media="(min-width: 576px)"
           sizes="(min-width: 576px) 80vw"
           srcset="/<?php echo e($item->media->where('sequence', 2)->first()->path); ?><?php echo e($item->media->where('sequence', 2)->first()->name); ?>"
           loading="eager" fetchpriority="high" height="<?php echo e($item->media->where('sequence', 2)->first()->height); ?>"
           width="<?php echo e($item->media->where('sequence', 2)->first()->width); ?>">
         <?php else: ?>
          <source title="Default image" media="(min-width: 576px)" sizes="(min-width: 576px) 80vw"
           srcset="/images/store/default/default640.webp" loading="eager" fetchpriority="high">
         <?php endif; ?>
         
         <?php if($item->media->where('sequence', 4)->first() != null): ?>
          <img title="<?php echo e($item->name); ?>" sizes="100vw" alt="<?php echo e($item->name); ?>"
           src="/<?php echo e($item->media->where('sequence', 4)->first()->path); ?><?php echo e($item->media->where('sequence', 4)->first()->name); ?>"
           loading="eager" fetchpriority="high" height="<?php echo e($item->media->where('sequence', 4)->first()->height); ?>"
           width="<?php echo e($item->media->where('sequence', 4)->first()->width); ?>">
         <?php elseif($item->media->where('sequence', 3)->first() != null): ?>
          <img title="<?php echo e($item->name); ?>" sizes="100vw" alt="<?php echo e($item->name); ?>"
           src="/<?php echo e($item->media->where('sequence', 3)->first()->path); ?><?php echo e($item->media->where('sequence', 3)->first()->name); ?>"
           loading="eager" fetchpriority="high" height="<?php echo e($item->media->where('sequence', 3)->first()->height); ?>"
           width="<?php echo e($item->media->where('sequence', 3)->first()->width); ?>">
         <?php elseif($item->media->where('sequence', 2)->first() != null): ?>
          <img title="<?php echo e($item->name); ?>" sizes="100vw" alt="<?php echo e($item->name); ?>"
           src="/<?php echo e($item->media->where('sequence', 2)->first()->path); ?><?php echo e($item->media->where('sequence', 2)->first()->name); ?>"
           loading="eager" fetchpriority="high" height="<?php echo e($item->media->where('sequence', 2)->first()->height); ?>"
           width="<?php echo e($item->media->where('sequence', 2)->first()->width); ?>">
         <?php else: ?>
          <img title="Default image" src="/images/store/default/default300.webp" alt="something wrong">
         <?php endif; ?>
        <?php else: ?>
         <img title="Default image" src="/images/store/default/default300.webp" alt="something wrong">
        <?php endif; ?>
       </picture>
      </a>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <button class="main-slider__button prev" aria-label="Previous main slider">
     <svg>
      <polyline points="15 18 9 12 15 6"></polyline>
     </svg>
    </button>
    <button class="main-slider__button next" aria-label="Next main slider">
     <svg>
      <polyline points="9 18 15 12 9 6"></polyline>
     </svg>
    </button>
   </div>
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
  
  <?php if($popproducts->isNotEmpty()): ?>

   <section>
    <div class="section__header container">
     <h1 class="section__title">
      <?php if(app()->has('label_mainpage_popproducts_slider_title')): ?>
       <?php echo app('label_mainpage_popproducts_slider_title'); ?>

      <?php endif; ?>
     </h1>
     <p class="section__text">
      <?php if(app()->has('label_mainpage_popproducts_slider_description')): ?>
       <?php echo app('label_mainpage_popproducts_slider_description'); ?>

      <?php endif; ?>
     </p>
    </div>
   </section>
   <!----------------- End Section Description ---------------->

   <section>
    <div class="card-slider container new-slider">
     <div class="card-slider__wrapper new-slider__wrapper">
      <?php $__currentLoopData = $popproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="card-slider__slide new-slider__slide card" data-product-jsonld="products-<?php echo e($loop->index); ?>">
        <a draggable="false"
         href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>">
         <?php
          $mainMedia = $product->media->firstWhere('type', 'main');
         ?>
         <?php if($mainMedia): ?>
          <img title="<?php echo e($product->name); ?>" loading="eager" class="card-image"
           src="/<?php echo e($mainMedia->path); ?><?php echo e($mainMedia->name); ?>" alt="<?php echo e($product->name); ?>">
         <?php else: ?>
          <img title="Default image" loading="eager" class="card-image" src="/images/store/default/default300.webp"
           alt="something wrong">
         <?php endif; ?>
        </a>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button',
            [
                'productId' => $product->id,
                'class' => 'card__action',
                'is_in_wishlist' => $this->isInWishlist($product->id),
            ])->html();
} elseif ($_instance->childHasBeenRendered('popw' . $product->id)) {
    $componentId = $_instance->getRenderedChildComponentId('popw' . $product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('popw' . $product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('popw' . $product->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button',
            [
                'productId' => $product->id,
                'class' => 'card__action',
                'is_in_wishlist' => $this->isInWishlist($product->id),
            ]);
    $html = $response->html();
    $_instance->logRenderedChild('popw' . $product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
        $price = null;
        $discount = false;
        
        if ($product->product_prices->count() != 0) {
            $price = number_format($product->product_prices->first()->value, 2, $decimal, $mill);
            $discount = $product->product_prices->first()->discount != 0 ? true : false;
        }
        ?>

        <?php if($price): ?>
         <?php if($product->quantity < app('global_low_stock') && $product->quantity > 0): ?>
          <p class="card-status save">
           <?php if(app()->has('label_product_status_stock')): ?>
            <?php echo app('label_product_status_stock'); ?>

           <?php endif; ?>
          </p>
          <?php if($discount): ?>
           <p class="card-status save-secondary">
            -<?php echo e($product->product_prices->first()->discount); ?>%
           </p>
          <?php endif; ?>
         <?php elseif($product->quantity <= 0 && (app()->has('global_preorder') && app('global_preorder') != 'true')): ?>
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
         </div>
         <?php if($price): ?>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('pop' . $product->id)) {
    $componentId = $_instance->getRenderedChildComponentId('pop' . $product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('pop' . $product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pop' . $product->id);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('pop' . $product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
         <div style="display: none" class="dlv">
          <span class="dlv_name"> <?php echo e($product->name); ?></span>
          <span class="dlv_price"><?php echo e($price); ?></span>
          <span class="dlv_currency">
           <?php if(app()->has('global_currency_primary_name')): ?>
            <?php echo app('global_currency_primary_name'); ?>

           <?php endif; ?>
          </span>
         </div>
        </div>
        <div style="display: none" class="json-ld-data" data-product-json='<?php echo json_encode($product, 15, 512) ?>'></div>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
     <button class="card-slider__button new-slider__button prev" aria-label="Previous card slider button">
      <svg>
       <polyline points="15 18 9 12 15 6"></polyline>
      </svg>
     </button>
     <button class="card-slider__button new-slider__button next" aria-label="Next card slider button">
      <svg>
       <polyline points="9 18 15 12 9 6"></polyline>
      </svg>
     </button>
    </div>
   </section>
  <?php endif; ?>

  <?php if($newproducts->isNotEmpty()): ?>
   <section>
    <div class="section__header container">
     <h2 class="section__title">
      <?php if(app()->has('label_mainpage_isnewproducts_slider_title')): ?>
       <?php echo app('label_mainpage_isnewproducts_slider_title'); ?>

      <?php endif; ?>
      </h1>
      <p class="section__text">
       <?php if(app()->has('label_mainpage_isnewproducts_slider_description')): ?>
        <?php echo app('label_mainpage_isnewproducts_slider_description'); ?>

       <?php endif; ?>
      </p>
    </div>
   </section>
   <section>
    <div class="card-slider container popular-slider">
     <div class="card-slider__wrapper popular-slider__wrapper">
      <?php $__currentLoopData = $newproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="card-slider__slide popular-slider__slide card"
        data-product-jsonld="newproducts-<?php echo e($loop->index); ?>">
        <a draggable="false"
         href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>">
         <?php
          $mainMedia = $product->media->firstWhere('type', 'main');
         ?>
         <?php if($mainMedia): ?>
          <img title="<?php echo e($product->name); ?>, <?php echo e($product->short_description); ?>" loading="eager" class="card-image"
           src="/<?php echo e($mainMedia->path); ?><?php echo e($mainMedia->name); ?>" alt="<?php echo e($product->name); ?>">
         <?php else: ?>
          <img title="Default image" loading="eager" class="card-image" src="/images/store/default/default300.webp"
           alt="something wrong">
         <?php endif; ?>
        </a>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button',
            [
                'productId' => $product->id,
                'class' => 'card__action',
                'is_in_wishlist' => $this->isInWishlist($product->id),
            ])->html();
} elseif ($_instance->childHasBeenRendered('neww' . $product->id)) {
    $componentId = $_instance->getRenderedChildComponentId('neww' . $product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('neww' . $product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('neww' . $product->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button',
            [
                'productId' => $product->id,
                'class' => 'card__action',
                'is_in_wishlist' => $this->isInWishlist($product->id),
            ]);
    $html = $response->html();
    $_instance->logRenderedChild('neww' . $product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
        $price = null;
        $discount = false;
        
        if ($product->product_prices->count() != 0) {
            $price = number_format($product->product_prices->first()->value, 2, $decimal, $mill);
            $discount = $product->product_prices->first()->discount != 0 ? true : false;
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
         <?php elseif($product->quantity <= 0 && (app()->has('global_preorder') && app('global_preorder') != 'true')): ?>
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
         </div>
         <?php if($price): ?>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('new' . $product->id)) {
    $componentId = $_instance->getRenderedChildComponentId('new' . $product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('new' . $product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('new' . $product->id);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('new' . $product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
         <div style="display: none" class="dlv">
          <span class="dlv_name"><?php echo e($product->name); ?></span>
          <span class="dlv_price"><?php echo e($price); ?></span>
          <span class="dlv_currency">
           <?php if(app()->has('global_currency_primary_name')): ?>
            <?php echo app('global_currency_primary_name'); ?>

           <?php endif; ?>
          </span>
         </div>

        </div>
        <div style="display: none" class="json-ld-data" data-product-json='<?php echo json_encode($product, 15, 512) ?>'></div>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
     <button class="popular-slider__button card-slider__button prev" aria-label="Previous card slider button">
      <svg>
       <polyline points="15 18 9 12 15 6"></polyline>
      </svg>
     </button>
     <button class="popular-slider__button card-slider__button next" aria-label="Next card slider button">
      <svg>
       <polyline points="9 18 15 12 9 6"></polyline>
      </svg>
     </button>
    </div>
   </section>
  <?php endif; ?>

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
 </main>
 <script>
  document.addEventListener("livewire:load", function() {
   injectJsonLd();

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
 <script src="/script/store/main.js" defer></script>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-main.blade.php ENDPATH**/ ?>