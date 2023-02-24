<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['auth:sanctum'])->group(function () {

    // Users
    // Route::controller(UserController::class)->group(function () {
    //     Route::get('/users', 'index');
    //     Route::post('/user', 'store');
    //     Route::get('/user/{id}', 'show');
    //     Route::put('/user/{id}', 'update');
    //     Route::delete('/user/{id}', 'destroy');
    // });

    // Products
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::post('/product', 'store');
        Route::get('/product/{id}', 'show');
        Route::put('/product/{id}', 'update');
        Route::delete('/product/{id}', 'destroy');
    });
// });