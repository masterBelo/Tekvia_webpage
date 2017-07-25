
$(document).ready(function(){
  var bar = new ProgressBar.Path('#heart-path', {
    easing: 'easeInOut',
    duration: 1400
  });
  bar.set(0);
  bar.animate(1.0);
});
$(window).on('load', function() { // makes sure the whole site is loaded
 // will first fade out the loading animation
  $('#preloader').delay(350).fadeOut('fast'); // will fade out the white DIV that covers the website.
  $('body').delay(350).css({'overflow':'hidden'});
});
