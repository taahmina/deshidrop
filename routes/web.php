<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VendorTypeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ItemTagController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GpsLogController;

use App\Http\Controllers\DelivaryZoneController;
use App\Http\Controllers\DelivaryRuleController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FrontendController  as front;
use  App\Http\Controllers\CartController;
use  App\Http\Controllers\CheckoutController;
use  App\Http\Controllers\CouponController;
use App\Http\Controllers\RiderController;








/* vendor panle */
use  App\Http\Controllers\Vendor\VendorAuthController;
use  App\Http\Controllers\Vendor\VendorItemController;

/* rider panle */
use  App\Http\Controllers\Rider\RiderAuthController;
use App\Http\Controllers\Rider\RiderOrderController;

/*Customer panel*/
use App\Http\Controllers\Customer\CustomerRegisterController;
use App\Http\Controllers\Customer\CustomerLoginController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\Customer\CustomerOrderController;
//use App\Http\Controllers\CustomerProfileController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/',[front::class,'home'])->name ('home');

    Route::get('cart',[CartController::class,'viewCart'])->name('cart.view');
    Route::post('cart/add',[CartController::class,'addToCart'])->name('cart.add');
    Route::post('cart/update',[CartController::class,'updateCart'])->name('cart.update');
    Route::get('cart/remove/{id}',[CartController::class,'removeFromCart'])->name('cart.remove');
    Route::post('cart/check_coupon',[CartController::class,'checkCoupon'])->name('cart.check_coupon');
    Route::get('checkout',[CheckoutController::class,'checkout'])->name('checkout');
    Route::post('checkout/place_order',[CheckoutController::class,'placeOrder'])->name('checkout.place_order');

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
/* Admin  panel */
Route::middleware('auth:web')->group(function(){
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route:: resource('category',CategoryController::class);
    Route:: resource('vendor_type',VendorTypeController::class);
    Route:: resource('vendor',VendorController::class);
    Route:: resource('rider',RiderController::class);
    Route:: resource('item',ItemController::class);
    Route:: resource('tag',TagController::class);
    Route:: resource('item_tag',ItemTagController::class);
    Route:: resource('promotion',PromotionController::class);
    Route::resource('coupon', CouponController::class);
    Route:: resource('order',OrderController::class);
    Route:: resource('review',ReviewController::class);
    Route:: resource('gpslog',GpsLogController::class);
  
    Route:: resource('delivary_zone',DelivaryZoneController::class);
    Route:: resource('delivary_rule',DelivaryRuleController::class);
    Route:: resource('delivary_rule',OrderItemController::class);
    Route:: resource('payment',PaymentController::class);
    Route:: resource('transaction',TransactionController::class);
    Route:: resource('notification',NotificationController::class);



   

});
Auth::routes();

/* vendor panel */

Route::get('vendor_panel/login',[VendorAuthController::class,'login'])->name('vendor_panel.login');
Route::post('vendor_panel/login',[VendorAuthController::class,'checkLogin'])->name('vendor_panel.login');
Route::get('vendor_panel/logout',[VendorAuthController::class,'logout'])->name('vendor_panel.logout');
Route::middleware('auth:vendor')->group(function () {
    Route::get('vendor_panel/dashboard',[VendorAuthController::class,'dashboard'])->name('vendor_panel.dashboard');
    Route::resource('vendor_panel/item', VendorItemController::class, ['as'=>'vendor_panel']);
    Route::resource('vendor_panel/order', VendorOrderController::class, ['as'=>'vendor_panel']);
});

/* rider panel */

Route::get('rider_panel/login',[RiderAuthController::class,'login'])->name('rider_panel.login');
Route::post('rider_panel/login',[RiderAuthController::class,'checkLogin'])->name('rider_panel.login');
Route::get('rider_panel/logout',[RiderAuthController::class,'logout'])->name('rider_panel.logout');

Route::middleware('auth:rider')->group(function () {
    Route::get('rider_panel/dashboard',[RiderAuthController::class,'dashboard'])->name('rider_panel.dashboard');
    Route::resource('rider_panel/order', RiderOrderController::class,['as'=>'rider_panel']);
});




/*Customer panel*/

// Customer Authentication Routes
Route::prefix('customer')->group(function () {
    // Registration
    Route::get('/customer_panel/register', [CustomerRegisterController::class, 'showRegistrationForm'])->name('customer_panel.register');
    Route::post('/customer_panel/register', [CustomerRegisterController::class, 'register'])->name('customer_panel.register');
    
    // Login
    Route::get('/customer_panel/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer_panel.login');
    Route::post('/customer_panel/login', [CustomerLoginController::class, 'login'])->name('customer_panel.login');
    
    // Logout
    Route::post('/customer_panel/logout', [CustomerLoginController::class, 'logout'])->name('customer_panel.logout');
});

// Customer Protected Routes
Route::middleware(['auth:customer'])->group(function () {
    // Dashboard
    Route::get('/customer_panel/dashboard', [CustomerDashboardController::class, 'customerdash'])->name('customer_panel.dashboard');
    Route::resource('/customer_panel/order', CustomerOrderController::class, ['as' => 'customer_panel']);
    
    // Profile
   // Route::get('/profile', [CustomerProfileController::class, 'show'])->name('customer.profile');
    //Route::put('/profile', [CustomerProfileController::class, 'update'])->name('customer.profile.update');
    
    // Orders
    //Route::get('/orders', [CustomerOrderController::class, 'index'])->name('customer.orders');
   // Route::get('/orders/{id}', [CustomerOrderController::class, 'show'])->name('customer.orders.show');
});