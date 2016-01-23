<?php

class AttchController extends BaseController {


  	public function index()
  	{
  		return View::make('Attch/index');
  	}

    //esto no es parte de este controller 



    public function save(){
      $validation= array(
        'order_name'=>'required',
        'date_order'=>'required',
        'address'=>'required'
      );
      $vd=Validator::make(Input::all(),$validation);
      if ($vd->fails()){
        return Redirect::to('Orderform')->withErrors($vd);
      }else {
        $postorder=Input::all();
        $data=array(
          'order_name'=>$postorder['order_name'],
          'date_order'=>$postorder['date_order'],
          'address'=>$postorder['address'],
        );
        $id=DB::table('re_order')->insertGetId($data);
        for($i=0;$i < count($postorder['product_id']);$i++)
        {
          $data_detail =array(
            'order_id'=>$id,
            'product_id'=>$postorder['product_id'][$i],
            'product_name'=>$postorder['product_name'][$i],
            'quantity'=>$postorder['quantity'][$i],
            'price'=>$postorder['price'][$i],
            'amount'=>$postorder['amount'][$i]
          );
          DB::table('re_order_detail')->insert($data_detail);
        }
        return Redirect::to('/Orderindex');
      }
    }


    public function update(){
      $validation= array(
        'order_name'=>'required',
        'date_order'=>'required',
        'address'=>'required'
      );
      $vd=Validator::make(Input::all(),$validation);
      if ($vd->fails()){
        return Redirect::to('Orderform')->withErrors($vd);
      }else {
        $postorder=Input::all();
        $data=array(
          'order_name'=>$postorder['order_name'],
          'date_order'=>$postorder['date_order'],
          'address'=>$postorder['address'],
        );
        $id=$postorder['id'];
        DB::table('re_order')->where('id',$id)->update($data);
        DB::table('re_order_detail')->where('id',$id)->delete();
        for($i=0;$i < count($postorder['product_id']);$i++)
        {
          $data_detail =array(
            'order_id'=>$id,
            'product_id'=>$postorder['product_id'][$i],
            'product_name'=>$postorder['product_name'][$i],
            'quantity'=>$postorder['quantity'][$i],
            'price'=>$postorder['price'][$i],
            'amount'=>$postorder['amount'][$i]
          );
          DB::table('re_order_detail')->insert($data_detail);
        }
        return Redirect::to('/Orderindex');
      }
    }


}
