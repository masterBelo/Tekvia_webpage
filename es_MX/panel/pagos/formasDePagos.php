<?php
session_start();
include('../../assets/php/conexion.php');
$usuario = $_SESSION['ide'];
$totalFinal = 0;
?>
    <script type="text/javascript" src="../assets/javascripts/pagoTarjeta.js"></script>
    <div class="pagoProducto">
      <div class="productosCarrito">
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
                $totalFinal += $fila['cantidad'] * $fila['precio_producto'];
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
      <?php echo $totalFinal; ?>
      <div class="procesoPago">
        <div class="ui top attached mini stackable steps barra">
          <div class="completed step">
            <i class="truck icon"></i>
            <div class="content">
              <div class="title">Envio</div>
            </div>
          </div>
          <div class="active step">
            <i class="payment icon"></i>
            <div class="content">
              <div class="title">Pago</div>
            </div>
          </div>
        </div>
        <div class="ui attached segment pasoContenido">
          <div class="envioDatos">
            <form class="ui form" action="index.html" method="post">
              <div class="field">
                <label>Nombre</label>
                <div class="two fields">
                  <div class="field">
                    <input type="text" name="shipping[first-name]" placeholder="Nombre">
                  </div>
                  <div class="field">
                    <input type="text" name="shipping[last-name]" placeholder="Apellido">
                  </div>
                </div>
              </div>
              <div class="field">
                <label>Direccion</label>
                <div class="fields">
                  <div class="twelve wide field">
                    <input type="text" name="shipping[address]" placeholder="Calle">
                  </div>
                  <div class="four wide field">
                    <input type="text" name="shipping[address-2]" placeholder="Numero">
                  </div>
                </div>
              </div>
              <div class="two fields">
                <div class="field">
                  <label>Estado</label>
                  <select class="ui fluid dropdown">
                    <option value="">State</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="CDMX">CDMX</option>
                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                    <option value="Colima">Colima</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>

                    <option value="Durango">Durango</option>
                    <option value="Guanajuato">Guanajuato</option>
                    <option value="Guerrero">Guerrero</option>
                    <option value="Hidalgo">Hidalgo</option>
                    <option value="Jalisco">Jalisco</option>
                    <option value="México">México</option>
                    <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo León">Nuevo León</option>
                    <option value="Oaxaca">Oaxaca</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Querétaro">Querétaro</option>
                    <option value="Quintana Roo">Quintana Roo</option>
                    <option value="San Luis Potosí">San Luis Potosí</option>
                    <option value="Sinaloa">Sinaloa</option>
                    <option value="Sonora">Sonora</option>
                    <option value="Tabasco">Tabasco</option>
                    <option value="Tamaulipas">Tamaulipas</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                    <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                    <option value="Yucatán">Yucatán</option>
                    <option value="Zacatecas">Zacatecas</option>

                  </select>
                </div>
                <div class="field">
                  <label>Codigo postal</label>
                  <input type="text" pattern="[0-9]{4}" name="shipping[postal-code]" placeholder="Codigo Postal">
                </div>

              </div>
            </form>
            <button type="button" name="siguiente">Siguiente</button>
          </div>
          <div class="pagoDatos">
            <div class="ui styled accordion" id="metodoSelector">
              <div class="title">
                <i class="dropdown icon"></i>
                Tarjeta Credito/Debito
              </div>
              <div class="content">
                <form action="pagos/cargador.php" method="POST" id="payment-form" class="ui form">
                  <input type="hidden" name="token_id" id="token_id">
                  <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                  <input type="hidden" name="last_name" value="">
                  <input type="hidden" name="amount" value="<?php echo $totalFinal; ?>">
                  <input type="hidden" name="description" value="Prueba">


                  <div class="two fields">
                    <div class="field">
                      <label>Nombre</label>
                      <input type="text" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name" name="name">
                    </div>
                    <div class="field">
                      <label>Numero de tarjeta</label>
                      <input type="text" autocomplete="off" data-openpay-card="card_number" name="number">
                    </div>
                  </div>
                  <div class="three fields">

                    <div class="field">
                      <label>Mes</label>
                      <input type="text" placeholder="Mes" data-openpay-card="expiration_month" name="expiration_month">
                    </div>
                    <div class="field">
                      <label>Año </label>
                      <input type="text" placeholder="Año" data-openpay-card="expiration_year" mame="expiration_year">
                    </div>
                    <div class="field">
                      <label>Codigo de seguridad</label>
                      <input type="text" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2" name="cvv2">
                    </div>

                  </div>
                  <div class="two fields">
                    <div class="field">
                      <label>Telefono</label>
                      <input type="tel" name="phone_number" value="" placeholder="Telefono">
                    </div>
                    <div class="field">
                      <label>Correo</label>
                      <input type="text" name="email" value="" placeholder="Correo">
                    </div>
                  </div>
                  <button type="button" name="button" id="pay-button">Pagar</button>
                </form>
              </div>




              <div class="title">
                <i class="dropdown icon"></i>
                Pago en tienda
              </div>
              <div class="content">
                <div class="pagoTiendaInfo">
                  <div class="imagenTiendas">

                  </div>
                  <form class="" action="pagos/pagoTienda.php" method="post">
                    <input type="hidden" name="amount" value="<?php echo $totalFinal ?>">
                    <input type="submit" name="" value="">
                  </form>
                </div>
              </div>
              <div class="title">
                <i class="dropdown icon"></i>
                Pago en banco
              </div>
              <div class="content">
                <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
              </div>
            </div>
            <div class="ui secondary segment infoOpenPay">
              <div class="columna1">
                <span>Transacciones realizadas via:</span>
                <img src="pagos/resources/openpay.png" alt="">
              </div>
              <div class="columna2">
                <img src="pagos/resources/security.png" alt="">
                <span>Tus pagos se realizan de forma segura con encriptación de 256 bits</span>
              </div>
            </div>
          </div>
          <div class="confirmarDatos">

          </div>
        </div>
      </div>

    </div>
    <script type="text/javascript">
      $('.ui.dropdown').dropdown();
      $('.ui.accordion').accordion();
    </script>
    <script type="text/javascript">
      function saveToDatabase(editableObj,column,id_producto,id_user) {
        $('.botonCarga').toggleClass('loading');
        $.ajax({
          url: "php/carritoUpdate.php",
          type: "POST",
          data:'column='+column+'&editval='+editableObj.innerHTML+'&id_usuario='+id_user+'&id_producto='+id_producto,
          success: function(data){
            $('#content').load('pagos/formasDePagos.php');
          }
         });
      }
      function borrarFila(id_producto,id_usuario){
        $.ajax({
          url: "php/carritoDelete.php",
          type: "POST",
          data:'&id_usuario='+id_usuario+'&id_producto='+id_producto,
          success: function(data){
            $('#content').load('pagos/formasDePagos.php');
          }
         });
      }
    </script>
