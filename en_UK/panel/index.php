<?php
  session_start();
  include('../assets/php/conexion.php');
  if(isset($_SESSION['ide'])){
    $usuario = $_SESSION['nombre'];
  }else{
    header('Location: ../login');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#3661A1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" type="text/css" href="../assets/semantic/semantic.min.css">
    <link rel="stylesheet" href="../assets/css/estilosPanel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/sweetalert2/sweetalert2.css">


  </head>
  <body>
    <nav id="navBar">
      <div class="degradadoNavBarOtro">

      </div>
      <div class="degradadoNavBar">
        <div id="logo">
        </div>
        <div id="user-info">
          <div class="imagenPerfil">
            <img src="resources/perfil.jpg" alt="">
          </div>
          <div class="nombrePerfil">
            <span>Bienvenido</span>
            <span><?php echo $usuario; ?></span>

          </div>
        </div>
        <ul id="navegacionNavBar">
          <li class="activo" id="liInicio"><a href="#">Inicio</a></li>
          <li class="" id="liServicios"><a href="#">Servicios</a></li>
          <li class="" id="liPagos"><a href="#">Pagos y facturas</a></li>
          <li class="" id="liSoporte"><a href="#">Soporte</a></li>
          <li class="" id="liCompras"><a href="#">Mis compras</a></li>
        </ul>
      </div>
    </nav>
    <article id="cuerpo" class="">
      <div class="cabeceraCuerpo">
        <div class="ui text menu iconosCabecera">
          <a class="ui dropdown item iconoUno">
            <i class="setting icon"></i>
            <div class="menu">
              <div class="item" id="cuentaBoton">
                <i class="user icon"></i>
                Cuenta
              </div>
              <div class="item">
                <i class="sign out icon"></i>
                Salir
              </div>
            </div>
          </a>
          <a class="item iconoDos">
            <i class="shop icon"></i>
            <div class="floating ui red mini circular label">22</div>
          </a>
        </div>




        <div class="botonMenu" id="botonMenu">
          <div class="contenedorLineas">
            <div class="linea1" id="linea1">
            </div>
            <div class="linea2" id="linea2">
            </div>
            <div class="linea3" id="linea3">
            </div>
          </div>
        </div>
      </div>
      <div class="contenido" id="content">



      </div>
    </article>
  </body>
  <script type="text/javascript" src="../assets/javascripts/jquery.min.js"></script>
  <script src="../assets/semantic/semantic.min.js"></script>
  <script type="text/javascript" src="../assets/javascripts/openpay.v1.js"></script>
  <script type="text/javascript" src="../assets/javascripts/openpay-data.v1.js"></script>
  <script type="text/javascript" src="../assets/sweetalert2/sweetalert2.js"></script>
  <script type="text/javascript" src="../assets/javascripts/animacionesPanel.js"></script>
  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
  </script>

</html>
