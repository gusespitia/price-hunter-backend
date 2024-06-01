<?php
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class)->names([
    'index' => 'product.index',
    'create' => 'product.create',
    'store' => 'product.store',
    'show' => 'product.show',
    'edit' => 'product.edit',
    'update' => 'product.update',
    'destroy' => 'product.destroy',
]);
Route::resource('categories', CategoryController::class)->names([
    'index' => 'category.index',
    'create' => 'category.create',
    'store' => 'category.store',
    'show' => 'category.show',
    'edit' => 'category.edit',
    'update' => 'category.update',
    'destroy' => 'category.destroy',
]);
Route::resource('stores', StoreController::class)->names([
    'index' => 'store.index',
    'create' => 'store.create',
    'store' => 'store.store',
    'show' => 'store.show',
    'edit' => 'store.edit',
    'update' => 'store.update',
    'destroy' => 'store.destroy',
]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
