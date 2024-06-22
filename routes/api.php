<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoreController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::middleware('auth:api')->post('me', [AuthController::class, 'me']);
    Route::middleware('auth:api')->post('logout', [AuthController::class, 'logout']);
    Route::middleware('auth:api')->post('refresh', [AuthController::class, 'refresh']);
    Route::middleware('auth:api')->post('update-profile', [AuthController::class, 'updateProfile']);
    Route::middleware('auth:api')->delete('delete-user', [AuthController::class, 'deleteUser']);
});

Route::get('/products', [ProductController::class, 'indexApi']);
Route::get('/products/{id}', [ProductController::class, 'showApi']);
Route::get('/products/category/{id}', [ProductController::class, 'getProductsByCategory']);
Route::get('/prices', [PriceController::class, 'indexApi']);
Route::get('/prices/{storeName}', [PriceController::class, 'getPricesByStore']);
Route::get('/categories', [CategoryController::class, 'indexApi']);
Route::get('/categories/{categoryName}', [CategoryController::class, 'getProductsByCategory']);
Route::get('/categoriesById/{id}', [CategoryController::class, 'getCategoriesById']);
Route::get('/stores', [StoreController::class, 'indexApi']);


Route::middleware('auth:api')->group(function () { 
     //  Route::get('/products', [ProductController::class, 'indexApi']);    
});