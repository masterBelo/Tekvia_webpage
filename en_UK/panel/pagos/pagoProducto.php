<?php
  session_start();
  include('../../assets/php/conexion.php');
  $id_usuario = $_POST['idU'];
  $id_producto = $_POST['idP'];


  //consulta de la cantidad de productos
    $tabla = "carrito";
    $condicion = " WHERE id_producto = ".$id_producto." AND id_usuario = ".$id_usuario;

    $res = $conexionDb->buscar($tabla,$condicion);
    while($fila = $res -> fetch_assoc()){
      $cantidad = $fila['cantidad'];
    }
  //consulta del precio del producto y calculo del total
    $tabla = "productos";
    $condicion = " WHERE id_producto = ".$id_producto;
    $res = $conexionDb->buscar($tabla,$condicion);
    while($fila = $res-> fetch_assoc()){
      $precio = $fila['precio_producto'];
    }
    $total = $precio * $cantidad;
    //chequeo de creditos del usuario
    $tabla = "creditos_usuario";
    $condicion = " WHERE id_usuario = ".$id_usuario;
    $res = $conexionDb->buscar($tabla,$condicion);
    while($fila = $res-> fetch_assoc()){
      $creditos = $fila['credito_usuario'];
    }
    //Procedimiento de compra con creditos
    if($creditos >= $total){
      $tabla = "producto_usuario";
      $campos = "id_usuario,id_producto,entrega_producto,cantidad";
      $datos = $id_usuario." , ".$id_producto." , 0 , ".$cantidad;
      $res = $conexionDb->insertar($tabla,$campos,$datos);

      $tabla = "carrito";
      $condicion = "id_usuario = ".$id_usuario." AND id_producto = ".$id_producto;
      $res = $conexionDb->eliminar($tabla,$condicion);

      $tabla = "creditos_usuario";
      $nuevoCreditos = $creditos - $total;
      $campos = "credito_usuario = ".$nuevoCreditos;
      $condicion = " WHERE id_usuario = ".$id_usuario;
      $res = $conexionDb->modificar($tabla,$campos,$condicion);

      if($res == "true"){
        echo "true";
      }else{
        echo "false";
      }

    }else{
      echo "false";
    }



 ?>
