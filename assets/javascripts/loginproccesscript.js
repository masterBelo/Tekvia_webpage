$(document).ready(function(){
  var snakbarError1 = $("#snakbarError1");
  var snakbarError2 = $("#snakbarError2");
  var usuarioForm = $('#usuario');
  var contraseniaForm = $('#contrasenia');
  var loadImage = $('#loadImage');

  $("#botonLogin").on('click',function(){
    event.preventDefault();
    var usuario = usuarioForm.val();
    var contrasenia = contraseniaForm.val();
    if(usuario=='' || contrasenia==''){
      snakbarError1.addClass('show');
      setTimeout(function(){
         snakbarError1.removeClass("show");
      }, 3000);
    }else{
      loadImage.css('visibility','visible');
      $.ajax({
            type: "POST",
            url:  "php/login.php",
            data: "usuario="+usuario+"&contrasenia="+contrasenia,
            success: function(html){
              if(html=='true')
              {
                window.location.href = "../panel/";
              }
              else
              {
                  usuarioForm.addClass("wrong");
                  contraseniaForm.addClass("wrong");
                  snakbarError2.addClass('show');
                  setTimeout(function(){
                     snakbarError2.removeClass("show");
                  }, 3000);
                  loadImage.css('visibility','hidden');
              }
            }
        });
    }
  });
});
