<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Cart\CartController;
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
Route::post('/add', [CartController::class, 'store'])
     ->name('add');

Route::post('/processing', [CartController::class, 'setProcessing'])
     ->name('processing');

Route::post('/client', [CartController::class, 'setClient'])
     ->name('client');

Route::post('/client-type', [CartController::class, 'setClientType'])
     ->name('client-type');

Route::get('/get', [CartController::class, 'show'])
     ->name('get');

Route::get('/remove/{hash}', [CartController::class, 'remove'])
     ->name('remove');

Route::get('/clear', [CartController::class, 'destroy'])
     ->name('destroy');


// ??do we need a coupon endpoint ?
