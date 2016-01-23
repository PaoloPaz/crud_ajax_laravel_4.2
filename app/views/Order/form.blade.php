<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel CRUD</title>
	{{HTML::style('asset/css/bootstrap.css')}}
	{{HTML::style('asset/css/bootstrap.css.map')}}
	{{HTML::style('asset/css/bootstrap.min.css')}}

	{{HTML::style('asset/css/AdminLTE.css')}}
	{{HTML::style('asset/css/AdminLTE.min.css')}}
	{{HTML::style('asset/css/skins/_all-skins.min.css')}}
  {{HTML::script('asset/js/js.js')}}
	{{HTML::script('asset/js/bootstrap.js')}}
	{{HTML::script('asset/js/jquery-2.1.1.min.js')}}

</head>
<p style="color:red;">{{$errors->first('order_name')}}</p>
<p style="color:red;">{{$errors->first('date_order')}}</p>
<p style="color:red;">{{$errors->first('address')}}</p>
<body>
	<h1>Registrar</h1>
  <a href="<?=URL::to('/')?>">Regresar</a>
	<!-- form start -->

	            <form class="form-horizontal" action="<?=URL::to('/ordersave') ?>" method="post">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Order_name</label>

	                  <div class="col-sm-4">
	                    <input type="text" class="form-control" name="order_name" placeholder="">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">DateOrder</label>

	                  <div class="col-sm-4">
	                    <input type="text" class="form-control" name="date_order" placeholder="">
	                  </div>
	                </div>

									<div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Address</label>

	                  <div class="col-sm-4">
	                    <input type="text" class="form-control" name="address" placeholder="">
	                  </div>
	                </div>

	              </div>
	              <!-- /.box-body -->
	              <div class="box-footer">

	                <button type="submit" class="btn btn-info ">Guardar</button>
	              </div>
	              <!-- /.box-footer -->


	          <!-- /.box -->

              <table class="table">
                <thead>
                  <th class="th">No </th>
                  <th class="th">ProductID </th>
                  <th class="th">ProductName</th>
                  <th class="th">Quantity </th>
                  <th class="th">Price </th>
                  <th class="th">Amount </th>
                  <th class="th"><a haref="#" class="addrow">Agregar</a></th>
                </thead>
                <tbody class=tbody>
                  <tr class="tr">
                    <td>1</td>
                    <td><input type="text" class="form-control" name="product_id[]" placeholder=""></td>
                    <td><input type="text" class="form-control" name="product_name[]" placeholder=""></td>
                    <td><input type="text" class="form-control" name="quantity[]" placeholder=""></td>
                    <td><input type="text" class="form-control" name="price[]" placeholder=""></td>
                    <td><input type="text" class="form-control" name="amount[]" placeholder=""></td>
                    <td><a href="#" class="delete">Borrar </a></td>
                  </tr>
                </tbody>
              </table>
							</form>
</body>
</html>

<script type="text/javascript">

  $(function(){
//    alert(0);
    $('.addrow').click(function(){
				var l=($('.tbody tr').length-0)+1;
        var tr ='<tr class="tr">' +
        '<td>'+l +'</td>' +
        	'<td><input type="text" class="form-control" name="product_id[]" placeholder=""></td>'+
        	'<td><input type="text" class="form-control" name="product_name[]" placeholder=""></td>'+
        	'<td><input type="text" class="form-control" name="quantity[]" placeholder=""></td>'+
          '<td><input type="text" class="form-control" name="price[]" placeholder=""></td>'+
        	'<td><input type="text" class="form-control" name="amount[]" placeholder=""></td>'+
          '<td><a href="#" class="delete">Borrar </a></td>'+
      '</tr>';
      $('.tbody').append(tr);

		});
		$( document ).on( "click", ".delete", function() {

			//console.log("pagina cargada");
			$(this).parent().parent().remove();
		});

  });
</script>
