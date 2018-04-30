AOS.init({
 duration: 1200,
 disable: 'mobile'
});

$(window).on('load', function () {
    AOS.refresh();
});

$(window).scroll(function() {
    if ($(this).scrollTop()){
        $('#navbarBrand').addClass("small");
    }
    else{
        $('#navbarBrand').removeClass("small");
    }
});
