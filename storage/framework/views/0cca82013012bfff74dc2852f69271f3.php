<div>
 <section id="cookie-banner" style="display: none">
  <?php if($timer > 0): ?>
   <div class="container cookie__container" style="margin-top: 200px !important; margin-bottom: 200px">
    <div class="cookie__description">
     <span>
      <?php if(app()->has('label_promotion_counter_title')): ?>
       <?php echo app('label_promotion_counter_title'); ?>

      <?php endif; ?>
     </span>
     <span id="countdown" style="font-size: 30px;"></span>
    </div>
   </div>
  <?php endif; ?>
  <div class="container cookie__container">

   <div class="cookie__description">
    <span>
     <?php if(app()->has('label_cookie_description')): ?>
      <?php echo app('label_cookie_description'); ?>

     <?php endif; ?>
    </span>
    <a href="<?php echo e(url('/cookie')); ?>">
     <?php if(app()->has('label_cookie_policy')): ?>
      <?php echo app('label_cookie_policy'); ?>

     <?php endif; ?>
    </a>
   </div>
   <div id="cookieForm">
    <div class="cookie__form">
     <div class="cookie__form--container">
      <label>
       <input type="checkbox" id="essential-cookies" name="essential" disabled checked>
       <span>
        <?php if(app()->has('label_cookie_esential_title')): ?>
         <?php echo app('label_cookie_esential_title'); ?>

        <?php endif; ?>
       </span>
       <p>
        <?php if(app()->has('label_cookie_esential_description')): ?>
         <?php echo app('label_cookie_esential_description'); ?>

        <?php endif; ?>
       </p>
      </label>
      <label>
       <input type="checkbox" id="analytics-cookies" name="analytics" checked>
       <span>
        <?php if(app()->has('label_cookie_analitics_title')): ?>
         <?php echo app('label_cookie_analitics_title'); ?>

        <?php endif; ?>
       </span>
       <p>
        <?php if(app()->has('label_cookie_analitics_description')): ?>
         <?php echo app('label_cookie_analitics_description'); ?>

        <?php endif; ?>
       </p>
      </label>
      <label>
       <input type="checkbox" id="marketing-cookies" name="marketing" checked>
       <span>
        <?php if(app()->has('label_cookie_marketing_title')): ?>
         <?php echo app('label_cookie_marketing_title'); ?>

        <?php endif; ?>
       </span>
       <p>
        <?php if(app()->has('label_cookie_marketing_description')): ?>
         <?php echo app('label_cookie_marketing_description'); ?>

        <?php endif; ?>
       </p>
      </label>
     </div>
    </div>
    <div class="cookie-btns">
     <button id="accept-cookies" class="cookie__button cookie__button--accept">
      <?php if(app()->has('label_cookie_accept_button')): ?>
       <?php echo app('label_cookie_accept_button'); ?>

      <?php endif; ?>
     </button>
     <button id="advanced-settings" class="cookie__button" type="button">
      <?php if(app()->has('label_cookie_advanced_button')): ?>
       <?php echo app('label_cookie_advanced_button'); ?>

      <?php endif; ?>
     </button>
    </div>
   </div>
  </div>


 </section>
 <?php if($timer > 0): ?>
  <script>
   const cooldownPeriod = <?php echo e($timer); ?>; // Cooldown period in seconds from the server
   let ticker;

   function startTimer(endTime) {
    ticker = setInterval(() => tick(endTime), 1000);
   }

   function tick(endTime) {
    const now = Math.floor(Date.now() / 1000);

    let timeLeft = Math.max(endTime - now, 0);

    if (timeLeft > 0) {
     const days = Math.floor(timeLeft / 86400);
     timeLeft %= 86400;
     const hours = Math.floor(timeLeft / 3600);
     timeLeft %= 3600;
     const mins = Math.floor(timeLeft / 60);
     const secs = timeLeft % 60;

     let pretty = "";
     if (days > 0) pretty += days + "d ";
     if (hours > 0 || days > 0) pretty += hours + "h ";
     if (mins > 0 || hours > 0 || days > 0) pretty += mins + "m ";
     pretty += secs + "s";

     document.getElementById("countdown").innerHTML = pretty;
    } else {
     clearInterval(ticker);
     document.getElementById("countdown").innerHTML = "0s";
     window.livewire.find('<?php echo e($_instance->id); ?>').call('timmerexpired');

    }
   }

   function initTimer() {
    const now = Math.floor(Date.now() / 1000);

    const endTime = now + cooldownPeriod;

    if (cooldownPeriod > 0) {
     startTimer(endTime);
    } else {
     document.getElementById("countdown").innerHTML = "0s";
     window.livewire.find('<?php echo e($_instance->id); ?>').call('timmerexpired');
    }
   }

   initTimer();
  </script>
 <?php endif; ?>



 <?php if (isset($component)) { $__componentOriginale771b02edc5b6979c77c5ae631ccbd2a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale771b02edc5b6979c77c5ae631ccbd2a = $attributes; } ?>
