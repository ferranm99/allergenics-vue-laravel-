<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::domain('{country?}'.config('session.domain')) // config var includes the dot, nz.allergenics-v4.test or world for www
////Route::domain('{country?}{domain}') // config var includes the dot, nz.allergenics-v4.test or world for www
//     ->group(function () {
    Route::middleware('auth:sanctum')
         ->name('api.checkout.')
         ->namespace('\App\Http\Controllers\Api\Checkout')
         ->prefix('checkout')
         ->group(__DIR__.'/api-checkout.php');

    Route::name('api.order.')
         ->namespace('\App\Http\Controllers\Api\Order')
         ->prefix('order')
         ->group(__DIR__.'/api-order.php');

    Route::name('api.cart.')
         ->namespace('\App\Http\Controllers\Api\Cart')
         ->prefix('cart')
         ->group(__DIR__.'/api-cart.php');

    Route::name('api.content.')
         ->namespace('\App\Http\Controllers\Api\Content')
         ->prefix('content')
         ->group(__DIR__.'/api-content.php');

    Route::middleware('auth:sanctum')
         ->name('api.survey.')
         ->namespace('\App\Http\Controllers\Api\Survey')
         ->prefix('survey')
         ->group(__DIR__.'/api-survey.php');

    Route::middleware('auth:sanctum')
         ->get('/user', function (Request $request) {
             return $request->user();
         });
//});
