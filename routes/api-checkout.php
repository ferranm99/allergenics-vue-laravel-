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
Route::post('/new', [OrderController::class, 'store'])
     ->name('new');

Route::get('/get/{order}', [OrderController::class, 'show'])
     ->name('get');

Route::get('/current', [OrderController::class, 'current'])
     ->name('current');

Route::put('/update/{order}', [OrderController::class, 'update'])
     ->name('update');

Route::put('/payment/{order}', [OrderController::class, 'payment'])
     ->name('payment');

Route::put('/complete/{order}', [OrderController::class, 'complete'])
     ->name('complete');
