<?php

use Illuminate\Http\Request;

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

Route::get('/home', 'TestController@get');

Route::get('/product', 'ProductController@get');

Route::get('/product/{id}', 'ProductController@getOne');

Route::post('/product', 'ProductController@create');
