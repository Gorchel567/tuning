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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::post('/send', 'App\Http\Controllers\HomeController@send');
Route::get('/reviews', 'App\Http\Controllers\ReviewsController@index');
//Route::get('/review/{id}', 'App\Http\Controllers\NewsController@view');
Route::get('/news', 'App\Http\Controllers\NewsController@index');
Route::get('/news/{id}', 'App\Http\Controllers\NewsController@view');
Route::get('/prices', 'App\Http\Controllers\PriceController@index');
Route::get('/questions','App\Http\Controllers\QuestionController@index');
