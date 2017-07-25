<?php
session_start();
include('../../assets/php/conexion.php');
$usuario = $_SESSION['ide'];
?>
<div class="tarjetaUno carritoFinal">
  <?php
  $tabla = " carrito INNER JOIN productos ON productos.id_producto = carrito.id_producto";
  $condicion = " WHERE id_usuario = ".$usuario;
  $resultado = $conexionDb->buscar($tabla,$condicion);
  $contador = 0;
  while($fila = $resultado -> fetch_assoc()){
    $contador++;
  }
  if($contador > 0){
    $resultado = $conexionDb->buscar($tabla,$condicion);
  ?>
  <table class="ui celled padded table tablaCarrito">
    <thead>
      <tr><th></th>
        <th>Precio</th>
        <th>Cantidad</th>
      <th>Producto</th>
      <th>Total</th>
    </tr></thead>
    <tbody id="cuerpoTablaCarrito">
        <?php

        while($fila = $resultado -> fetch_assoc()){
        ?>
        <tr>
          <td class="center aligned">
            <button class="ui icon button botonCarga" onclick="borrarFila(<?php echo $fila['id_producto'] ?>,<?php echo $fila['id_usuario']?>)">
              <i class="remove icon"></i>
            </button>
          </td>
          <td class="precioTabla">$<?php echo number_format($fila['precio_producto'],2,'.',','); ?></td>

          <td contenteditable="true" onBlur="saveToDatabase(this,'cantidad','<?php echo $fila['id_producto'] ?>',<?php echo $fila['id_usuario'] ?>)"><?php echo $fila['cantidad']; ?></td>
          <td><?php echo $fila['nombre_producto']; ?></td>
          <td class="precioTabla">$<?php echo number_format($fila['cantidad'] * $fila['precio_producto'], 2, '.', ',');?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    <tfoot class="full-width">
      <tr>
        <th colspan="5">
          <div class="ui right floated vertical animated button" tabindex="0" id="comprar">
            <div class="hidden content">Comprar</div>
            <div class="visible content">
              <i class="shop icon"></i>
            </div>
          </div>
        </th>
      </tr>
    </tfoot>
  </table>
  <?php
    }else{
      ?>
      <h2 class="ui icon header">
        <i class="hand spock icon"></i>
        <div class="content">
            Carrito vacio
          <div class="sub header">No has agregado nada a tu carrito :c</div>
        </div>
      </h2>
  <?php
    }
  ?>

</div>
<script type="text/javascript">

  function saveToDatabase(editableObj,column,id_producto,id_user) {
    $('.botonCarga').toggleClass('loading');
    $.ajax({
      url: "php/carritoUpdate.php",
      type: "POST",
      data:'column='+column+'&editval='+editableObj.innerHTML+'&id_usuario='+id_user+'&id_producto='+id_producto,
      success: function(data){
        $('#content').load('secciones/compras.php');
      }
     });
  }
  function borrarFila(id_producto,id_usuario){
    $.ajax({
      url: "php/carritoDelete.php",
      type: "POST",
      data:'&id_usuario='+id_usuario+'&id_producto='+id_producto,
      success: function(data){
        $('#content').load('secciones/compras.php');
      }
     });
  }
  $('#comprar').on('click',function(){
    $('#content').load('pagos/formasDePagos.php');
  });
</script>
