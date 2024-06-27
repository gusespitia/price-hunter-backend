<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\PriceController;
use App\Http\Controllers\api\v1\CustomerAuthController;
use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\ProductController;
use App\Http\Controllers\api\v1\StoreController;
use App\Http\Controllers\api\v1\ListController;
use App\Http\Controllers\api\v1\ContactController;

Route::post('/contact', [ContactController::class, 'store']);

// Rutas para la autenticación de clientes
Route::group(['prefix' => 'customer-auth'], function () {
    Route::post('login', [CustomerAuthController::class, 'login']);
    Route::post('register', [CustomerAuthController::class, 'register']);
    Route::middleware('auth:customer-api')->post('me', [CustomerAuthController::class, 'me']);
    Route::middleware('auth:customer-api')->post('logout', [CustomerAuthController::class, 'logout']);
    Route::middleware('auth:customer-api')->post('refresh', [CustomerAuthController::class, 'refresh']);
    Route::middleware('auth:customer-api')->post('update-profile', [CustomerAuthController::class, 'updateProfile']);
    Route::middleware('auth:customer-api')->delete('delete-user', [CustomerAuthController::class, 'deleteUser']);
});

// Rutas para productos
Route::get('/products', [ProductController::class, 'indexApi']);
Route::get('/products/{id}', [ProductController::class, 'showApi']);
Route::get('/products/category/{id}', [ProductController::class, 'getProductsByCategory']);

// Rutas para precios
Route::get('/prices', [PriceController::class, 'indexApi']);
Route::get('/prices/{storeName}', [PriceController::class, 'getPricesByStore']);

// Rutas para categorías
Route::get('/categories', [CategoryController::class, 'indexApi']);
Route::get('/categories/{categoryName}', [CategoryController::class, 'getProductsByCategoryName']);
Route::get('/categoriesById/{id}', [CategoryController::class, 'getCategoriesById']);

// Rutas para tiendas
Route::get('/stores', [StoreController::class, 'indexApi']);

Route::middleware('auth:customer-api')->group(function () {
    Route::post('/lists', [ListController::class, 'store']);
    Route::get('/lists', [ListController::class, 'index']);
    Route::get('/lists/{id}', [ListController::class, 'show']);
    Route::put('/lists/{id}', [ListController::class, 'update']);
    Route::delete('/lists/{id}', [ListController::class, 'destroy']);
});
