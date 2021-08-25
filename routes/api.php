<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);
Route::post('logout', [LoginController::class, 'logout']);


Route::apiResource('/products', ProductController::class);





Route::prefix('products')->group(function () {
    Route::apiResource('/{product}/reviews', ReviewsController::class);
});
