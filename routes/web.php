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
Route::post('/addnew','dbController@addnew');
Route::get('/user/{update}/{user_id}','dbController@edit');
Route::post('/user/{update}/{user_id}','dbController@edit');
Route::get('/angular',function(){
	return view('angular');
});


Route::get('/landing', function(){
	return view('landing.content');
});

Route::post('/landing/upload','dbController@upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/landing/postJob','dbController@postJob');

Route::get('/angularjs','dbController@angularjs');

Route::post('/angularjs/postreq','dbController@postreq');

Route::post('/landing/JobPost','dbController@JobPost');

Route::get('/landing/jobList','dbController@jobList');