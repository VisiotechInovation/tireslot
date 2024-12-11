<div class="product__container">
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
 <?php if ($product->product_prices->count() != 0) {
     $price = number_format($product->product_prices->first()->value, 2, $decimal, $mill);
     $discount = $product->product_prices->first()->discount != 0 ? true : false;
 } else {
     $price = null;
     $discount = false;
 }
 ?>
 <div class="product__text">
  <div>
   <h1 class="product__title"><?php echo e($product->name); ?></h1>
   <h2 class="product__subtitle"><?php echo e($product->short_description); ?></h2>
   <?php if($discount): ?>
    <span class="product__discount">-<?php echo e($product->product_prices->first()->discount); ?>%</span>
   <?php endif; ?>
   <?php if(app()->has('global_display_rating') && app('global_display_rating') === 'true'): ?>
    <?php
     $rating = $product->reviews->first()->value * 20;
     $ratingvalue = $product->reviews->first()->value;
    ?>
    <div class="ratingscore">
     <div class="rating" style="--rating: <?php echo e($rating); ?>%;"></div>
     <?php if(app()->has('global_display_rating_value') && app('global_display_rating_value') === 'true'): ?>
      (<?php echo e(number_format($ratingvalue, 2)); ?>)
     <?php endif; ?>
    </div>
   <?php endif; ?>
  </div>

  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button', [
      'productId' => $product->id,
      'class' => 'product__action',
      'is_in_wishlist' => $this->is_in_wishlist,
  ])->html();
} elseif ($_instance->childHasBeenRendered('l304384819-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l304384819-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l304384819-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l304384819-0');
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button', [
      'productId' => $product->id,
      'class' => 'product__action',
      'is_in_wishlist' => $this->is_in_wishlist,
  ]);
    $html = $response->html();
    $_instance->logRenderedChild('l304384819-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 </div>
 <?php if($product->type == 'variant'): ?>
  <?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variantId => $variantGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if(count($variantGroup) > 1): ?>
    <span class="product__price--title"
     style="margin-right: auto; font-size: 14px; font-weight:500"><?php echo e($product->beeingvariants->where('variant_id', $variantId)->first()->reference->name); ?></span>
    <div class="product__price" style="height: auto;">
     <div class="variant__slider mini-slider">
      <div class="variant__wrapper mini-wrapper">
       <a class="variant__btn active"
        href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>">
        <?php if($product->beeingvariants->where('variant_id', $variantId)->first()->displayed == 'image'): ?>
         <?php if($product->media->first() != null): ?>
          <img src="/<?php echo e($product->media->first()->path); ?><?php echo e($product->media->first()->name); ?>"
           alt="<?php echo e($product->media->first()->name); ?>">
         <?php else: ?>
          <img src="/images/store/default/default70.webp" alt="something wrong">
         <?php endif; ?>
        <?php elseif($product->beeingvariants->where('variant_id', $variantId)->first()->displayed == 'text'): ?>
         <span><?php echo e($product->beeingvariants->where('variant_id', $variantId)->first()->value); ?></span>
        <?php else: ?>
         <?php if($product->media->first() != null): ?>
          <img src="/<?php echo e($product->media->first()->path); ?><?php echo e($product->media->first()->name); ?>"
           alt="<?php echo e($product->media->first()->name); ?>">
         <?php else: ?>
          <img src="/images/store/default/default70.webp" alt="something wrong">
         <?php endif; ?>
         <span><?php echo e($product->beeingvariants->where('variant_id', $variantId)->first()->value); ?></span>
        <?php endif; ?>
       </a>
       <?php $__currentLoopData = $variantGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
         if ($variant->id == $product->id) {
             continue;
         }
        ?>
        <a class="variant__btn"
         href="<?php echo e(route('product', ['product' => $variant->seo_id !== null && $variant->seo_id !== '' ? $variant->seo_id : $variant->id])); ?>">
         <?php if($variant->beeingvariants->where('variant_id', $variantId)->first()->displayed == 'image'): ?>
          <?php if($variant->media->first() != null): ?>
           <img src="/<?php echo e($variant->media->first()->path); ?><?php echo e($variant->media->first()->name); ?>"
            alt="<?php echo e($variant->media->first()->name); ?>">
          <?php else: ?>
           <img src="/images/store/default/default70.webp" alt="something wrong">
          <?php endif; ?>
         <?php elseif($variant->beeingvariants->where('variant_id', $variantId)->first()->displayed == 'text'): ?>
          <span><?php echo e($variant->beeingvariants->where('variant_id', $variantId)->first()->value); ?></span>
         <?php else: ?>
          <?php if($variant->media->first() != null): ?>
           <img src="/<?php echo e($variant->media->first()->path); ?><?php echo e($variant->media->first()->name); ?>"
            alt="<?php echo e($variant->media->first()->name); ?>">
          <?php else: ?>
           <img src="/images/store/default/default70.webp" alt="something wrong">
           <span><?php echo e($variant->beeingvariants->where('variant_id', $variantId)->first()->value); ?></span>
          <?php endif; ?>
          <span><?php echo e($variant->beeingvariants->where('variant_id', $variantId)->first()->value); ?></span>
         <?php endif; ?>
        </a>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    </div>
   <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
 <div class="product__price">
  <span class="product__price--title">
   <?php if(app()->has('label_pdp_price_tag')): ?>
    <?php echo app('label_pdp_price_tag'); ?>

   <?php endif; ?>
  </span>
  <?php if($discount && $price): ?>
   <?php if($price): ?>
    <div class="product__price--discount">
     <span
      class="product__price--oldprice"><?php echo e(number_format($product->product_prices->first()->value_no_discount, 2, $decimal, $mill)); ?>

      <?php if(app()->has('global_currency_primary_symbol')): ?>
       <?php echo app('global_currency_primary_symbol'); ?>

      <?php endif; ?>
     </span>
     <span class="product__price--newprice"><?php echo e($price); ?>

      <?php if(app()->has('global_currency_primary_symbol')): ?>
       <?php echo app('global_currency_primary_symbol'); ?>

      <?php endif; ?>
     </span>
    </div>
   <?php endif; ?>
  <?php else: ?>
   <?php if($price): ?>
    <?php echo e($price); ?>

    <?php if(app()->has('global_currency_primary_symbol')): ?>
     <?php echo app('global_currency_primary_symbol'); ?>

    <?php endif; ?>
   <?php else: ?>
    <?php if(app()->has('label_product_status_indisponible')): ?>
     <?php echo app('label_product_status_indisponible'); ?>

    <?php endif; ?>
   <?php endif; ?>
  <?php endif; ?>
 </div>
 <?php if($price): ?>
  <span class="product__tva">
   <?php if(app()->has('label_pdp_vat')): ?>
    <?php echo app('label_pdp_vat'); ?>

   <?php endif; ?>
   <?php if(app()->has('global_display_vat_value') && app('global_display_vat_value') === 'true'): ?>
    <?php echo e(number_format($product->product_prices->first()->vat, 2, $decimal, $mill)); ?>%
   <?php endif; ?>
  </span>
  <?php if($product->quantity > 0 || (app()->has('global_preorder') && app('global_preorder') === 'true')): ?>
   <div class="quantity">
    <span>
     <?php if(app()->has('label_product_quantity_tag')): ?>
      <?php echo app('label_product_quantity_tag'); ?>

     <?php endif; ?>
    </span>
    <div class="quantity__buttons">
     <button class="quantity__arrow" wire:click="decrementCounter" aria-label="Decrement quantity">
      <svg>
       <circle cx="12" cy="12" r="10"></circle>
       <line x1="8" y1="12" x2="16" y2="12"></line>
      </svg>
     </button>
     <span class="quantity__input" name="count" id="count">
      <?php echo e($quantity); ?>

     </span>
     <button class="quantity__arrow" wire:click="incrementCounter" aria-label="Increment quantity">
      <svg>
       <circle cx="12" cy="12" r="10"></circle>
       <line x1="12" y1="8" x2="12" y2="16"></line>
       <line x1="8" y1="12" x2="16" y2="12"></line>
      </svg>
     </button>
    </div>

   </div>
  <?php endif; ?>
 <?php endif; ?>
 <?php if($maxlimit): ?>
  <span>
   <?php if(app()->has('label_product_quantity_error')): ?>
    <?php echo app('label_product_quantity_error'); ?>

   <?php endif; ?> <?php echo e($limit); ?>

  </span>
 <?php endif; ?>

 <?php if($price): ?>
  <?php if($product->quantity > 0 || (app()->has('global_preorder') && app('global_preorder') === 'true')): ?>
   <button class="card__button" style="width: 100%;height: 40px;" onclick="flyToCart(this)"
    aria-label="Add to cart button" wire:click="addToCart(<?php echo e($product->id); ?>)" wire:ignore="$refresh">
    <div class="card__button--cart">
     <svg>
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
     </svg>
    </div>
    <div class="card__button--gift">
     <svg>
      <polyline points="20 12 20 22 4 22 4 12"></polyline>
      <rect x="2" y="7" width="20" height="5"></rect>
      <line x1="12" y1="22" x2="12" y2="7"></line>
      <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
      <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
     </svg>
    </div>
    <span class="card__button--text">
     <?php if(app()->has('label_add_to_cart_button')): ?>
      <?php echo app('label_add_to_cart_button'); ?>

     <?php endif; ?>
    </span>
   </button>
  <?php else: ?>
   <button class="card-button-disabled" aria-label="Disabled Add to cart button">
    <?php if(app()->has('label_add_to_cart_button_indisponibil')): ?>
     <?php echo app('label_add_to_cart_button_indisponibil'); ?>

    <?php endif; ?>
   </button>
  <?php endif; ?>
 <?php else: ?>
  <button class="card-button-disabled" aria-label="Disabled Add to cart button">
   <?php if(app()->has('label_add_to_cart_button_indisponibil')): ?>
    <?php echo app('label_add_to_cart_button_indisponibil'); ?>

   <?php endif; ?>
  </button>
 <?php endif; ?>
 <?php if(app()->has('global_display_phone_on_pdp') && app('global_display_phone_on_pdp') === 'true'): ?>

  <div class="product__phone">
   <div class="product__phone__info">
    <span>
     <a href="tel:+40757527656"><svg>
       <path
        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
       </path>
      </svg>
     </a>
     <span>
      <?php if(app()->has('label_pdp_phone_title')): ?>
       <?php echo app('label_pdp_phone_title'); ?>

      <?php endif; ?>
     </span>
    </span>
    <?php if(app()->has('label_pdp_phone_link')): ?>
     <?php echo app('label_pdp_phone_link'); ?>

    <?php endif; ?>
   </div>
   <span class="info">
    <?php if(app()->has('label_pdp_phone_program')): ?>
     <?php echo app('label_pdp_phone_program'); ?>

    <?php endif; ?>
   </span>
  </div>
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
 <div style="display: none" class="json-ld-data-details" data-product-json='<?php echo json_encode($product, 15, 512) ?>'></div>
 <script>
  document.addEventListener("livewire:load", function() {
   injectJsonLd();

   function injectJsonLd() {
    let existingScripts = document.querySelectorAll('script[type="application/ld+json"]');
    existingScripts.forEach(script => script.remove());

    let jsonLdElements = document.querySelectorAll('.json-ld-data-details');
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
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/product-details.blade.php ENDPATH**/ ?>