<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CupcakeController;
use App\Http\Controllers\CartController;

Route::get('/', [CupcakeController::class, 'index'])->name('home');

Route::get('/cupcake/{id}', [CupcakeController::class, 'show'])->name('cupcake.show');

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
