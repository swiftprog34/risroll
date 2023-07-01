<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:admin')->prefix('admin-panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('site', \App\Http\Controllers\Admin\SiteController::class);
    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('phone', \App\Http\Controllers\Admin\PhoneController::class);
    Route::resource('pickup_point', \App\Http\Controllers\Admin\PickupPointController::class);
    Route::get('/fetchMobidelData/{restaurantID}/{wid}',
        [\App\Http\Controllers\MobidelController::class, 'fetchData'])->name('fetchMobidelData');
});


Route::prefix('{city?}')->middleware('choose_city')->group(function () {
    Route::get('/', [App\Http\Controllers\Client\ClientController::class, 'index'])->name('index');
    Route::get('/product-category/{id}', [App\Http\Controllers\Client\ClientController::class, 'category'])->name('category');
    Route::get('/product/{id}', [App\Http\Controllers\Client\ClientController::class, 'product'])->name('product');
});
