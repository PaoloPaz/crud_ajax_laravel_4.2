<?php

class StudentController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('Admin/student');
	}
	public function saverecord()
	{
		$poststudent =Input::all();
		$data=array(
								'student_name'=>$poststudent['studentname'],
								'gender'			=>$poststudent['gender'],
								'phone'				=>$poststudent['phone']
								);
		$check =DB::table('student')->insert($data);
		if($check>0){
			return 0;
		}
		else{
			return 1;
		}
	}

	public function edit()
	{
		$postedit = Input::all();
		$id 			= $postedit['id'];
		$data			= DB::table('student')->where('id',$id)->first();

		header("Content-type :text/x-json");
		echo json_encode($data);
		exit();
	}

	public function display()
	{
		$display="";
		$data=DB::table('student')->get();
		foreach ($data as $key) {
		$gender=$key->gender;
		if ($gender==0) {
			$gender="Masculino";
		}
		else {
			$gender="Femenino";
		}
		$display .="<tr>
								<td>$key->id</td>
								<td>$key->student_name</td>
								<td>$gender</td>
								<td>$key->phone</td>
								<td><a data-id='$key->id' href='#' class='edit'>Editar</a> |<a data-id='$key->id' href='#' class='delete'>Eliminar</a> </td>
								</tr>";

		}
		return $display;
	}

}
