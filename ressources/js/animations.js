AOS.init({
 duration: 1200,
 disable: 'mobile'
});

$(window).on('load', function () {
    AOS.refresh();
});

$(window).scroll(function() {
  if (document.getElementById('progress-bar') !== null) {
    document.getElementById("progress-bar").max = $(document).height() - $(window).height();
  }
  var scrollValue = $(window).scrollTop()
    if (scrollValue > 0) {
      $('#progress-bar').val(scrollValue);
      $('#navbarBrand').addClass("small");
    } else {
      $('#progress-bar').val(0);
      $('#navbarBrand').removeClass("small");
    }
});
