<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
    html,
    body {
    height: 100%;
    }

    body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }

    .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
    }
    .form-signin .checkbox {
    font-weight: 400;
    }
    .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
    }
    .form-signin .form-control:focus {
    z-index: 2;
    }
    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
    </style>
  </head>

  <body class="text-center">
    <div class="form-signin">
      <img class="mb-4" src="fasenco.png" alt="" width="200" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Ingresa tus datos</h1>
      <label for="inputEmail" class="sr-only">Correo electrónico</label>
      <input type="email" id="email" class="form-control" placeholder="Email address" required="" autofocus="" >
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="password" class="form-control" placeholder="Password" required="" >
      <div class="checkbox mb-3">
        <label>
          <!-- <input type="checkbox" value="remember-me"> Remember me -->
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" id="btn-login">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">© Todos los derechos reservados</p>
    </div>
  

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
(function() {
  'use strict';

  $('#btn-login').on('click', function(e){
    e.preventDefault();
    
    var data = {
      email: $('#email').val(),
      password: $('#password').val()
    }
    $.ajax({
        type: 'POST',
        url: '/api/login',
        data: data,
        dataType: 'json',
        success: function(data) {
          if(data.result) {
            alert(data.message);
            localStorage.usuario = data.records.email;
            window.location.href = 'home';
          }
          else {
            alert(data.message);
          }
        },
        error: function(){
          
        }
      });
  });

})();
</script>
</html>