AOS.init({
 duration: 1200,
 disable: 'mobile'
});

$(window).on('load', function () {
    AOS.refresh();
});

let scrolled = false;

$(window).scroll(function() {
  var scrollValue = $(window).scrollTop();

  /* Pour les pages avec la progressBar (= tout sauf Accueil) */
  if (document.getElementById('progress-bar') !== null) {
    document.getElementById("progress-bar").max = $(document).height() - $(window).height();
  }
  /* Pour la page Accueil */
  else {
    if (scrollValue > 0 && !scrolled) {
      $('html, body').animate({
        scrollTop: $("#navbar").offset().top
      }, 500);
      scrolled = true;
    }
  }

  /* Pour toutes les pages */
  if (scrollValue > 0) {
    $('#progress-bar').val(scrollValue);
    $('#navbarBrand').addClass("small");
  } else {
    $('#progress-bar').val(0);
    $('#navbarBrand').removeClass("small");
  }
});

$(document).ready(function(){
  $('[data-toggle="popover"]').popover({
    placement : 'top',
    trigger : 'hover'
  });
});
