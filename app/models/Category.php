<?php

  class Category extends Eloquent {


	   protected $fillable = ['name'];

     public function brands(){

       return $this->belongsToMany('Brand','brands_categories');
     }

   }
?>
