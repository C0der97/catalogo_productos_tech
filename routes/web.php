<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;




Route::get('/', function () {
    return view('welcome');
});



Route::apiResource('/api/categories', CategoryController::class);
Route::apiResource('/api/products', ProductController::class);
