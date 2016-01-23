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


Route::get('/brand', function()
{
	$categories=Category::all();
	$brands=Brand::all();
	return View::make('Attch/index')->with('categories', $categories)->with('brands',$brands);
});

Route::get('/brand/edit/{brand_id}', function($brand_id)
{

	$brand=Brand::find($brand_id);
	$brand_categories=$brand->categories()->get();
	$categories=Category::all();

	foreach ($categories as $category):
		$brand_categories_colxn[$category->id]=$category->name;
	endforeach;


	return View::make('Attch/edit')->with([
		'brand'=>$brand,
		'brand_categories'=>$brand_categories,
		'brand_categories_colxn'=>$brand_categories_colxn,
		'categories'=>$categories,
		]);
});

Route::post('/brand/create', function()
{
	$categories=array_values(Input::get('categories'));
	$brand=Brand::create(['name'=>Input::get('brand')]);
	$brand ->categories()->attach($categories);
	return Redirect::back();
});

Route::post('/brand/update', function()
{
	$brand_id=Input::get('brand_id');
	$categories=array_values(Input::get('categories'));

	$brand=Brand::find($brand_id);
	$brand->name=Input::get('brand');
	$brand->save();
	$brand->categories()->sync($categories);

	return Redirect::back()->withErrors(['succes'=>'actualizacion :D']);
});




Route::get('/login','LoginController@login');
Route::post('/login','LoginController@do_login');
//amount --- cantidad
//quantity     ----
//price precio
