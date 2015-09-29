<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('api', 'ApisController@index');
Route::get('api/create', 'ApisController@create');
Route::get('api/{id}', 'ApisController@show');
Route::get('api/edit/{id}', 'ApisController@edit');
Route::post('api/update/{id}', 'ApisController@update');
Route::post('api', 'ApisController@store');

Route::resource('normalize', 'NormalizetestController');
