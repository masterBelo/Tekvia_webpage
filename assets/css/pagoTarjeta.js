OpenPay.setId('m33buy77sbo9rixxi44d');
OpenPay.setApiKey('pk_b75a7054d8404e96965275494a4e4dea');
OpenPay.setSandboxMode(true);
var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");

$('#pay-button').on('click', function(event) {
       event.preventDefault();
       if($("input[name='name']").val().length > 0 || $("input[name='expiration_month']").val().length > 0 ||  $("input[name='number']").val().length > 0 || $("input[name='cvv2']").val().length > 0 || $("input[name='phone_number']").val().length > 0 || $("input[name='email']").val().length > 0){
         $("#pay-button").prop( "disabled", true);
         OpenPay.token.extractFormAndCreate('payment-form', success_callbak, error_callbak);
       }else{
         swal(
           'Whoo',
           'Porfavor completa todos los campos',
           'error'
         );
       }
});



var success_callbak = function(response) {

    var token_id = response.data.id;
    $('#token_id').val(token_id);

    $.ajax({
      type: 'POST',
      url: '../panel/pagos/cargador.php',
      data: $('#payment-form').serialize(),
      success: function(data){
        console.log(data);
        if(data==true){
          console.log(data);
        }else{
          switch (data) {
            case '3001':
              swal(
                'Error',
                'Lo sentimos su tarjeta fue rechazada',
                'error'
              );
            break;
            case '3002':
              swal(
                'Error',
                'Lo sentimos su tarjeta ha expirado',
                'error'
              );
            break;
            case '3003':
              swal(
                'Error',
                'Lo sentimos su tarjeta no tiene fondos suficientes',
                'error'
              );
            break;
            case '3004':
              swal(
                'Error',
                'La tarjeta fue reportada como robada',
                'error'
              );
            break;
            case '3005':
              swal(
                'Error',
                'La tarjeta ha sido rechazada por el sistema antifraudes.',
                'error'
              );
            break;
            default:
            swal(
              'Error',
              'Hubo un error :C',
              'error'
            );

          }
        }





        $("#pay-button").prop( "disabled", false);
      }
    });




};


var error_callbak = function(response) {
     var desc = response.data.description != undefined ?
        response.data.description : response.message;
        switch(response.status){
          case 400:
          swal(
            'Oops',
            'Los campos no son los requeridos o estan incorrectos',
            'error'
          );
          break;

        }


     $("#pay-button").prop("disabled", false);
};
