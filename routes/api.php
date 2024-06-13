<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
});
Route::middleware('auth:api')->group(function () {
        Route::get('/products', [ProductController::class, 'indexApi']);
        Route::post('logout', [AuthController::class,  'logout' ]);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
        Route::get('/products/{id}', [ProductController::class, 'showApi']);
        Route::get('/products/category/{id}', [ProductController::class, 'getProductsByCategory']);
        Route::get('/prices', [PriceController::class, 'indexApi']);
        Route::get('/prices/{storeName}', [PriceController::class, 'getPricesByStore']);
        Route::get('/categories', [CategoryController::class, 'indexApi']);
        Route::get('/categories/{categoryName}', [CategoryController::class, 'getProductsByCategory']);
        Route::get('/categoriesById/{id}', [CategoryController::class, 'getCategoriesById']);

});