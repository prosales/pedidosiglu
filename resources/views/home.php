<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pedidos :: IGLU</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="form-validation.css" rel="stylesheet"> -->
  </head>

  <style>
  .sk-cube-grid {
  width: 40px;
  height: 40px;
  margin: 40vh auto;
}

.sk-cube-grid .sk-cube {
  width: 33%;
  height: 33%;
  background-color: #FFF;
  float: left;
  -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
          animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; 
}
.sk-cube-grid .sk-cube1 {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s; }
.sk-cube-grid .sk-cube2 {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s; }
.sk-cube-grid .sk-cube3 {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s; }
.sk-cube-grid .sk-cube4 {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s; }
.sk-cube-grid .sk-cube5 {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s; }
.sk-cube-grid .sk-cube6 {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s; }
.sk-cube-grid .sk-cube7 {
  -webkit-animation-delay: 0s;
          animation-delay: 0s; }
.sk-cube-grid .sk-cube8 {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s; }
.sk-cube-grid .sk-cube9 {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s; }

@-webkit-keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    -webkit-transform: scale3D(1, 1, 1);
            transform: scale3D(1, 1, 1);
  } 35% {
    -webkit-transform: scale3D(0, 0, 1);
            transform: scale3D(0, 0, 1); 
  }
}

@keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    -webkit-transform: scale3D(1, 1, 1);
            transform: scale3D(1, 1, 1);
  } 35% {
    -webkit-transform: scale3D(0, 0, 1);
            transform: scale3D(0, 0, 1);
  } 
}
#loader {
    background: black;
    display: block;
    height: 100%;
    left: 0;
    opacity: .75;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99999
}
.hide {
  display: none !important;
}
  </style>

  <body class="bg-light">
    <div id="loader" class="hide">
        <div class="sk-cube-grid">
          <div class="sk-cube sk-cube1"></div>
          <div class="sk-cube sk-cube2"></div>
          <div class="sk-cube sk-cube3"></div>
          <div class="sk-cube sk-cube4"></div>
          <div class="sk-cube sk-cube5"></div>
          <div class="sk-cube sk-cube6"></div>
          <div class="sk-cube sk-cube7"></div>
          <div class="sk-cube sk-cube8"></div>
          <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Bienvenido, <span id="usuario"></span></h5> -->
      <h5 class="my-0 mr-md-auto font-weight-normal"><img class="mb-4" src="fasenco.png" alt="" width="100" height="40"></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <!-- <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a> -->
      </nav>
      <button class="btn btn-outline-primary" id="btn-logout">Cerrar sesión</button>
    </div>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Solicitar pedido</h2>
        <p class="lead">Realizar tu pedido nunca fue mas fácil, completa el formulario y te estaremos enviando un correo de confirmación de tu pedido.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Tu pedido</span>
            <!-- <span class="badge badge-secondary badge-pill">3</span> -->
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">King</h6>
                <small class="text-muted"></small>
              </div>
              <input type="number" min="0" placeholder="Cantidad" style="padding: 10px; width: 120px;" id="king" value="0">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Imperial</h6>
                <small class="text-muted"></small>
              </div>
              <input type="number" min="0" placeholder="Cantidad" style="padding: 10px; width: 120px;" id="imperial" value="0">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Semi-Matrimonial</h6>
                <small class="text-muted"></small>
              </div>
              <input type="number" min="0" placeholder="Cantidad" style="padding: 10px; width: 120px;" id="semi_matrimonial" value="0">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Matrimonial</h6>
                <small class="text-muted"></small>
              </div>
              <input type="number" min="0" placeholder="Cantidad" style="padding: 10px; width: 120px;" id="matrimonial" value="0">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Queen</h6>
                <small class="text-muted"></small>
              </div>
              <input type="number" min="0" placeholder="Cantidad" style="padding: 10px; width: 120px;" id="queen" value="0">
            </li>
            
            <li class="list-group-item d-flex justify-content-between">
              <span>Total solicitado</span>
              <strong id="total">0</strong>
            </li>
          </ul>

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Información</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Fecha de entrega</label>
                <input type="date" class="form-control" id="deliver_date" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Necesitamos este dato para la entrega.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Correo electrónico <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Este datos nos servirá para enviar la información a tu correo.
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Destino</label>
                <select class="custom-select d-block w-100" id="destination" required="">
                  <option value="">Selecciona</option>
                  <option value="IGLU (El Rancho)">IGLU (El Rancho)</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="San Pedro Sula">San Pedro Sula</option>
                  <option value="Tegucigalpa">Tegucigalpa</option>
                  <option value="Managua">Managua</option>
                </select>
                <div class="invalid-feedback">
                  Debes seleccionar el destino.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="state">Presentación</label>
                <select class="custom-select d-block w-100" id="presentation" required="">
                  <option value="">Selecciona</option>
                  <option value="Kit">Kit</option>
                  <option value="Armado">Armado</option>
                </select>
                <div class="invalid-feedback">
                  Debes seleccionar la presentación.
                </div>
              </div>

            </div>

            <hr class="mb-4">

            <button class="btn btn-primary btn-lg btn-block" id="btn-enviar">Enviar pedido</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <!-- <p class="mb-1">© 2018 Todos los derechos reservados.</p> -->
        <!-- <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul> -->
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        
        if(!localStorage.usuario) {
          window.location.href = "/";
        }

        $('#usuario').text(localStorage.usuario);

        $('#btn-logout').on('click', function(e){
          e.preventDefault();

          localStorage.usuario = "";
          window.location.href = "/";
        });

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);

        $('#king').on('change', function(e){
            e.preventDefault();
            var total = parseInt($('#total').text()) + parseInt($(this).val());
            $('#total').text(total);
        });
        $('#imperial').on('change', function(e){
            e.preventDefault();
            var total = parseInt($('#total').text()) + parseInt($(this).val());
            $('#total').text(total);
        });
        $('#semi_matrimonial').on('change', function(e){
            e.preventDefault();
            var total = parseInt($('#total').text()) + parseInt($(this).val());
            $('#total').text(total);
        });
        $('#matrimonial').on('change', function(e){
            e.preventDefault();
            var total = parseInt($('#total').text()) + parseInt($(this).val());
            $('#total').text(total);
        });
        $('#queen').on('change', function(e){
            e.preventDefault();
            var total = parseInt($('#total').text()) + parseInt($(this).val());
            $('#total').text(total);
        });

        $('#btn-enviar').on('click', function(e){
          
            e.preventDefault();
            $('#loader').removeClass('hide');
            var data = {
              deliver_date: $('#deliver_date').val(),
              email: $('#email').val(),
              destination: $('#destination').val(),
              presentation: $('#presentation').val(),
              king: $('#king').val(),
              imperial: $('#imperial').val(),
              semi_matrimonial: $('#semi_matrimonial').val(),
              matrimonial: $('#matrimonial').val(),
              queen: $('#queen').val(),
              total: parseInt($('#total').text())
            };
            console.log(data);
            $.ajax({
              type: 'POST',
              url: '/api/create',
              data: data,
              dataType: 'json',
              success: function(data) {
                if(data.result) {
                  alert(data.message);
                  $('#loader').addClass('hide');
                  location.reload();
                }
                else {
                  alert(data.message);
                  $('#loader').addClass('hide');
                }
              },
              error: function(){
                $('#loader').addClass('hide');
              }
            });
          
        });
      })();
    </script>
  

</body></html>