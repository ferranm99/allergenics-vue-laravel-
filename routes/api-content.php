<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Content\ContentController;
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
Route::get('/home', [ContentController::class, 'home'])
     ->name('homepage');
Route::get('/{page:slug}', [ContentController::class, 'show'])
     ->name('page');
Route::get('/region/{region:id}', [ContentController::class, 'region'])
     ->name('region');

