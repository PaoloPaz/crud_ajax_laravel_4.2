<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hiii</title>
    {{HTML::style('asset/css/bootstrap.css')}}

    {{HTML::script('asset/js/bootstrap.js')}}
    {{HTML::script('asset/js/jquery-2.1.1.min.js')}}
  </head>
  <body>
    <h3>Hiii Attach :D</h3>

    <div class="container">
        <div class="row" >
            <div class="col-sm-6" value="<?php echo csrf_token(); ?>" >
              {{Form::open(array('url'=>'brand/create','files'=>true))}}

              <div class="form-group">
                <label for="">Brand</label>
                <input type="text"class="form-control input-sm"name="brand">

              </div>

              <div class="form-group">
                <label for="">Categoria</label>
                <select name="categories[]" class="input-sm">
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                <select>
                <a href="#" class="btn btn-danger btn-xs btn-remove-cat">Remove</a>



              </div>
              <a href="#" class="btn btn-sm btn-info btn-add-cat">Agregar mas categorias</a>
              <button class="btn btn-sm btn-primary">Guardar</button>

              {{Form::close()}}


            </div>
            <div class="col-sm-5">
              <ul>
                @foreach($brands as $brand)
                  <li><a href="{{Route('edit.brand',array($brand->id))}}">{{$brand->id .'-'. $brand->name}}</a></li>

                @endforeach
              </ul>


            </div>

        </div>


    </div>
    <script type="text/javascript">
      $('.btn-add-cat').on('click', function(e){
        e.preventDefault();

        var template= ' <div class="form-group">'+
                      ' <label for="">Categoria</label>'+
                      ' <select name="categories[]" class="input-sm">'+
                      ' @foreach ($categories as $category)'+
                        '<option value="{{$category->id}}">{{$category->name}}</option>'+
                      '@endforeach'+
                      ' <select>'+
                      '<a href="#" class="btn btn-danger btn-xs btn-remove-cat">Remove</a>'+
                      '</div>';

        $(this).before(template);
      });

      $(document).on('click','.btn-remove-cat',function(e){
        e.preventDefault();
        $(this).parent('.form-group').remove();

      });

    </script>






  </body>

</html>
