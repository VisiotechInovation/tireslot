<div>
 <main>
  @php
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
  @endphp
 <section class="promo-section">
    <div class="container">
        <div class="promo-content">
            <div class="image-wrapper">
                <img src="images/store/banner.jpg" alt="Promo Banner" class="promo-image">
                <div class="promo-text">
                    <h2 class="promo-title">Upgrade Your Ride with Quality Tires</h2>
                    <p class="promo-description">Check out our exclusive deals on premium tires that deliver performance, safety, and durability.</p>
                </div>
            </div>
        </div>
    </div>
</section>


  @if ($newproducts->isNotEmpty())
   <section>
    <div class="section__header container">
     <h2 class="section__title">
      @if (app()->has('label_mainpage_isnewproducts_slider_title'))
       {!! app('label_mainpage_isnewproducts_slider_title') !!}
      @endif
      </h1>
      <p class="section__text">
       @if (app()->has('label_mainpage_isnewproducts_slider_description'))
        {!! app('label_mainpage_isnewproducts_slider_description') !!}
       @endif
      </p>
    </div>
   </section>
   <section>
    <div class="card-slider container popular-slider">
     <div class="card-slider__wrapper popular-slider__wrapper">
      @foreach ($newproducts as $product)
       <div class="card-slider__slide popular-slider__slide card" data-product-jsonld="newproducts-{{ $loop->index }}">
        <a draggable="false"
         href="{{ route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id]) }}">
         @php
          $mainMedia = $product->media->firstWhere('type', 'main');
         @endphp
         @if ($mainMedia)
          <img title="{{ $product->name }}, {{ $product->short_description }}" loading="eager" class="card-image"
           src="/{{ $mainMedia->path }}{{ $mainMedia->name }}" alt="{{ $product->name }}">
         @else
          <img title="Default image" loading="eager" class="card-image" src="/images/store/default/default300.webp"
           alt="something wrong">
         @endif
        </a>
        <?php
        $price = null;
        $discount = false;

        if ($product->product_prices->count() != 0) {
            $price = number_format($product->product_prices->first()->value, 2, $decimal, $mill);
            $discount = $product->product_prices->first()->discount != 0 ? true : false;
        }
        ?>

        @if ($price)
         @if ($product->quantity < app('global_low_stock') && $product->quantity > 0)
          <p class="card-status out">
           @if (app()->has('label_product_status_stock'))
            {!! app('label_product_status_stock') !!}
           @endif
          </p>
          @if ($discount)
           <p class="card-status save-secondary">
            -{{ $product->product_prices->first()->discount }}%
           </p>
          @endif
         @elseif($product->quantity <= 0 && (app()->has('global_preorder') && app('global_preorder') != 'true'))
          <p class="card-status out">
           @if (app()->has('label_product_status_indisponible'))
            {!! app('label_product_status_indisponible') !!}
           @endif
          </p>
         @else
          @if ($discount)
           <p class="card-status save">
            -{{ $product->product_prices->first()->discount }}%
           </p>
          @endif
         @endif
         {{-- tagul de discount --}}
        @else
         <p class="card-status save">
          @if (app()->has('label_product_status_coming_soon'))
           {!! app('label_product_status_coming_soon') !!}
          @endif
         </p>
        @endif
        <div class="card-info">
         <div class="card-text">
          <h2 class="card-title"><a style="text-decoration: none; font-weight:500"
            href="{{ route('product', ['product' => $product->seo_id !== null && $product->seo_id !== '' ? $product->seo_id : $product->id]) }}">{{ $product->name }}</a>
          </h2>
          @php

               $primaryCategory = $product->product_categories->first();
          @endphp

          @if ($primaryCategory && $primaryCategory->category)
           <a class="categorylink"
            href="{{ route('products', ['categorySlug' => $primaryCategory->category->seo_id !== null && $primaryCategory->category->seo_id !== '' ? $primaryCategory->category->seo_id : $primaryCategory->category->id]) }}">
            {{ $primaryCategory->category->short_description }}
           </a>
          @endif
          <p class="card-price">
           @if ($discount)
            <span class="card-price discount">
             @if ($product->product_prices->first())
              {{ $price }}
              @if (app()->has('global_currency_primary_symbol'))
               {!! app('global_currency_primary_symbol') !!}
              @endif
             @endif
            </span>
            <span class="card-price oldprice">
             {{ number_format($product->product_prices->first()->value_no_discount, 2, $decimal, $mill) }}
             @if (app()->has('global_currency_primary_symbol'))
              {!! app('global_currency_primary_symbol') !!}
             @endif
            </span>
           @else
            <span>
             @if ($product->product_prices->first())
              {{ $price }}
              @if (app()->has('global_currency_primary_symbol'))
               {!! app('global_currency_primary_symbol') !!}
              @endif
             @endif
            </span>
           @endif
          </p>
         </div>
         @if ($price)
          @livewire('add-to-cart-button', ['product' => $product], key('new' . $product->id))
         @else
          <button class="card-button-disabled" aria-label="Disabled Add to cart button">
           @if (app()->has('label_add_to_cart_button_indisponibil'))
            {!! app('label_add_to_cart_button_indisponibil') !!}
           @endif
          </button>
         @endif
         <div style="display: none" class="dlv">
          <span class="dlv_name">{{ $product->name }}</span>
          <span class="dlv_price">{{ $price }}</span>
          <span class="dlv_currency">
           @if (app()->has('global_currency_primary_name'))
            {!! app('global_currency_primary_name') !!}
           @endif
          </span>
         </div>

        </div>
        <div style="display: none" class="json-ld-data" data-product-json='@json($product)'></div>
       </div>
      @endforeach
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
  @endif
 </main>
 <script>

