<?php
include('../../assets/php/conexion.php');
$condicion = "id_usuario=".$_POST["id_usuario"]." AND id_producto = ".$_POST["id_producto"];
$conexionDb->eliminar("carrito",$condicion);
?>
