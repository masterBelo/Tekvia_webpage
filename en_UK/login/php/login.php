<?php
    include('../../assets/php/conexion.php');
    session_start();
    $usuario = $_POST['usuario'];
    $password = $_POST['contrasenia'];
    $tabla = "users";
    $condiciones = "WHERE usuario='$usuario' AND contrasenia ='$password'";
    $consulta = $conexionDb->buscar($tabla,$condiciones);
    $num_row = mysqli_num_rows($consulta);
    $row=mysqli_fetch_array($consulta);
    if( $num_row >=1 ) {
      echo 'true';
      $_SESSION['ide']=$row['id'];
      $_SESSION['nombre']=$row['nombre'];
    }else{
      echo 'false';
    }

?>
