<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register'  => false,
    'reset'     => false,
    'verify'    => false
]);

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('sura-list', 'SuraListController');
    Route::resource('sura-info', 'SuraInfoController');
    Route::post('check-sura-info', 'SuraInfoController@checkSuraInfo')->name('check-sura-info');
});
