<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/','StudentController@index');

Route::post('save','StudentController@saverecord');
Route::post('showdata','StudentController@display');

Route::post('editrow','StudentController@edit');
//amount --- cantidad
//quantity     ----
//price precio