<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Rutas para productos
Route::get('/products', [ProductController::class, 'indexApi']); // Obtener todos los productos en formato JSON


// Otras rutas de la API...

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
