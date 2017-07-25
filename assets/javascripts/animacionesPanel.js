function pagarProducto(id_usuario,id_producto){
  console.log(id_usuario + " " + id_producto);
  swal({
    title: '¿Deseas comprar este producto?',
    html: 'Se pagara con tus creditos disponibles, de no contar con ellos se te redireccionara a las formas de pago',
    type: 'question',
    showCancelButton: true,
    confirmButtonColor:'#0061A4',
    confirmButtonText: 'Pagar',
    cancelButtonText: 'Cancelar',
    showLoaderOnConfirm:true,
    preConfirm: function(){
      return new Promise(function(resolve,reject){
        console.log("Entro");
        $.ajax({
          url: 'pagos/pagoProducto.php',
          type: 'POST',
          data:{
            idU: id_usuario,
            idP: id_producto
          }
        }).done(
          function(resp){
            console.log(resp);
            if(resp == "true"){
              resolve();
            }else{
              reject(resp);

            }
          }
        );
      });

    },
    allowOutsideClick: false
  }).then(function(){
    swal({
      type: 'success',
      title: 'Gracias por tu compra!',
      html: 'El producto fue correctamente pagado, tu factura se enviara a tu correo',
      allowOutsideClick: false
    }).then(function(){
      $('#content').load('secciones/inicio.php');
    })
  });
}
function renovarServicio(id_servicio,tipo_servicio){
  swal({
    title:'¿Deseas renovar este servicio?',
    html:'Se pagara con tus creditos disponibles, de no contar con ellos se te redireccionara a las formas de pago',
    type:'question',
    showCancelButton: true,
    confirmButtonColor:'#0061A4',
    confirmButtonText: 'Pagar',
    cancelButtonText: 'Cancelar',
    showLoaderOnConfirm:true,
    preConfirm: function(){
      return new Promise(function(resolve,reject){
        $.ajax({
          url: 'pagos/pago.php',
          type: 'POST',
          data:{
            idS: id_servicio,
            tipoS: tipo_servicio
          }
        }).done(
          function(resp){
            if(resp == 'true'){
              resolve();
            }else{
              reject(resp);
              if(resp = "false"){
                swal.close();
                console.log("Hoa");
                
              }
            }
          }
        );
      });
    },
    allowOutsideClick: false
  }).then(function(){
    swal({
      type: 'success',
      title: 'Gracias por tu compra!',
      html: 'El producto fue correctamente pagado, tu factura se enviara a tu correo',
      allowOutsideClick: false
    }).then(function(){
      $('#content').load('secciones/inicio.php');
    })
  });
}
$(document).ready(function(){
  $('#content').load('secciones/inicio.php');

  $('#botonMenu').on('click',function(){
    $('#navBar').toggleClass('show');
    $('#linea1').toggleClass('Abierta1');
    $('#linea2').toggleClass('Abierta2');
    $('#linea3').toggleClass('Abierta3');
  });
  $('#liInicio').on('click',function(){

    $('#content').load('secciones/inicio.php',function(){
      $('#liInicio').addClass('activo');
      $('#liPagos').removeClass('activo');
      $('#liSoporte').removeClass('activo');
      $('#liCompras').removeClass('activo');
      $('#liServicios').removeClass('activo');
    });
  });
  $('#liServicios').on('click',function(){
    $('#content').load('secciones/servicios.php',function(){
      $('#liServicios').addClass('activo');
      $('#liPagos').removeClass('activo');
      $('#liSoporte').removeClass('activo');
      $('#liCompras').removeClass('activo');
      $('#liInicio').removeClass('activo');
    });
  });
  $('#liPagos').on('click',function(){
    $('#content').load('secciones/pagos.php',function(){
      $('#liPagos').addClass('activo');
      $('#liServicios').removeClass('activo');
      $('#liSoporte').removeClass('activo');
      $('#liCompras').removeClass('activo');
      $('#liInicio').removeClass('activo');
    });
  });
  $('#liSoporte').on('click',function(){
    $('#content').load('secciones/soporte.php',function(){
      $('#liSoporte').addClass('activo');
      $('#liPagos').removeClass('activo');
      $('#liServicios').removeClass('activo');
      $('#liCompras').removeClass('activo');
      $('#liInicio').removeClass('activo');
    });
  });
  $('#liCompras').on('click',function(){
    $('#content').load('secciones/compras.php',function(){
      $('#liCompras').addClass('activo');
      $('#liPagos').removeClass('activo');
      $('#liSoporte').removeClass('activo');
      $('#liServicios').removeClass('activo');
      $('#liInicio').removeClass('activo');
    });
  });
  $('#cuentaBoton').on('click',function(){
    $('#content').load('cuenta/index.php');
  });





















});
