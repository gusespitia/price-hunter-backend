<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;

// Rutas para productos
Route::get('/products', [ProductController::class, 'indexApi']); 
Route::get('/products/{id}', [ProductController::class, 'showApi']);
Route::get('/products/category/{categoryName}', [ProductController::class, 'getProductsByCategory']);

// Rutas para precios
Route::get('/prices', [PriceController::class, 'indexApi']); 
Route::get('/prices/{storeName}', [PriceController::class, 'getPricesByStore']);

// Otras rutas de la API...

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