Sure! I understand you want to keep the same structure and make sure the image is used as an img element instead of a background-image. Here’s how you can modify the section in Blade, SCSS, and JavaScript to use an img tag while still maintaining the image overlay and hover effects.

Updated Blade (HTML):
In your Blade file (resources/views/welcome.blade.php or any other view file):

blade
Copy
Edit
<section class="promo-section">
    <div class="container">
        <div class="promo-content">
            <div class="image-wrapper">
                <img src="{{ asset('images/store/banner.jpg') }}" alt="Promo Banner" class="promo-image">
                <div class="promo-text">
                    <h2 class="promo-title">Upgrade Your Ride with Quality Tires</h2>
                    <p class="promo-description">Check out our exclusive deals on premium tires that deliver performance, safety, and durability.</p>
                </div>
            </div>
        </div>
    </div>
</section>
Updated SCSS:
In your SCSS file (resources/sass/styles.scss):

scss
Copy
Edit
.promo-section {
  padding: 60px 0;
  width: 100%;
  text-align: center;
  position: relative;
  overflow: hidden;

  .container {
    margin: 0 auto;
    padding: 0 15px;
  }

  .image-wrapper {
    position: relative;
    width: 100%;
    height: 250px; /* Set fixed height for desktop */
    border-radius: 8px;
    overflow: hidden; /* Ensures the image is confined within the wrapper */
    transition: transform 0.5s ease;

    .promo-image {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensures the image covers the area without distortion */
      transition: transform 0.5s ease;
    }

    &:hover .promo-image {
      transform: scale(1.05); /* Zoom the image on hover */
    }
  }

  .promo-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    max-width: 80%;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  .promo-title {
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 10px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
  }

  .promo-description {
    font-size: 18px;
    margin-bottom: 20px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  }

  /* Desktop styles */
  @media screen and (min-width: 1024px) {
    .image-wrapper {
      height: 250px;
    }

    .promo-section:hover .promo-text {
      opacity: 1;
      transform: translate(-50%, -50%);
    }
  }

  /* Mobile styles */
  @media screen and (max-width: 1024px) {
    .image-wrapper {
      height: 200px; /* Adjusted height on mobile */
    }

    .promo-title {
      font-size: 28px; /* Smaller title on mobile */
    }

    .promo-description {
      font-size: 16px; /* Smaller description on mobile */
    }

    .promo-section:hover .promo-text {
      opacity: 1;
      transform: translate(-50%, -50%);
    }
  }
}
Updated JavaScript (app.js or inline script):
You can still use the same JavaScript as before. Place it in your app.js or inline in your Blade file:

javascript
Copy
Edit
document.addEventListener("DOMContentLoaded", function () {
  const promoSection = document.querySelector('.promo-section');

  promoSection.addEventListener('mouseenter', () => {
    promoSection.style.transition = 'transform 0.3s ease-in-out';
    promoSection.style.transform = 'scale(1.02)';
  });

  promoSection.addEventListener('mouseleave', () => {
    promoSection.style.transition = 'transform 0.3s ease-in-out';
    promoSection.style.transform = 'scale(1)';
  });
});

</script>
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
