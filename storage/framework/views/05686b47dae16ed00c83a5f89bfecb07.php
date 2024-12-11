<div id="store-show-product">
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
  <?php if($product->product_categories->isNotEmpty()): ?>
   <?php $__currentLoopData = $product->getCategoryHierarchy(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
     <a class="breadcrumbs__link" href="<?php echo e(route('products', ['categorySlug' => $breadcrumb['slug']])); ?>">
      <?php echo e($breadcrumb['name']); ?>

     </a>
    </li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
  <li>
   <a
    href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>"
    class="breadcrumbs__link"><?php echo e($product->name); ?></a>
  </li>
 </ol>
 <section class="product container">
  <!-------------------- Slider Product ------------------>
  <div class="product-slider">
   <div class="product-slider__center">

    <div class="product-slider__wrapper">
     <?php if($product->media->count() != 0): ?>
      <?php $__currentLoopData = $product->media->where('type', 'full'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="product-slider__slide">
        <img width="550" height="550" loading="eager" src="/<?php echo e($media->path); ?><?php echo e($media->name); ?>"
         data-name-alt="<?php echo e($media->name); ?><?php echo e($product->name); ?>" alt="<?php echo e($media->name); ?><?php echo e($product->name); ?>"
         data-img-src="/<?php echo e($product->media->where('type', 'original')->where('sequence', $media->sequence)->first()->path); ?><?php echo e($product->media->where('type', 'original')->where('sequence', $media->sequence)->first()->name); ?>">
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php else: ?>
      <div class="product-slider__slide">
       <img loading="eager" src="/images/store/default/default.webp" data-img-src="/images/store/default/default.webp"
        alt="something wrong" data-name-alt="something wrong">
      </div>
     <?php endif; ?>
    </div>
    <!-- EDIT TO APPLY CLASS DINAMICALLY -->
    <?php if($product->media->where('type', 'full')->count() <= 1): ?>
     <div class="product-slider__navigation" style="display:none">
      <button class="product-slider__prev" aria-label="Previous slide">
       <svg>
        <polyline points="15 18 9 12 15 6"></polyline>
       </svg>
      </button>
      <button class="product-slider__next" aria-label="Next slide">
       <svg>
        <polyline points="9 18 15 12 9 6"></polyline>
       </svg>
      </button>
     </div>
    <?php else: ?>
     <div class="product-slider__navigation">
      <button class="product-slider__prev" aria-label="Previous slide">
       <svg>
        <polyline points="15 18 9 12 15 6"></polyline>
       </svg>
      </button>
      <button class="product-slider__next" aria-label="Next slide">
       <svg>
        <polyline points="9 18 15 12 9 6"></polyline>
       </svg>
      </button>
     </div>
    <?php endif; ?>
    <!-- EDIT TO APPLY CLASS DINAMICALLY -->
   </div>
   <div class="product-slider__pagination--navigation">
    <button class="product-slider__pagination--button product-slider__pagination--prev disabled" aria-label="Previous">
     <svg>
      <polyline points="15 18 9 12 15 6"></polyline>
     </svg>
    </button>
    <div class="product-slider__pagination">
    </div>
    <button class="product-slider__pagination--button product-slider__pagination--next disabled" aria-label="Next">
     <svg>
      <polyline points="9 18 15 12 9 6"></polyline>
     </svg>
    </button>
   </div>
  </div>
  <!------------------ End Slider Product ---------------->
  <!------------------------------------------------------>
  <!-------------------- Modal Product ------------------>
  <div class="product-modal">
   <div class="product-modal__content"></div>
   <button class="product-modal__close">
    <svg>
     <polyline points="4 14 10 14 10 20"></polyline>
     <polyline points="20 10 14 10 14 4"></polyline>
     <line x1="14" y1="10" x2="21" y2="3"></line>
     <line x1="3" y1="21" x2="10" y2="14"></line>
    </svg>
   </button>

   <?php if($product->media->where('type', 'full')->count() == 1): ?>
    <button class="product-modal__prev" style="display:none">
     <svg>
      <polyline points="15 18 9 12 15 6"></polyline>
     </svg>
    </button>
    <button class="product-modal__next" style="display:none">
     <svg>
      <polyline points="9 18 15 12 9 6"></polyline>
     </svg>
    </button>
   <?php else: ?>
    <button class="product-modal__prev">
     <svg>
      <polyline points="15 18 9 12 15 6"></polyline>
     </svg>
    </button>
    <button class="product-modal__next">
     <svg>
      <polyline points="9 18 15 12 9 6"></polyline>
     </svg>
    </button>
   <?php endif; ?>

   <span class="product-modal__count"></span>
  </div>
  <!------------------ End Modal Product ---------------->
  <!------------------------------------------------------>
  <!----------------------- Product details ---------------------->
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-details', ['product' => $product, 'wishlistItems' => $wishlistItems])->html();
} elseif ($_instance->childHasBeenRendered('l245064426-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l245064426-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l245064426-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l245064426-0');
} else {
    $response = \Livewire\Livewire::mount('product-details', ['product' => $product, 'wishlistItems' => $wishlistItems]);
    $html = $response->html();
    $_instance->logRenderedChild('l245064426-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <!--------------------- End Product details -------------------->
  <!------------------------------------------------------>
 </section>


 <section class="tab container">
  <div class="tab__top">
   <button class="tab__button active" onclick="switchTab(0)">
    <?php if(app()->has('label_pdp_description_tag')): ?>
     <?php echo app('label_pdp_description_tag'); ?>

    <?php endif; ?>
   </button>
   <button class="tab__button" onclick="switchTab(1)">
    <?php if(app()->has('label_pdp_details_tag')): ?>
     <?php echo app('label_pdp_details_tag'); ?>

    <?php endif; ?>
   </button>
  </div>
  <div class="tab__content active">
   <p class="tab__info"><?php echo $product->long_description; ?></p>
  </div>
  <div class="tab__content">
   <table class="tab__table">
    <thead>
     <tr>
      <th>
       <?php if(app()->has('label_pdp_specs_tag')): ?>
        <?php echo app('label_pdp_specs_tag'); ?>

       <?php endif; ?>
      </th>
      <th>
       <?php if(app()->has('label_pdp_description_tag')): ?>
        <?php echo app('label_pdp_description_tag'); ?>

       <?php endif; ?>
      </th>
     </tr>
    </thead>
    <tbody>
     <?php if($product->product_specs->first() !== null): ?>
      <?php $__currentLoopData = $product->product_specs->sortBy('sequence'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
        <td><?php echo e($spec->spec->name); ?></td>
        <td><?php echo e($spec->value); ?></td>
       </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php else: ?>
      <tr>
       <td colspan="2">
        <?php if(app()->has('label_pdp_specs_error')): ?>
         <?php echo app('label_pdp_specs_error'); ?>

        <?php endif; ?>
       </td>
      </tr>
     <?php endif; ?>
    </tbody>
   </table>
  </div>
 </section>

 <script>
  function switchTab(tabIndex) {
   const tabs = document.querySelectorAll('.tab__content');
   const buttons = document.querySelectorAll('.tab__button');

   tabs.forEach((tab, index) => {
    if (index === tabIndex) {
     tab.classList.add('active');
     buttons[index].classList.add('active');
    } else {
     tab.classList.remove('active');
     buttons[index].classList.remove('active');
    }
   });
  }
 </script>
 <h2></h2>
 
 <section class="container">
  <div class="related__cat">
   <?php if(app()->has('label_pdp_category_tag')): ?>
    <?php echo app('label_pdp_category_tag'); ?>

    <?php $__currentLoopData = $product->product_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <a
      href="<?php echo e(route('products', ['categorySlug' => $related->category->seo_id !== null && $related->category->seo_id !== '' ? $related->category->seo_id : $related->category->id])); ?>">
      <?php echo e($related->category->short_description); ?>

     </a>
     <?php if(!$loop->last): ?>
      ,
     <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <?php endif; ?>
  </div>
 </section>
 <!---------------------------------------------------------->
 <!------------------- Section Description ------------------>
 <?php if($product->related_product->filter(fn($item) => !is_null($item['product']))->isNotEmpty()): ?>
  <section>
   <div class="section__header
      container">
    <h2 class="section__title">
     <?php if(app()->has('label_pdp_relatedproducts_slider_title')): ?>
      <?php echo app('label_pdp_relatedproducts_slider_title'); ?>

     <?php endif; ?>
    </h2>
    <p class="section__text">
     <?php if(app()->has('label_pdp_relatedproducts_slider_description')): ?>
      <?php echo app('label_pdp_relatedproducts_slider_description'); ?>

     <?php endif; ?>
    </p>
   </div>
  </section>
  <!----------------- End Section Description ---------------->
  <!---------------------------------------------------------->
  <!---------------------- Slider Cards ---------------------->
  <section id="relatedSlider" class="related__slider container section__margin">
   
   <button class="related__btn prev" aria-label="Previous related slider">
    <svg>
     <polyline points="15 18 9 12 15 6"></polyline>
    </svg>
   </button>
   <button class="related__btn next" aria-label="Next related slider">
    <svg>
     <polyline points="9 18 15 12 9 6"></polyline>
    </svg>
   </button>
   
   <div class="related__wrapper">
    <?php $__currentLoopData = $product->related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if(
         $product->product &&
             $product->product->active == true &&
             $product->product->end_date >= now()->format('Y-m-d') &&
             $product->product->start_date <= now()->format('Y-m-d')): ?>
      <div class="card product" style="width: 100%;">
       <a style="width: 100%"
        href="<?php echo e(route('product', ['product' => $product->product->seo_id !== null && $product->product->seo_id !== '' ? $product->product->seo_id : $product->product->id])); ?>">

        <?php if($product->product->media->first() != null): ?>
         <img loading="eager" width="300" height="300" class="card-image"
          src="/<?php echo e($product->product->media->first()->path); ?><?php echo e($product->product->media->first()->name); ?>"
          alt="<?php echo e($product->product->media->first()->name); ?> <?php echo e($product->product->name); ?>">
        <?php else: ?>
         <img loading="eager" width="300" height="300" class="card-image"
          src="/images/store/default/default300.webp" alt="something wrong">
        <?php endif; ?>
       </a>
       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button', ['productId' => $product->product->id, 'class' => 'card__action', 'is_in_wishlist' => $this->isInWishlist($product->product->id)])->html();
} elseif ($_instance->childHasBeenRendered($product->product->id)) {
    $componentId = $_instance->getRenderedChildComponentId($product->product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($product->product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($product->product->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button', ['productId' => $product->product->id, 'class' => 'card__action', 'is_in_wishlist' => $this->isInWishlist($product->product->id)]);
    $html = $response->html();
    $_instance->logRenderedChild($product->product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
       <?php if ($product->product->product_prices->count() != 0) {
           $price = number_format($product->product->product_prices->first()->value, 2, $decimal, $mill);
           $discount = $product->product->product_prices->first()->discount != 0 ? true : false;
       } else {
           $price = null;
           $discount = false;
       }
       ?>
       <?php if($price): ?>
        <?php if($product->product->quantity < app('global_low_stock') && $product->product->quantity > 0): ?>
         <p class="card-status save">
          <?php if(app()->has('label_product_status_stock')): ?>
           <?php echo app('label_product_status_stock'); ?>

          <?php endif; ?>
         </p>
         <?php if($discount): ?>
          <p class="card-status save-secondary">
           -<?php echo e($product->product->product_prices->first()->discount); ?>%
          </p>
         <?php endif; ?>
        <?php elseif($product->product->quantity <= 0 && (app()->has('global_preorder') && app('global_preorder') != 'true')): ?>
         <p class="card-status out">
          <?php if(app()->has('label_product_status_indisponible')): ?>
           <?php echo app('label_product_status_indisponible'); ?>

          <?php endif; ?>
         </p>
        <?php else: ?>
         <?php if($discount): ?>
          <p class="card-status save">
           -<?php echo e($product->product->product_prices->first()->discount); ?>%
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
         <h2><a style="text-decoration: none; font-weight:500"
           href="<?php echo e(route('product', ['product' => $product->product->seo_id !== null && $product->product->seo_id !== '' ? $product->product->seo_id : $product->product->id])); ?>"><?php echo e($product->product->name); ?></a>
         </h2>
         <?php
          if (app()->has('global_cache_data') && app('global_cache_data') === 'true') {
              $primaryCategory = $product->product->product_categories->where('primary_category', true)->first();
          } else {
              $primaryCategory = $product->product->product_categories->first();
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
            <?php if($product->product->product_prices->first()): ?>
             <?php echo e($price); ?>

             <?php if(app()->has('global_currency_primary_symbol')): ?>
              <?php echo app('global_currency_primary_symbol'); ?>

             <?php endif; ?>
            <?php endif; ?>
           </span>
           <span class="card-price oldprice">
            <?php echo e(number_format($product->product->product_prices->first()->value_no_discount, 2, $decimal, $mill)); ?>

            <?php if(app()->has('global_currency_primary_name')): ?>
             <?php echo app('global_currency_primary_name'); ?>

            <?php endif; ?>
           </span>
          <?php else: ?>
           <span>
            <?php if($product->product->product_prices->first()): ?>
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
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product->product])->html();
} elseif ($_instance->childHasBeenRendered($product->product->id)) {
    $componentId = $_instance->getRenderedChildComponentId($product->product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($product->product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($product->product->id);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product->product]);
    $html = $response->html();
    $_instance->logRenderedChild($product->product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
       <div style="display: none" class="dlv">
        <span class="dlv_name"><?php echo e($product->product->name); ?></span>
        <span class="dlv_price"><?php echo e($price); ?></span>
        <span class="dlv_currency">
         <?php if(app()->has('global_currency_primary_name')): ?>
          <?php echo app('global_currency_primary_name'); ?>

         <?php endif; ?>
        </span>
       </div>
       <div style="display: none" class="json-ld-data" data-product-json='<?php echo json_encode($product->product, 15, 512) ?>'></div>
      </div>
     <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
  </section>
 <?php endif; ?>

 <?php if($last_visited_products->count() > 0): ?>
  <section>
   <div class="section__header
      container">
    <h2 class="section__title">
     <?php if(app()->has('label_pdp_lastviewproducts_slider_title')): ?>
      <?php echo app('label_pdp_lastviewproducts_slider_title'); ?>

     <?php endif; ?>
    </h2>
    <p class="section__text">
     <?php if(app()->has('label_pdp_lastviewproducts_slider_description')): ?>
      <?php echo app('label_pdp_lastviewproducts_slider_description'); ?>

     <?php endif; ?>
    </p>
   </div>
  </section>
  <section id="lastseenSlider" class="related__slider container">
   <div class="related__navigation">
    <button class="related__btnlast prev" aria-label="Previous related slider">
     <svg>
      <polyline points="15 18 9 12 15 6"></polyline>
     </svg>
    </button>
    <button class="related__btnlast next" aria-label="Next related slider">
     <svg>
      <polyline points="9 18 15 12 9 6"></polyline>
     </svg>
    </button>

   </div>
   <div class="related__wrapperlast">
    <?php $__currentLoopData = $last_visited_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="card product" style="width: 100%;">
      <a style="width: 100%"
       href="<?php echo e(route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id])); ?>">

       <?php if($product->media->first() != null): ?>
        <img loading="eager" width="300" height="300" class="card-image"
         src="/<?php echo e($product->media->first()->path); ?><?php echo e($product->media->first()->name); ?>"
         alt="<?php echo e($product->media->first()->name); ?> <?php echo e($product->name); ?>">
       <?php else: ?>
        <img loading="eager" width="300" height="300" class="card-image"
         src="/images/store/default/default300.webp" alt="something wrong">
       <?php endif; ?>
      </a>
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-wishlist-button', ['productId' => $product->id, 'class' => 'card__action', 'is_in_wishlist' => $this->isInWishlist($product->id)])->html();
} elseif ($_instance->childHasBeenRendered('lastw' . $product->id)) {
    $componentId = $_instance->getRenderedChildComponentId('lastw' . $product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('lastw' . $product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lastw' . $product->id);
} else {
    $response = \Livewire\Livewire::mount('product-wishlist-button', ['productId' => $product->id, 'class' => 'card__action', 'is_in_wishlist' => $this->isInWishlist($product->id)]);
    $html = $response->html();
    $_instance->logRenderedChild('lastw' . $product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
        <h2><a style="text-decoration: none; font-weight:500"
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

           <?php if(app()->has('global_currency_primary_name')): ?>
            <?php echo app('global_currency_primary_name'); ?>

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
} elseif ($_instance->childHasBeenRendered('last' . $product->id)) {
    $componentId = $_instance->getRenderedChildComponentId('last' . $product->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('last' . $product->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('last' . $product->id);
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('last' . $product->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
      <div style="display: none" class="dlv">
       <span class="dlv_name"><?php echo e($product->name); ?></span>
       <span class="dlv_price"><?php echo e($price); ?></span>
       <span class="dlv_currency">
        <?php if(app()->has('global_currency_primary_name')): ?>
         <?php echo app('global_currency_primary_name'); ?>

        <?php endif; ?>
       </span>
      </div>
      <div style="display: none" class="json-ld-data" data-product-json='<?php echo json_encode($product, 15, 512) ?>'></div>
     </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 <script>
  document.addEventListener("livewire:load", function() {
   injectJsonLd();
   Livewire.hook('message.processed', (message, component) => {
    injectJsonLd();
   });

   function injectJsonLd() {
    let existingScripts = document.querySelectorAll('script[type="application/ld+json"]');

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
 <script src="/script/store/product.js" defer></script>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-show-product.blade.php ENDPATH**/ ?>