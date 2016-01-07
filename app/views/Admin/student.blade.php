@extends('layout.default')
@section('subtitle')
Estudiante
@stop

@section('content')

<form>
<div class="form-group">
  <label for="exampleInputEmail1">Nombre de Estudiante</label>
  <input type="email" class="form-control" id="studentname" placeholder="Introducir Nombre">
</div>
<div  class="form-group">
  <label for="exampleInputPassword1">Genero</label>
  <select name ="gender" id="gender" class="form-control">
      <option value="">Selecione Genero</option>
      <option value="0">Masculino</option>
      <option value="1">Femenino</option>
  </select>
</div>
<div class="form-group">
  <label for="exampleInputEmail1">telefono</label>
  <input type="email" class="form-control" id="phone" placeholder="Introducir el teléfono">
</div>

<button type="button" class="btn btn-default saverecord">Guardar</button>
</form>
<input type="hidden" id="id">
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Gemero</th>
            <th>Telefono</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody  class="displayrecord">

    </tbody>
</table>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(function(){
  displaydata();

  $("body").delegate(".edit","click",function(){
  //$("body").On('click','edit',function(){
    var id =$(this).data('id');
    $.ajax({
      url  : "<?= URL::to('editrow')?>",
      type : "POST",
      async: false,
      data : {
        'id' : id
      },
      success:function(e)
      {
        alert(e);
        //('#id').val(e.id);

      }

    });
  });

  $('.saverecord').click(function(){
    var studentname=$('#studentname').val();
    var gender=$('#gender').val();
    var phone =$('#phone').val();
    $.ajax({
      url  : "<?= URL::to('save')?>",
      type : "POST",
      async: false,
      data : {
        'studentname' :studentname,
        'gender'      :gender,
        'phone'       :phone
      },
      success:function(re)
      {
        if(re==0){
          alert('guardado ...!!!');
          displaydata();
        }
        else{
          alert('error ...!!!');
        }
      }
    });
  });
});

function displaydata(){
  $.ajax({
    url :"<?= URL::to('showdata')?>",
    type:"POST",
    async: false,
    data :{
      'showrecord':1

    },
    success:function(s)
    {
      $('.displayrecord').html(s);
    }
  });
}
</script>
@stop
