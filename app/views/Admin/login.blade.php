<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>


    {{HTML::style('asset/css/login/login.css')}}
    {{HTML::script('asset/css/login/login.js')}}
    {{HTML::script('asset/js/jquery-2.1.1.min.js')}}
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </head>
  <body>



        <div class="container" id="loader" >
            <div class="card card-container"  >
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />

                <p id="profile-name" class="profile-name-card"></p>
                <div id="fdk" style="display:none">
                  <a class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                  <span id="msg"></span>
                </div>
                <form class="form-signin" id="login_form" action="{{URL::to('/login')}}" method="POST" >
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Contrseña" required>

                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="sign_in" type="submit">Iniciar Sesión</button>
                </form><!-- /form -->

            </div><!-- /card-container -->
        </div><!-- /container -->

  </body>
  <script type="text/javascript">

  function loader(v){
    if (v=='on'){
      $('#login_form').css({
        opacity :0.2
      });
      $('#loader').show();

    }else{
      $('#login_form').css({
        opacity :1
      });
      $('#loader').hide();
  }
}

    $(document).ready(function(){
      $('#sign_in').on('click',function(){
        var login_form=$('#login_form').serializeArray();
        var url= $(' #login_form').attr('action');
          loader('on');

        $.post(url, login_form, function(data){

          loader('off');
          if (data=="fail") {
            $('#fdk').addClass('alert alert-danger').fadeIn(1000,function(){
                $(this).hide();
            });
            $('#msg').text('Usuario no valido');
          }else{
            $('#fdk').addClass('alert alert-danger').fadeIn(1000,function(){
                $(this).hide();
            });
            $('#msg').text('Felicidades!!!');
          }

        });

      });
    });
  </script>
</html>
