AOS.init({
 duration: 1200
});

$(window).on('load', function () {
    AOS.refresh();
});


$(window).scroll(function() {
  document.getElementById("progress-bar").max = $(document).height() - $(window).height();
  var scrollValue = $(window).scrollTop()
    if (scrollValue > 0) {
      $('#progress-bar').val(scrollValue);
      $('#docHeight').text($(document).height());
      $('#windowHeight').text($(window).height());
      $('#maxHeight').text($(document).height() - $(window).height());
      $('#scrollHeight').text(scrollValue);
      $('#navbarBrand').addClass("small");
    } else {
      $('#progress-bar').val(0);
      $('#navbarBrand').removeClass("small");
    }
});
