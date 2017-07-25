var sideBar = $("#sideBar");
var serviciosMovil = $('#serviciosMovil');
var wbMovil = $('#wbMovil');
var emMovil = $('#emMovil');
var avMovil = $('#avMovil');
var dwMovil = $('#dwMovil');
var menuContenedorIcono = document.getElementById('menuContenedorIcono');
function toggleMenu(x) {
    x.classList.toggle("change");
}
function openNav() {
    sideBar.css('width','100%');
}

function closeNav() {
    sideBar.css('width','0');
}


$(document).ready(function(){

  var menu = 0;
  var servicios = 0;
  var wb=0,em=0,av=0,dw=0;




  $('#menuContenedorIcono').on('click',function(){
    if(menu == 0){
      openNav();
      menu++;
    }else{
      closeNav();
      menu--;
      if(servicios == 1){
        serviciosMovil.css('max-height','0');
        servicios--;
      }
    }
  });


  $("#aServiciosMovil").on('click',function(){
    event.preventDefault();
    if(servicios == 0){
      serviciosMovil.css('max-height','500px');
      sideBar.css({'margin-top':'35px','height':'3000px'});
      servicios++;
    }else{
      serviciosMovil.css('max-height','0');
      sideBar.css('margin-top','80px');
      servicios--;
    }

  });
  $("#aWebHostingMovil").on('click',function(){
    event.preventDefault();
    if(wb == 0){
      wbMovil.css('max-height','500px');
      sideBar.css({'margin-top':'-10px','height':'3000px'});
      wb++;
    }else{
      wbMovil.css('max-height','0');
      sideBar.css('margin-top','80px');
      wb--;
    }

  });
  $("#aEmMovil").on('click',function(){
    event.preventDefault();
    if(em == 0){
      emMovil.css('max-height','500px');
      sideBar.css({'margin-top':'-50px','height':'3000px'});
      em++;
    }else{
      emMovil.css('max-height','0');
      sideBar.css('margin-top','80px');
      em--;
    }

  });
  $("#aAvMovil").on('click',function(){
    event.preventDefault();
    if(av == 0){
      avMovil.css('max-height','500px');
      sideBar.css({'margin-top':'-93px','height':'3000px'});
      av++;
    }else{
      avMovil.css('max-height','0');
      sideBar.css('margin-top','80px');
      av--;
    }

  });
  $("#aDwMovil").on('click',function(){
    event.preventDefault();
    if(dw == 0){
      dwMovil.css('max-height','500px');
      sideBar.css({'margin-top':'-140px','height':'3000px'});
      dw++;
    }else{
      dwMovil.css('max-height','0');
      sideBar.css('margin-top','80px');
      dw--;
    }

  });


  $(window).resize(function(){
    if($(window).width() > 870){
      if(menu == 0){
      }else{
        closeNav();
        toggleMenu(menuContenedorIcono);
        menu = 0;
      }
    }
  });
  $("#opcContactoMovil").on('click',function(){
    event.preventDefault();
    closeNav();
    toggleMenu(menuContenedorIcono);
    menu = 0;
    $('html,body').animate({
      scrollTop: $("#contacto").offset().top
    },2000);
  });

  $("#modalMoneda").on('click',function(){
    event.preventDefault();
    $("#dropdownMoneda").toggleClass('showDrop');
  });
  $("#modalIdioma").on('click',function(){
    event.preventDefault();
    $("#dropdownIdioma").toggleClass('showDrop');
  });



});
