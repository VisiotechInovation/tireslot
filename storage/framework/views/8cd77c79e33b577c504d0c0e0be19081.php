<div>
 <main>
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
       <div class="card-slider__slide popular-slider__slide card" data-product-jsonld="newproducts-<?php echo e($loop->index); ?>">
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
<?php /**PATH D:\tireslot\resources\views/livewire/store-main.blade.php ENDPATH**/ ?>