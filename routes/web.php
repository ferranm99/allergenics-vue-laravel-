<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [Auth\LoginController::class, 'checkLogin'])
     ->name('checklogin');

Route::post('check-email', [Auth\LoginController::class, 'checkEmail'])
     ->name('checkemail');

Route::post('login', [Auth\LoginController::class, 'login'])
      ->name('login');
//Route::get('logout', [Auth\LoginController::class, 'logout'])
//     ->name('logout');

// Registration Routes...
Route::get('register', [Auth\RegisterController::class, 'showRegistrationForm'])
     ->name('register')
     ->withoutBlocking();
Route::post('register', [Auth\RegisterController::class, 'register'])
     ->withoutBlocking();



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/reset-password', function () {
    return 'password.reset view';
})->name('password.reset');




//
//Route::get('{any}', function () {
//
//})->where('any', '^(?!nova|nova-api|nova-vendor|telescope).[a-zA-Z0-9-_\/]+$');
//})->where('any', '.*');
Route::fallback(function () {
    return view('spa');
});


