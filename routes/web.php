<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\PenjualanController;
use  App\Http\Controllers\ProductsController;
use  App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something gr\seat!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index']);

Route::get('/user/{id}/nama/{name?}', [ UserController::class,'index']);

Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'food']);
    Route::get('/beauty-health', [ProductsController::class, 'beauty']);
    Route::get('/home-care', [ProductsController::class, 'home']);
    Route::get('/baby-kid', [ProductsController::class, 'baby']);
});

Route::get('/penjualan', [PenjualanController::class,'index']);