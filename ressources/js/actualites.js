$(function() {
    var sources = [];
    $('.actu img').each(function () {
        console.log($(this).attr('src'));
        sources.push($(this).attr('src'));
        $('head').append('<meta property="og:image:alt" content="' + $(this).attr('src') + '" />');
    });
    console.log("SOURCES" + sources);
});
