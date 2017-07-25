<?php
  session_start();
  include('../../assets/php/conexion.php');
  $id_servicio = $_POST['idS'];
  $tipo_servicio = $_POST['tipoS'];


  //consulta del precio del precio del producto
  if($tipo_servicio == 1){
    $tabla = "hostings";
    $condicion = " WHERE id_hosting = ".$id_servicio;
  }else{
    $tabla = "dominios";
    $condicion = " WHERE id_dominio = ".$id_servicio;
  }

  $res = $conexionDb->buscar($tabla,$condicion);
  while($fila = $res -> fetch_assoc()){
    $precio = $fila['precio'];
  }








  //Procedimiento de compra
  $condicion = "WHERE id_usuario = ".$_SESSION['ide'];
  $resultado = $conexionDb->buscar("creditos_usuario",$condicion);
  while($fila = $resultado -> fetch_assoc()){
    $total = $fila['credito_usuario'];
    if($tipo_servicio==1){
      if($total > $precio){


        $nuevoTotal = $total - $precio;
        $campos = "credito_usuario = ".$nuevoTotal;

        $conexionDb->modificar("creditos_usuario", $campos ,$condicion);
        $datos = " `vencimiento_servicio` = DATE_ADD( `vencimiento_servicio` , INTERVAL 30 DAY )";

        $condicion = " WHERE `id_servicio` = ".$id_servicio." and `id_usuario` =".$_SESSION['ide']." and `tipo_servicio` = 1";
        $respuesta = $conexionDb->modificar("servicios", $datos , $condicion);
        echo $respuesta;
      }else{

        echo "false";
      }
    }
    if($tipo_servicio==2){
      if($total>$precio){
        $nuevoTotal = $total - $precio;
        $campos = "credito_usuario = ".$nuevoTotal;

        $conexionDb->modificar("creditos_usuario", $campos ,$condicion);
        $datos = " `vencimiento_servicio` = DATE_ADD( `vencimiento_servicio` , INTERVAL 30 DAY )";

        $condicion = " WHERE `id_servicio` = ".$id_servicio." and `id_usuario` =".$_SESSION['ide']." and `tipo_servicio` = 2";
        $respuesta = $conexionDb->modificar("servicios", $datos , $condicion);
        echo $respuesta;

      }else{
        echo "false";
      }
    }
  }



























 ?>
