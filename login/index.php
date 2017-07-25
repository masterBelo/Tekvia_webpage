<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require('../assets/Facebook/autoload.php' );
include('php/fb-connect.php');
$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://c0260330.ferozo.com/TekviaV2/login/php/fb-callback.php', $permissions);
if(isset($_REQUEST['adv'])){
$adv = ($_REQUEST['adv']);
}
?>
<html>
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilosLogin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='shadowbox/shadowbox.css' rel='stylesheet' type='text/css'/>
      <script src='shadowbox/shadowbox.js' type='text/javascript'></script>
<script type='text/javascript'>
Shadowbox.init({
overlayColor: "#000",
overlayOpacity: "0.6",
});
</script>
  </head>
  <body>
    <div class="content">
      <div class="formContent">
        <form class="formLogin" id=formLogin action="#" method="post">
        <div class="seccion">
          <div class="circuloTexto">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <span class="titulo">Inicia Ahora</span>
          <span class="subtitulo">Ingresa tus datos</span>
        </div>
        <div class="seccion">

            <input type="username" id="usuario" class="textoLogin" name="usuario"  placeholder="Usuario" required>
            <input type="password" id="contrasenia" class="textoLogin" name="contrasenia"  placeholder="Contraseña" required>
            <div class="recordarSeccion">
              <div class="columnaSeccion a">
                <input type="checkbox"  checked="checked" value="0">Recordar
              </div>
              <div class="columnaSeccion b">
                <a rel="shadowbox;width:500;height:460" title="Recuperar contraseña" href="login_password_recover.html">¿Olvidaste tu contraseña?</a>
              </div>
            </div>

        </div>
        <div class="seccion">
          <button type="submit" name="button" id="botonLogin">Login</button>

          <span class="textoBotones">O inicia con</span>
          <?php echo '<a class="seccionFacebook" href="' . htmlspecialchars($loginUrl) . '">';?><div class="botonFacebook">Facebook</div></a>
          <span class="textoBotones">¿Aun no tienes cuenta?</span>
          <a rel="shadowbox;width:500;height:460" title="Crear cuenta" href="login_registration_advanced.html" class="seccionRegistro">
            <div class="botonRegistrate">
              Registrate
            </div>
          </a>
          <span class="condiciones">
            Al iniciar sesion, aceptarás los <a href="#">Terminos y Condiciones</a> del Uso del Servicio y la Política de <a href="#"> Protección de Datos</a> de tekvia.com.mx
          </span>
        </div>
        </form>
      </div>
    </div>
    <div id="snakbarError1">Completa todos los datos</div>
    <div id="snakbarError2">Tu correo o contraseña son incorrectos</div>
    <div class="loadImage" id="loadImage">
      <span>Cargando..</span>
    </div>
    <?php
    if(isset($_REQUEST['adv'])){
    if($adv==5){
    echo "<div class='modal'>";
    echo "<div class='ventana'>";
    echo "<h3>Inicia sesión y vuelve a intentarlo</h3>";
    echo "<span class='cerrar'>x</span>";
    echo "</div></div>";
    }
    }
        ?>
  </body>
  <script type="text/javascript" src="../assets/javascripts/jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="../assets/javascripts/loginproccesscript.js"></script>
  <script>
   $(document).ready(function(){
   $(".modal").fadeIn();
   $(".cerrar").click(function(){
   $(".modal").fadeOut(300); }); });
                    </script>
</html>