<?php $component = App\View\Components\AlertNewsletter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-newsletter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AlertNewsletter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale771b02edc5b6979c77c5ae631ccbd2a)): ?>
<?php $attributes = $__attributesOriginale771b02edc5b6979c77c5ae631ccbd2a; ?>
<?php unset($__attributesOriginale771b02edc5b6979c77c5ae631ccbd2a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale771b02edc5b6979c77c5ae631ccbd2a)): ?>
<?php $component = $__componentOriginale771b02edc5b6979c77c5ae631ccbd2a; ?>
<?php unset($__componentOriginale771b02edc5b6979c77c5ae631ccbd2a); ?>
<?php endif; ?>

 <!--------------------------Footer------------------------->
 <footer class="footer">
  <div class="footer__container container">
   <!---------------------Logo and Social--------------------->
   <div class="footer__top">
    <a class="logo" href="<?php echo e(url('/')); ?>">
     <img title="<?php echo e(app('global_site_name')); ?> logo" loading="eager" src="/images/store/svg/logo-light.svg"
      alt="logo">
    </a>
    <div class="social__list">
     <?php if(app()->has('global_instagram_url') && app('global_instagram_url') != ''): ?>
      <a href="<?php echo e(app('global_instagram_url')); ?>" target="_blank" class="social__item"
       aria-label="open our Instagram page">
       <svg>
        <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
        </rect>
        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
       </svg>
      </a>
     <?php endif; ?>
     <?php if(app()->has('global_facebook_url') && app('global_facebook_url') != ''): ?>
      <a href="<?php echo e(app('global_facebook_url')); ?>" target="_blank" class="social__item"
       aria-label="open our Facebook page">
       <svg>
        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
       </svg>
      </a>
     <?php endif; ?>
    </div>
   </div>
   <!------------------------Subscribe------------------------>
   <div class="footer__middle">
    <h2>
     <?php if(app()->has('label_newsletter_subscribe_title')): ?>
      <?php echo app('label_newsletter_subscribe_title'); ?>

     <?php endif; ?>
    </h2>
    <div class="footer__checkbox">
     <input type="checkbox" wire:model="ischecked" id="subscribeCheckbox" name="subscribe__checkbox">
     <label for="subscribeCheckbox">
      <?php if(app()->has('label_terms_confirm')): ?>
       <?php echo app('label_terms_confirm'); ?>

      <?php endif; ?>
     </label>
    </div>
    <form class="subscribe" wire:submit.prevent="store">
     <input type="email" id="subscribeInput" wire:model="email" name="email" id="email"
      placeholder="<?php if(app()->has('label_newsletter_subscribe_placeholder')): ?> <?php echo app('label_newsletter_subscribe_placeholder'); ?> <?php endif; ?>" aria-describedby="email-error"
      autocomplete="email">
     <button type="submit" id="subscribeSend" <?php if(!$ischecked || !($email && filter_var($email, FILTER_VALIDATE_EMAIL))): ?> disabled <?php endif; ?>>
      <?php if(app()->has('label_newsletter_subscribe_button')): ?>
       <?php echo app('label_newsletter_subscribe_button'); ?>

      <?php endif; ?>
     </button>

    </form>
   </div>
   <!-----------------------Quick Links----------------------->
   <div class="footer__bottom">
    <div class="footer__list">
     <h3 class="footer__title">Serviciu clienți</h3>
     <a class="footer__link" href="<?php echo e(url('/cookie')); ?>">Politica de Cookies</a>
     <a class="footer__link" href="<?php echo e(url('/faq')); ?>">Întrebări Frecvente</a>
     <a class="footer__link" href="<?php echo e(url('/privacy')); ?>">Politica de confidențialitate</a>
     <a class="footer__link" href="<?php echo e(url('/sitemap.xml')); ?>">Hartă Site</a>
     <a class="footer__link" target="blank" href="https://anpc.ro/">ANPC</a>

    </div>
    <div class="footer__list">
     <h3 class="footer__title">Informații</h3>
     <a class="footer__link" href="<?php echo e(url('/terms')); ?>">Termeni și Condiții</a>
     <a class="footer__link" href="<?php echo e(url('/contact')); ?>">Contactează-ne</a>
     <a class="footer__link" href="<?php echo e(url('/about')); ?>">Despre Noi</a>
    </div>
   </div>
   <!------------------------Copyright------------------------>
   <span class="footer__copyright">
    <?php if(app()->has('label_footer_copyright')): ?>
     <?php echo app('label_footer_copyright'); ?>

    <?php endif; ?>
   </span>
  </div>
 </footer>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-footer.blade.php ENDPATH**/ ?>