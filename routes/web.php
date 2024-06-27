<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ScrapingProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('contacts', ContactController::class)->names([
    'index' => 'contacts.index',
    'create' => 'contacts.create',
    'store' => 'contacts.store',
    'show' => 'contacts.show',
    'edit' => 'contacts.edit',
    'update' => 'contacts.update',
    'destroy' => 'contacts.destroy',
]);

// Rutas para ProductController
Route::resource('products', ProductController::class)->names([
    'index' => 'product.index',
    'create' => 'product.create',
    'store' => 'product.store',
    'show' => 'product.show',
    'edit' => 'product.edit',
    'update' => 'product.update',
    'destroy' => 'product.destroy',
]);

// Rutas para CategoryController
Route::resource('categories', CategoryController::class)->names([
    'index' => 'category.index',
    'create' => 'category.create',
    'store' => 'category.store',
    'show' => 'category.show',
    'edit' => 'category.edit',
    'update' => 'category.update',
    'destroy' => 'category.destroy',
]);

// Rutas para StoreController
Route::resource('stores', StoreController::class)->names([
    'index' => 'store.index',
    'create' => 'store.create',
    'store' => 'store.store',
    'show' => 'store.show',
    'edit' => 'store.edit',
    'update' => 'store.update',
    'destroy' => 'store.destroy',
]);

// Rutas para ScrapingProductController
Route::resource('scraping_products', ScrapingProductController::class)->names([
    'index' => 'scraping_product.index',
    'create' => 'scraping_product.create',
    'store' => 'scraping_product.store',
    'show' => 'scraping_product.show',
    'edit' => 'scraping_product.edit',
    'update' => 'scraping_product.update',
    'destroy' => 'scraping_product.destroy',
]);

// Rutas para PriceController
Route::resource('prices', PriceController::class)->names([
    'index' => 'price.index',
    'create' => 'price.create',
    'store' => 'price.store',
    'show' => 'price.show',
    'edit' => 'price.edit',
    'update' => 'price.update',
    'destroy' => 'price.destroy',
]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
