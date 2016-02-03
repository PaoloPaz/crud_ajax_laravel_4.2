<?php

class BrandController extends BaseController {


  public function getAll()
  {
    $categories=Category::all();
  	$brands=Brand::all();
  	return View::make('Attch/index')->with('categories', $categories)->with('brands',$brands);
  }

  public function getEdit($brand_id)
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
  }

  public function postCreate()
  {
    $categories=array_values(Input::get('categories'));
  	$brand=Brand::create(['name'=>Input::get('brand')]);
  	$brand ->categories()->attach($categories);
  	return Redirect::back();
  }

  public function postUpdate()
  {
    $brand_id=Input::get('brand_id');
  	$categories=array_values(Input::get('categories'));

  	$brand=Brand::find($brand_id);
  	$brand->name=Input::get('brand');
  	$brand->save();
  	$brand->categories()->sync($categories);

  	return Redirect::back()->withErrors(['succes'=>'actualizacion :D']);
  }

}
