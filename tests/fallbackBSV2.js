function cssLoaded(href) {
    var cssFound = false;

    for (var i = 0; i < document.styleSheets.length; i++) {
        sheet = document.styleSheets[i];
        if (sheet['href'].indexOf(href) >= 0 && sheet['cssRules'].length > 0) {
            cssFound = true;
        }
    };

    return cssFound;
}

yepnope([{
    load: '//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.1.min.js',
    complete: function () {
        if (!window.jQuery) {
            alert('local jquery');
            yepnope('js/jquery-1.8.1.min.js');
        }
    }
}, {
    load: '//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/js/bootstrap.min.js',
    complete: function () {
        if (!$.fn.button) { // just picked a random element from the bootstrap to test
            alert('local twitter js');
            yepnope('js/bootstrap.min.js');
        }
    }
}, {
    load: '//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css'
}, {
    test: cssLoaded('bootstrap-combined.min.css'),
    nope: 'css/bootstrap.min.css'
}]);
