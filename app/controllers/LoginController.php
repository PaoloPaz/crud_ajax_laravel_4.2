<?php

class LoginController extends BaseController {


  	public function login()
  	{
  		return View::make('Admin/login');
  	}

    public function do_login(){

      $inputs =array(
        "username"=>Input::get('inputEmail'),
        "password"=>Input::get('inputPassword')
      );
      if(Auth::attempt($inputs)){
        return "pass";
      }else{
        return "fail";

      }
    }


    public function logout(){
      Confide::logout();
      return Redirect::to('/');
    }




}
