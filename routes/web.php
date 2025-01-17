 <?php

  use App\Http\Controllers\AdminController;
  use Illuminate\Support\Facades\Route;
  use Illuminate\Support\Facades\Artisan;
  use App\Http\Controllers\HomeController;
  use App\Http\Controllers\ProductController;
  use App\Http\Controllers\CategoryController;
  use App\Http\Controllers\PriceListController;
  use App\Http\Controllers\SpecsController;
  use App\Http\Controllers\StoreController;
  // use App\Http\Controllers\TodolistController;
  use Illuminate\Support\Facades\Cache;
  use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
  use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


  /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



  route::middleware(['auth', 'usertype'])->group(function () {
    Route::prefix('panel')->group(function () {

      route::get('/forcelogout', [AdminController::class, 'forceLogoutAndForgetUser'])->name('forcelogout');
      route::get('/', [HomeController::class, 'redirect'])->middleware('auth', 'verified')->name('dashboard');
      route::get('/corectsequence', [AdminController::class, 'correctMediaSequence'])->name('corectsequence');

      //Category routes
      route::view('/category', 'admin.category')->name('category');
      route::view('/new_categories', 'admin.add_category')->name('newcategory');
      route::post('/add_category', [CategoryController::class, 'add_category'])->name('add_category');
      route::get('/show_category/{id}/', [CategoryController::class, 'show'])->name('show_category');

      //Products routes
      route::view('/products', 'admin.products')->name('all_products');
      route::view('/add_product', 'admin.add_products')->name('add_product');
      route::post('/new_products', [ProductController::class, 'new'])->name('new_products');
      route::get('/show_product/{id}/', [ProductController::class, 'show'])->name('show_product');
      route::get('/productfeed', [ProductController::class, 'feed'])->name('create_feed');

      // all_promotions
      route::view('/promotions', 'admin.promotions')->name('all_promotions');
      route::view('/new_promotion', 'admin.add_promotion')->name('newpromotion');
      route::post('/store_promotion', [AdminController::class, 'store_promotion'])->name('store_promotion');



      // brands routes
      route::view('/brands', 'admin.brands')->name('all_brands');
      route::view('/add_brand', 'admin.add_brand')->name('add_brand');
      route::get('/show_brand/{id}/', [AdminController::class, 'show_brand'])->name('show_brand');

      route::get('/show_session/{id}/', [AdminController::class, 'show_session'])->name('show_session');


      //todolist routes
      // route::post('/new', [TodolistController::class, 'store'])->name('new_todo');
      // route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('delete_todo');

      //carts route
      route::view('/carts', 'admin.cart')->name('carts');
      route::get('/show_cart/{id}/', [AdminController::class, 'show_cart'])->name('show_cart');

      //specs route
      route::view('/specs', 'admin.specs')->name('specs');
      route::view('/newspec', 'admin.add_spec')->name('new_spec');
      route::post('/add_spec', [SpecsController::class, 'store'])->name('add_spec');
      route::get('/show_spec/{id}/', [SpecsController::class, 'show'])->name('show_spec');

      //pricelist route
      route::view('/pricelists', 'admin.pricelists')->name('pricelists');
      route::get('/newpricelist', [PriceListController::class, 'create'])->name('new_pricelist');
      route::post('/add_pricelist', [PriceListController::class, 'store'])->name('add_pricelist');
      route::get('/show_pricelist/{id}/', [PriceListController::class, 'show'])->name('show_pricelist');


      //general routes
      route::get('/show_script/{id}/', [AdminController::class, 'show_script'])->name('show_script');
      route::post('/add_script', [AdminController::class, 'store_script'])->name('add_script');
      route::view('/new_script', 'admin.add_script')->name('new_script');
      route::view('/customscripts', 'admin.customscripts')->name('customscripts');

      route::get('/show_account/{id}/', [AdminController::class, 'show_account'])->name('show_account');
      route::view('/accounts', 'admin.accounts')->name('accounts');

      route::view('/orders', 'admin.order')->name('orders');
      route::get('/show_order/{id}/', [AdminController::class, 'show_order'])->name('show_order');

      route::view('/payments', 'admin.payment')->name('payments');
      route::view('/currencies', 'admin.currency')->name('currencies');
      route::view('/sessions', 'admin.session')->name('sessions');
      route::view('/wishlists', 'admin.wishlists')->name('wishlists');



      route::view('/vouchers', 'admin.voucher')->name('vouchers');
      route::view('/newvoucher', 'admin.add_voucher')->name('new_voucher');
      route::post('/add_voucher', [AdminController::class, 'store_voucher'])->name('add_voucher');

      route::view('/storesettings', 'admin.store_settings')->name('storesettings');
      route::view('/addstoresettings', 'admin.add_storesetting')->name('add_storesetting');
      route::post('/add_setting', [AdminController::class, 'store_setting'])->name('add_setting');

      route::view('/labels', 'admin.labels')->name('labels');
      route::view('/variants', 'admin.variants')->name('variants');
      route::view('/newvariant', 'admin.add_variant')->name('newvariant');
      route::post('/add_variant', [AdminController::class, 'store_variant'])->name('add_variant');




      //specific routes
      route::get('/cleareverything', function () {
        Artisan::call('cache:clear');
        Artisan::call('clear-compiled');
        Artisan::call('view:clear');
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        Artisan::call('event:clear');
        Artisan::call('queue:clear');
        Artisan::call('optimize:clear');
        Artisan::call('migrate');
        echo "App is optimized and updated";
      });

      route::get('/friendlyurl', function () {
        Artisan::call('update:seo_ids');
        echo 'New URL-s updated!';
      });

      route::get('/seed', function () {
        Artisan::call('db:seed');
        echo 'Database seeded';
      });
      route::get('/seedreviews', [AdminController::class, 'seedreviews']);
      route::get('/updatereviews', [AdminController::class, 'updatereviews']);

      route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        echo 'Cache cleared for global variables';
      });
    });
  });

  // Storefront

  //simple page routes

  route::get('/', [HomeController::class, 'home'])->name('home');
  route::view('/cart', 'store.cart')->name('cart');
  route::view('/wishlist', 'store.wislist')->name('wishlist');
  route::view('/order', 'store.order')->name('order');
  route::view('/faq', 'store.faq')->name('faq');
  route::view('/cookie', 'store.cookie')->name('cookie');
  route::view('/privacy', 'store.privacy')->name('privacy');
  route::view('/contact', 'store.contact')->name('contact');
  route::view('/about', 'store.about')->name('about');
  route::view('/confirm', 'store.confirm')->name('confirm');
  route::view('/terms', 'store.terms')->name('terms');
  route::view('/redirect', 'store.redirect')->name('redirect');
  Route::view('/404', 'store.404')->name('404');

  //Functionality page routes
  route::get('/product/{product}', [StoreController::class, 'show'])->name('product');
  Route::get('/storeproducts/{categorySlug?}', [StoreController::class, 'products'])
    ->name('products')
    ->middleware('categorycheck');
  route::get('/search/{slug?}', [StoreController::class, 'search'])->name('search');
  //payments routes
  Route::get('/success', [StoreController::class, 'success'])->name('payment_success');
  Route::post('/cancel', [StoreController::class, 'cancel'])->name('payment_cancel');


  //Custom login routes
  Route::get('/login', function () {
    throw new NotFoundHttpException();
  });
  Route::get('/panel/login', [AuthenticatedSessionController::class, 'create'])->name('login');
  Route::post('/panel/login', [AuthenticatedSessionController::class, 'store']);
