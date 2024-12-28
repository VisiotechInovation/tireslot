<div>
 <?php if (isset($component)) { $__componentOriginaled294631d37647e445f10fc8c8154197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled294631d37647e445f10fc8c8154197 = $attributes; } ?>
<?php $component = App\View\Components\StoreAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StoreAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled294631d37647e445f10fc8c8154197)): ?>
<?php $attributes = $__attributesOriginaled294631d37647e445f10fc8c8154197; ?>
<?php unset($__attributesOriginaled294631d37647e445f10fc8c8154197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled294631d37647e445f10fc8c8154197)): ?>
<?php $component = $__componentOriginaled294631d37647e445f10fc8c8154197; ?>
<?php unset($__componentOriginaled294631d37647e445f10fc8c8154197); ?>
<?php endif; ?>

 <!--------------------Banner(Header Top)-------------------->
 <div class="banner">
  <div class="banner__container container">
   <a class="logo" href="<?php echo e(url('/')); ?>">
   </a>
   <div class="header__buttons">
    <div class="head__button__left">
     <button class="header__btn" id="menuOpen" aria-label="Open burger menu button">
      <svg>
       <line x1="3" y1="12" x2="21" y2="12"></line>
       <line x1="3" y1="6" x2="21" y2="6"></line>
       <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
     </button>
     <a class="logo__hidden" href="<?php echo e(url('/')); ?>">
      <svg>
       <circle cx="11" cy="11" r="8"></circle>
       <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
     </a>
    </div>
    <div class="head__button__right">
     
     <button class="header__btn" wire:click="$emit('showsearch')" id="searchOpen" aria-label="Open Searchbar button">
      <svg>
       <circle cx="11" cy="11" r="8"></circle>
       <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
     </button>
     <?php if(app()->has('global_support_on') && app('global_support_on') === 'true'): ?>
      <a href="tel: <?php if(app()->has('global_support_phone_number')): ?> <?php echo app('global_support_phone_number'); ?> <?php endif; ?>" class="header__btn"
       aria-label="Call">
       <svg>
        <path
         d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
        </path>
       </svg>
      </a>
     <?php endif; ?>


     
     <button class="header__btn" wire:click="$emit('showwis')" id="wishOpen" aria-label="Open wishlist button">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-quantity')->html();
} elseif ($_instance->childHasBeenRendered('l1149544326-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1149544326-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1149544326-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1149544326-0');
} else {
    $response = \Livewire\Livewire::mount('wishlist-quantity');
    $html = $response->html();
    $_instance->logRenderedChild('l1149544326-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      <svg>
       <path
        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
       </path>
      </svg>
     </button>
     
     <button class="header__btn" wire:click="$emit('showcart')" id="basketOpen" aria-label="Open cart button">
      <?php if($cart): ?>
       <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-quantity', ['cart' => $cart])->html();
} elseif ($_instance->childHasBeenRendered('l1149544326-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1149544326-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1149544326-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1149544326-1');
} else {
    $response = \Livewire\Livewire::mount('cart-quantity', ['cart' => $cart]);
    $html = $response->html();
    $_instance->logRenderedChild('l1149544326-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      <?php endif; ?>
      <svg>
       <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
       <line x1="3" y1="6" x2="21" y2="6"></line>
       <path d="M16 10a4 4 0 0 1-8 0"></path>
      </svg>
     </button>
    </div>
   </div>
  </div>
 </div>
 <!--------------------------Header-------------------------->
 <header>
  <div class="header__container container">
   <!-------------------------Logo------------------------->

   <a class="logo" href="<?php echo e(url('/')); ?>">
   </a>
   <!---------------------NavMenu bar---------------------->
   <nav class="navbar__list">
    <ul class="navbar__list">
     <?php if(app()->has('global_show_on_header') && app('global_show_on_header') == 'true'): ?>
      <li>
       <a class="navbar__link" href="<?php echo e(route('products', ['categorySlug' => app('global_default_category')])); ?>">
        <?php if(app()->has('label_header_allproducts')): ?>
         <?php echo app('label_header_allproducts'); ?>

        <?php endif; ?>
       </a>
      </li>
     <?php endif; ?>
     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($category->subcategory->count() != 0): ?>
       <li>
        <div class="dropdown">
         <a class="dropdown__button"
          href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
          <?php echo $category->name; ?>

          <svg>
           <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
         </a>
         <ul class="dropdown__list">
          <?php $__currentLoopData = $category->subcategory->sortBy(function ($subcategory) {
        return $subcategory->category->sequence;
    }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li class="dropdown__item">
            <a class="dropdown__item--button"
             href="<?php echo e(route('products', ['categorySlug' => $subcategory->category->seo_id !== null && $subcategory->category->seo_id !== '' ? $subcategory->category->seo_id : $subcategory->category->id])); ?>">
             <?php echo $subcategory->category->name; ?>

             <?php if($subcategory->category->subcategory->count() != 0): ?>
              <svg>
               <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
             <?php endif; ?>
            </a>
            <?php if($subcategory->category->subcategory->count() != 0): ?>
             <div class="dropdown__item--list">
              <?php $__currentLoopData = $subcategory->category->subcategory->sortBy(function ($subsubCategory) {
        return $subsubCategory->category->sequence;
    }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <a class="dropdown__item--link"
                href="<?php echo e(route('products', ['categorySlug' => $subsubCategory->category->seo_id !== null && $subsubCategory->category->seo_id !== '' ? $subsubCategory->category->seo_id : $subsubCategory->category->id])); ?>">
                <?php echo $subsubCategory->category->name; ?>

               </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
            <?php endif; ?>
           </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
        </div>
       </li>
      <?php else: ?>
       <li>
        <a class="navbar__link"
         href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
         <?php echo $category->name; ?>

        </a>
       </li>
      <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
   </nav>
   <!---------------------Right-Buttons--------------------->

  </div>
 </header>
 <!-------------------------Searchbar------------------------>
 <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('general-search')->html();
} elseif ($_instance->childHasBeenRendered('l1149544326-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1149544326-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1149544326-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1149544326-2');
} else {
    $response = \Livewire\Livewire::mount('general-search');
    $html = $response->html();
    $_instance->logRenderedChild('l1149544326-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-products-list')->html();
} elseif ($_instance->childHasBeenRendered('l1149544326-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l1149544326-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1149544326-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1149544326-3');
} else {
    $response = \Livewire\Livewire::mount('cart-products-list');
    $html = $response->html();
    $_instance->logRenderedChild('l1149544326-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-products-list')->html();
} elseif ($_instance->childHasBeenRendered('l1149544326-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l1149544326-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1149544326-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1149544326-4');
} else {
    $response = \Livewire\Livewire::mount('wishlist-products-list');
    $html = $response->html();
    $_instance->logRenderedChild('l1149544326-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <!----------------------Menu (Leftbar)---------------------->
 <nav class="menu" id="menuList">
  <div class="menu__content" id="menuContent">
   <div class="menu__top">
    <button class="menu__close" id="menuClose" href="#">
     Închide Meniul
     <svg>
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
     </svg>
    </button>
   </div>
   <ul class="menu__list">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if($category->subcategory->count() != 0): ?>
      <li class="dropmenu">
       <div class="dropmenu__button">
        <a class="dropmenu__button--link"
         href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
         <?php if($category->media->where('type', 'min')->first()): ?>
          <img title="<?php echo e(strip_tags($category->name)); ?>" loading="eager" class="cart__list--img"
           src="/<?php echo e($category->media->where('type', 'min')->first()->path); ?><?php echo e($category->media->where('type', 'min')->first()->name); ?>"
           alt="<?php echo e($category->media->where('type', 'min')->first()->name); ?> <?php echo e(strip_tags($category->name)); ?>">
         <?php endif; ?>
         <h4 style="margin-left: 7px"><?php echo $category->name; ?></h4>
        </a>
        <button class="dropmenu__open" href="#">
         <svg>
          <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </button>
       </div>
       <ul class="dropmenu__list">
        <?php $__currentLoopData = $category->subcategory->sortBy(function ($subcategory) {
        return $subcategory->category->sequence;
    }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="submenu">
          <div class="submenu__button">
           <a class="submenu__button--link"
            href="<?php echo e(route('products', ['categorySlug' => $subcategory->category->seo_id !== null && $subcategory->category->seo_id !== '' ? $subcategory->category->seo_id : $subcategory->category->id])); ?>">
            <?php if($subcategory->category->media->where('type', 'min')->first() != null): ?>
             <img loading="eager" title="<?php echo e(strip_tags($subcategory->category->name)); ?>"
              src="/<?php echo e($subcategory->category->media->where('type', 'min')->first()->path); ?><?php echo e($subcategory->category->media->where('type', 'min')->first()->name); ?>"
              alt="<?php echo e($subcategory->category->media->where('type', 'min')->first()->name); ?><?php echo e(strip_tags($subcategory->category->name)); ?>">
            <?php endif; ?>
            <h4><?php echo $subcategory->category->name; ?></h4>
           </a>
           <?php if($subcategory->category->subcategory->count() != 0): ?>
            <button class="submenu__open" href="#">
             <svg>
              <polyline points="6 9 12 15 18 9"></polyline>
             </svg>
            </button>
           <?php endif; ?>
          </div>
          <?php if($subcategory->category->subcategory->count() != 0): ?>
           <div class="submenu__list">
            <?php $__currentLoopData = $category->subcategory->sortBy(function ($subcategory) {
        return $subcategory->category->sequence;
    }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <a class="submenu__link"
              href="<?php echo e(route('products', ['categorySlug' => $subsubCategory->category->seo_id !== null && $subsubCategory->category->seo_id !== '' ? $subsubCategory->category->seo_id : $subsubCategory->category->id])); ?>">
              <?php if($subsubCategory->category->media->where('type', 'min')->first() != null): ?>
               <img loading="eager" title="<?php echo e(strip_tags($subsubCategory->category->name)); ?>"
                src="/<?php echo e($subsubCategory->category->media->where('type', 'min')->first()->path); ?><?php echo e($subsubCategory->category->media->where('type', 'min')->first()->name); ?>"
                alt="<?php echo e($subsubCategory->category->media->where('type', 'min')->first()->name); ?><?php echo e(strip_tags($subsubCategory->category->name)); ?>">
              <?php endif; ?>
              <h4><?php echo $subsubCategory->category->name; ?></h4>
             </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
          <?php endif; ?>
         </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </ul>
      </li>
     <?php else: ?>
      <li>
       <a class="menu__link"
        href="<?php echo e(route('products', ['categorySlug' => $category->seo_id !== null && $category->seo_id !== '' ? $category->seo_id : $category->id])); ?>">
        <?php if($category->media->where('type', 'min')->first() != null): ?>
         <img loading="eager" title="<?php echo e(strip_tags($category->name)); ?>"
          src="/<?php echo e($category->media->where('type', 'min')->first()->path); ?><?php echo e($category->media->where('type', 'min')->first()->name); ?>"
          alt="<?php echo e($category->media->where('type', 'min')->first()->name); ?> <?php echo e(strip_tags($category->name)); ?>">
        <?php endif; ?>
        <h4> <?php echo $category->name; ?></h4>
       </a>
      </li>
     <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <li class="menufooter">Informații</li>
    <li class="menufooter__item"><a href="<?php echo e(url('/about')); ?>">Despre Noi</a></li>
    <li class="menufooter__item"><a href="<?php echo e(url('/contact')); ?>">Contactează-ne</a></li>
    <li class="menufooter__item"><a href="<?php echo e(url('/terms')); ?>">Termeni și Condiții</a></li>

    <li class="menufooter">Serviciu clienți</li>
    <li class="menufooter__item"><a href="<?php echo e(url('/cookie')); ?>">Politica de Cookies</a></li>
    <li class="menufooter__item"><a href="<?php echo e(url('/faq')); ?>">Întrebări Frecvente</a></li>
    <li class="menufooter__item"><a href="<?php echo e(url('/privacy')); ?>">Politica de confidențialitate</a></li>
    <li class="menufooter__item"><a href="<?php echo e(url('/sitemap.xml')); ?>">Hartă Site</a></li>

   </ul>
  </div>
  <button class="menu__hidden--close" id="menuHidden"></button>
 </nav>
 <!--------------------END-Menu (Leftbar)-------------------->
 <!---------------------------------------------------------->
 <script src="/script/store/header.js" defer></script>
</div>
<?php /**PATH D:\tireslot\resources\views/livewire/store-header.blade.php ENDPATH**/ ?>