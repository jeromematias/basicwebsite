<?php

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

Route::get('/','dbController@index');
Route::get('/user/{update}/{user_id}','dbController@edit');
Route::post('/user/{update}/{user_id}','dbController@edit');