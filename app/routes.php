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
//Route::get('/','StudentController@index');

//Route::post('save','StudentController@saverecord');
//Route::post('showdata','StudentController@display');

//Route::post('editrow','StudentController@edit');


Route::get('/','OrderController@index');
Route::get('/Orderform','OrderController@form');
Route::post('/ordersave','OrderController@save');
Route::get('/DeleteRow/{id}','OrderController@delete');
Route::get('/EditRow/{id}','OrderController@edit');
Route::post('/orderupdate','OrderController@update');

Route::get('/attch','AttchController@index');
//cuando se tiene que hacer rutas con alias :D //////////////////

Route::get('/brand',['as'=>'get.brand', 'uses'=> 'BrandController@getAll']);

Route::get('/brand/edit/{brand_id}',['as'=>'edit.brand', 'uses'=>'BrandController@getEdit']);

Route::post('/brand/create',[ 'as'=>'post.brand', 'uses'=>'BrandController@postCreate'] );



Route::post('/brand/update',[ 'as'=>'post.update', 'uses'=>'BrandController@postUpdate']);




Route::get('/login','LoginController@login');
Route::post('/login','LoginController@do_login');
//amount --- cantidad
//quantity     ----
//price precio
//chumper datatable
