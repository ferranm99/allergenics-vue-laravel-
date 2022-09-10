<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Order\OrderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


     Route::post('/who', [OrderController::class, 'who'])
          ->name('who');

     Route::get('/current', [OrderController::class, 'current'])
          ->name('current');

     Route::post('/tests', [OrderController::class, 'orderTests'])
          ->name('tests');

     Route::get('/new', [OrderController::class, 'store'])
          ->name('new');

     Route::get('/products', [OrderController::class, 'products'])
          ->name('products');

     Route::post('/fees', [OrderController::class, 'orderFees'])
          ->name('fees');

     Route::post('/payment/stripe', [OrderController::class, 'paymentStripe'])
          ->name('payment.stripe');

    Route::post('/payment/account', [OrderController::class, 'paymentAccount'])
         ->name('payment.account');



