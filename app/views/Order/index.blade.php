<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel CRUD</title>
	{{HTML::style('asset/css/bootstrap.css')}}
	{{HTML::style('asset/css/boostrap.css.map')}}
	{{HTML::style('asset/css/boostrap.min.css')}}
	{{HTML::style('asset/css/datatables/dataTables.bootstrap.css')}}
	{{HTML::style('asset/css/AdminLTE.css')}}
	{{HTML::style('asset/css/AdminLTE.min.css')}}
	{{HTML::style('asset/css/skins/_all-skins.min.css')}}

</head>
<body>
	<h1>CRUD en Laravel 4</h1>

<thead>
  <th>ID</th>
  <th>Nombre del Pedido</th>
  <th>detalle del pedido</th>
  <th>Direccion</th>

</thead>


					<div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Order Name</th>
                  <th>DateOrder</th>
                  <th>Address</th>
									<th>Accion</th>
                </tr>
                </thead>
								<a href="<?=URL::to('/Orderform')?>">Agregar un nuevo Pedido</a>
                <tbody>
                <?php
									$row_order=DB::table('re_order')->get();
									foreach ($row_order as $row) {

								?>
								<tr>
									<td><?=$row->id?></td>
									<td><?=$row->order_name?></td>
		 							<td><?=$row->date_order?></td>
									<td><?=$row->address?></td>
									<td>
										<a href="<?= URL::to('EditRow',array($row->id))?>">editar</a>
										<a href="<?= URL::to('DeleteRow',array($row->id))?>">Eliminar</a>
									</td>
								</tr>
								<?php  } ?>
              </table>
            </div>




</body>
</html>
