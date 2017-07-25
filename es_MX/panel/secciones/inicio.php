<?php
session_start();
include('../../assets/php/conexion.php');
$usuario = $_SESSION['ide'];
?>
<div class="tarjetaTres">
  <div class="headTarjeta">
    <span>Servicios</span>
    <img src="../panel/resources/servicios.png" alt="">
  </div>
  <div class="contenidoTarjeta serviciosContenido">
    <table>
      <tr>
        <td><img src="resources/dominios.png" alt=""></td>
        <td>Dominios</td>
        <td><button type="button" name="button">Acceder</button></td>
      </tr>
      <tr>
        <td><img src="resources/hosting.png" alt=""></td>
        <td>Hosting</td>
        <td><button type="button" name="button">Acceder</button></td>
      </tr>
      <tr>
        <td><img src="resources/otros.png" alt=""></td>
        <td>Otros servicios</td>
        <td><button type="button" name="button">Acceder</button></td>
      </tr>
    </table>
  </div>
</div>
<div class="tarjetaDosTres">
  <div class="headTarjeta">
    <span>Proximos vencimientos</span>
    <img src="../panel/resources/vencimientos.png" alt="">
  </div>
  <div class="contenidoTarjeta vencimientosContenido">
    <table id="tablaVencimientos">
      <thead>
        <tr>
          <th></th>
          <th>Total</th>
          <th>Dominio/IP</th>
          <th>Tipo</th>
          <th>Fecha de corte</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sentencia = "SELECT ip_hosting as dato1,user_hosting as dato2 , pass_hosting as dato3, tipo_servicio,vencimiento_servicio,precio,id_servicio,tipo_servicio  FROM (SELECT * FROM (SELECT * FROM hostings inner join servicios on servicios.id_servicio = hostings.id_hosting where servicios.id_usuario = $usuario and servicios.tipo_servicio = 1)as tabla1 UNION (SELECT * FROM dominios inner join servicios on servicios.id_servicio = dominios.id_dominio where servicios.id_usuario = $usuario and servicios.tipo_servicio = 2))as tablageneral ORDER BY vencimiento_servicio";
          $resultado = $conexionDb->personalizada($sentencia);
          while($fila = $resultado -> fetch_assoc()){
        ?>
        <tr>
          <td><button type="button" name="button" onclick="renovarServicio(<?php echo $fila['id_servicio']?>,<?php echo $fila['tipo_servicio']?>);">Renovar</button></td>
          <td class="precioTabla"><?php echo $fila['precio']; ?></td>
          <td><?php echo $fila['dato1'] ?></td>
          <td><?php if($fila['tipo_servicio']==1){ echo "Hosting"; }else{ echo "Dominio"; } ?></td>
          <td><?php echo $fila['vencimiento_servicio'] ?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<div class="tarjetaDos">
  <div class="headTarjeta">
    <span>Compras pendientes</span>
    <img src="../panel/resources/compras.png" alt="">
  </div>
  <div class="contenidoTarjeta comprasContenido">
    <table id="tablaVencimientos">
      <thead>
        <tr>
          <th></th>
          <th>Total</th>
          <th>Cantidad</th>
          <th>Producto</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $tabla = " carrito INNER JOIN productos ON productos.id_producto = carrito.id_producto";
        $condicion = " WHERE id_usuario = ".$usuario;
        $resultado = $conexionDb->buscar($tabla,$condicion);
        $contador = 0;
        while($fila = $resultado -> fetch_assoc()){
          $contador++;
        ?>
        <tr>
          <td><button type="button" name="button" onclick="pagarProducto(<?php echo $usuario; ?>,<?php echo $fila['id_producto']; ?>)">Pagar</button></td>
          <td class="precioTabla"><?php echo $fila['precio_producto']; ?></td>
          <td><?php echo $fila['cantidad']; ?></td>
          <td><?php echo $fila['nombre_producto']; ?></td>
        </tr>
        <?php
        }
        if($contador<1){
          echo "<script>$('.contador').addClass('hide');</script>";
        }else{
          echo "<script>$('.contador').html('$contador');</script>";
        }

        ?>
      </tbody>
    </table>
  </div>
</div>
<div class="tarjetaDos">
  <div class="headTarjeta">
    <span>  Facturacion y pagos</span>
    <img src="../panel/resources/pagos.png" alt="">
  </div>
  <div class="contenidoTarjeta facturacionContenido">
    <div class="botonesFacturacion">
      <button type="button" name="button">Reportar Pago</button>
      <button type="button" name="button">Historial de pagos</button>
      <button type="button" name="button">Facturas</button>
    </div>
    <span class="tituloFacturacion">SALDO EN CUENTA</span>
    <?php
      $resultado = $conexionDb->buscar("creditos_usuario"," WHERE id_usuario = ".$usuario);
    ?>
    <span class="precioFacturacion"><?php
      while($fila = $resultado -> fetch_assoc()){

        $total = $fila['credito_usuario'];
        $decimales = explode(".",$total);
        echo "$".$decimales[0].".<sup>".$decimales[1]."</sup>";
      }

    ?></span>
    <span class="infoFacturacion">VALIDO UNICAMENTE EN COMPRAS DENTRO DEL PORTAL</span>
  </div>
</div>
<div class="tarjetaDosTres">
  <div class="headTarjeta">
    <span>  Proyectos en ejecucion</span>
    <img src="../panel/resources/proyectos.png" alt="">
  </div>
  <div class="contenidoTarjeta proyectosContenido">
    <table id="tablaProyectos">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th>Ultima Actualizacion</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $resultado = $conexionDb->buscar("proyecto_usuario","INNER JOIN proyectos on proyecto_usuario.id_proyecto = proyectos.id_proyecto WHERE proyecto_usuario.id_usuario = ".$usuario);
          while($fila = $resultado -> fetch_assoc()){
        ?>
        <tr>
          <td><button type="button" name="button">Ver ahora</button></td>
          <td class="precioTabla">$<?php echo $fila['precio_proyecto']?></td>
          <td><?php echo $fila['descripcion_proyecto']?></td>
          <td><?php echo $fila['actualizacion_proyecto']?></td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
</div>
<div class="tarjetaTres">
  <div class="headTarjeta">
    <span>  Panel de ayuda</span>
    <img src="../panel/resources/soporte.png" alt="">
  </div>
  <div class="contenidoTarjeta soporteContenido">
    <div class="botonesSoporte">
      <button type="button" name="button">Ver respuestas</button>
      <button type="button" name="button">Nueva consulta</button>
      <button type="button" name="button">Chat online</button>
    </div>
    <span>CHATO ONLINE DISPONIBLE DE 9AM A 6PM HORARIO DE LA CIUDAD
DE MEXICO CONSULTAS 24HRS 365 DIAS DEL AÑO 7 DIAS DE LA SEMANA</span>
  </div>
</div>
