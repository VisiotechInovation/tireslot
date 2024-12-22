<main>
 <!-- Mobile Menu -->
 <aside id="menu__container" class="display--mobile">
  <div class="background background--left" wire:ignore id="menu__backdrop"></div>
  <div class="aside aside--left" wire:ignore id="menu">
   <div class="aside--controls">
    <button class="button button--flexed button--primary" id="menu__close">
     <svg>
      <polyline points="4 14 10 14 10 20"></polyline>
      <polyline points="20 10 14 10 14 4"></polyline>
      <line x1="14" y1="10" x2="21" y2="3"></line>
      <line x1="3" y1="21" x2="10" y2="14"></line>
     </svg>
    </button>
    <h3>Menu</h3>
   </div>
   <span class="aside--line"></span>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'dashboard'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('dashboard')); ?>">
    <svg>
     <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
     <line x1="8" y1="21" x2="16" y2="21"></line>
     <line x1="12" y1="17" x2="12" y2="21"></line>
    </svg>
    <span>Dashboard</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'brand'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('all_brands')); ?>">
    <svg>
     <path
      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
     </path>
     <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
     <line x1="12" y1="22.08" x2="12" y2="12"></line>
    </svg>
    <span>Brands</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'category'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('category')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 4h6v6h-6z" />
     <path d="M4 14h6v6h-6z" />
     <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
     <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
    </svg>
    <span>Categories</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'product'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('all_products')); ?>">
    <svg>
     <rect x="1" y="3" width="15" height="13"></rect>
     <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
     <circle cx="5.5" cy="18.5" r="2.5"></circle>
     <circle cx="18.5" cy="18.5" r="2.5"></circle>
    </svg>
    <span>Products</span>
   </a>


   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'voucher'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('vouchers')); ?>">
    <svg>
     <line x1="19" y1="5" x2="5" y2="19"></line>
     <circle cx="6.5" cy="6.5" r="2.5"></circle>
     <circle cx="17.5" cy="17.5" r="2.5"></circle>
    </svg>
    <span>Vouchers</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'account'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('accounts')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
     <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
     <path d="M16 3.13a4 4 0 0 1 0 7.75" />
     <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
    </svg>
    <span>Accounts</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'cart'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('carts')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
     <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
     <path d="M17 17h-11v-14h-2" />
     <path d="M6 5l14 1l-1 7h-13" />
    </svg>
    <span>Carts</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'order'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('orders')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
     <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
     <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
     <path d="M3 9l4 0" />
    </svg>
    <span>Orders</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'price'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('pricelists')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
     <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
    </svg>
    <span>Price List</span>
   </a>
   
   <a class="button button--fill button--flexed button--primary <?php if($active == 'spec'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('specs')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
     <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
     <path d="M15 8l2 0" />
     <path d="M15 12l2 0" />
     <path d="M7 16l10 0" />
    </svg>
    <span>Specifications</span>
   </a>
   
   <a
    class="button button--fill button--flexed button--primary <?php if($active == 'wishlist'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('wishlists')); ?>">
    <svg>
     <path
      d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
     </path>
    </svg>
    <span>Wishlists</span>
   </a>
   
   <a
    class="button button--fill button--flexed button--primary <?php if($active == 'session'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('sessions')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M10 5m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
     <path d="M7 7l0 10" />
     <path d="M4 8l0 8" />
    </svg>
    <span>Store Sessions</span>
   </a>
   
   <a
    class="button button--fill button--flexed button--primary <?php if($active == 'store_settings'): ?> button--active <?php endif; ?>"
    href="<?php echo e(route('storesettings')); ?>">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
     <path d="M12 20h-6a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h10.5" />
     <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
     <path d="M18 14.5v1.5" />
     <path d="M18 20v1.5" />
     <path d="M21.032 16.25l-1.299 .75" />
     <path d="M16.27 19l-1.3 .75" />
     <path d="M14.97 16.25l1.3 .75" />
     <path d="M19.733 19l1.3 .75" />
     <path d="M7 8v.01" />
     <path d="M7 16v.01" />
    </svg>
    <span>Store settings</span>
   </a>
  </div>
 </aside>
 <!-- Desktop Menu -->
 <div class="leftbar display--desktop active" id="leftbar">
  <button class="button button--long button--flexed button--primary" id="toggle__leftbar">
   <svg>
    <polyline points="4 14 10 14 10 20"></polyline>
    <polyline points="20 10 14 10 14 4"></polyline>
    <line x1="14" y1="10" x2="21" y2="3"></line>
    <line x1="3" y1="21" x2="10" y2="14"></line>
   </svg>
   <span>Menu</span>
  </button>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'dashboard'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('dashboard')); ?>">
   <svg>
    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
    <line x1="8" y1="21" x2="16" y2="21"></line>
    <line x1="12" y1="17" x2="12" y2="21"></line>
   </svg>
   <span>Dashboard</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'brand'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('all_brands')); ?>">
   <svg>
    <path
     d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
    </path>
    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
    <line x1="12" y1="22.08" x2="12" y2="12"></line>
   </svg>
   <span>Brands</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'category'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('category')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M14 4h6v6h-6z" />
    <path d="M4 14h6v6h-6z" />
    <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
    <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
   </svg>
   <span>Categories</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'product'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('all_products')); ?>">
   <svg>
    <rect x="1" y="3" width="15" height="13"></rect>
    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
    <circle cx="5.5" cy="18.5" r="2.5"></circle>
    <circle cx="18.5" cy="18.5" r="2.5"></circle>
   </svg>
   <span>Products</span>
  </a>


  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'voucher'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('vouchers')); ?>">
   <svg>
    <line x1="19" y1="5" x2="5" y2="19"></line>
    <circle cx="6.5" cy="6.5" r="2.5"></circle>
    <circle cx="17.5" cy="17.5" r="2.5"></circle>
   </svg>
   <span>Vouchers</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'account'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('accounts')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
   </svg>
   <span>Accounts</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'cart'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('carts')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M17 17h-11v-14h-2" />
    <path d="M6 5l14 1l-1 7h-13" />
   </svg>
   <span>Carts</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'order'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('orders')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
    <path d="M3 9l4 0" />
   </svg>
   <span>Orders</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'price'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('pricelists')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
    <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
   </svg>
   <span>Price List</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'spec'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('specs')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
    <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M15 8l2 0" />
    <path d="M15 12l2 0" />
    <path d="M7 16l10 0" />
   </svg>
   <span>Specifications</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'wishlist'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('wishlists')); ?>">
   <svg>
    <path
     d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
    </path>
   </svg>
   <span>Wishlists</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'session'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('sessions')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M10 5m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
    <path d="M7 7l0 10" />
    <path d="M4 8l0 8" />
   </svg>
   <span>Store Sessions</span>
  </a>
  
  <a
   class="button button--long button--flexed button--primary <?php if($active == 'store_settings'): ?> button--secondary <?php endif; ?>"
   href="<?php echo e(route('storesettings')); ?>">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
    <path d="M12 20h-6a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h10.5" />
    <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
    <path d="M18 14.5v1.5" />
    <path d="M18 20v1.5" />
    <path d="M21.032 16.25l-1.299 .75" />
    <path d="M16.27 19l-1.3 .75" />
    <path d="M14.97 16.25l1.3 .75" />
    <path d="M19.733 19l1.3 .75" />
    <path d="M7 8v.01" />
    <path d="M7 16v.01" />
   </svg>
   <span>Store settings</span>
  </a>


 </div>
 
 <script>
  const leftbar2 = document.getElementById('leftbar');
  const buttons2 = leftbar2.querySelectorAll('a');
  const closeButton2 = leftbar2.querySelector('button');

  function initializeComponentState() {
   const isActive = localStorage.getItem('leftbarActive') === 'true';
   if (isActive) {
    leftbar2.classList.add('active');
   } else {
    leftbar2.classList.remove('active');
   }
  }

  function saveComponentState() {
   const isActive = leftbar2.classList.contains('active');
   localStorage.setItem('leftbarActive', isActive);
  }

  initializeComponentState();

  function addTransition() {
   leftbar2.style.transition = 'all 0.25s ease';
   closeButton2.style.transition = 'all 0.25s ease';
   buttons2.forEach((button) => {
    button.style.transition = 'all 0.25s ease';
   });
  }
  setTimeout(addTransition, 500);
  const observer2 = new MutationObserver(saveComponentState);
  observer2.observe(leftbar2, {
   attributes: true,
   attributeFilter: ['class']
  });
 </script>
<?php /**PATH D:\tireslot\resources\views/components/dashboardsidebar.blade.php ENDPATH**/ ?>