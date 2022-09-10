<?php

use App\Http\Controllers\Api\Survey\AnswerController;
use App\Http\Controllers\Api\Survey\SurveyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Survey\PageController;
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
Route::get('/{survey:code}/respondent', [SurveyController::class, 'respondent'])
     ->name('respondent');

Route::post('/{survey:code}/page/{page_id}/answer/{question_id}', [AnswerController::class, 'store'])
     ->name('store');

Route::get('/{survey:code}/page/{page}', [PageController::class, 'page'])
     ->name('page');

Route::get('/{survey:code}/pages', [PageController::class, 'pageIndex'])
     ->name('page-index');

Route::get('/types', [SurveyController::class, 'types'])
     ->name('types');

Route::get('/classes', [SurveyController::class, 'classes'])
     ->name('classes');

Route::get('/{survey:code}', [SurveyController::class, 'survey'])
     ->name('survey');


