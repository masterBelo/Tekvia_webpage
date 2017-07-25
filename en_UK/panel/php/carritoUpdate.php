<?php
include('../../assets/php/conexion.php');
$sentencia = "UPDATE carrito set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id_usuario=".$_POST["id_usuario"]." AND id_producto = ".$_POST["id_producto"];
$conexionDb->personalizada($sentencia);
