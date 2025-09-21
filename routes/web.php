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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth:web')->group(function(){
Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
 Route:: resource('category',CategoryController::class);
  Route:: resource('vendor_type',VendorTypeController::class);
   Route:: resource('vendor',VendorController::class);
    Route:: resource('item',ItemController::class);
     Route:: resource('tag',TagController::class);
       Route:: resource('item_tag',ItemTagController::class);
        Route:: resource('promotion',PromotionController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes();