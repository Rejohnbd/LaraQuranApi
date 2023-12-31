<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ArabicFontController;
use App\Http\Controllers\Api\ReciterController;
use App\Http\Controllers\Api\SuraInfoController;
use App\Http\Controllers\Api\SuraListController;
use App\Http\Controllers\Api\TranslationController;

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

Route::get('arabic-font', [ArabicFontController::class, 'index']);
Route::get('sura-list', [SuraListController::class, 'index']);
Route::get('reciters', [ReciterController::class, 'index']);
Route::post('sura-details', [SuraInfoController::class, 'suraInfo']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
