var $z = jQuery.noConflict();
$z(document).ready(function() {
    $z("#aumentar-fonte").click(function() {
        var size = $z("#content p").css('font-size');

        size = size.replace('px', '');
        size = parseInt(size) + 4;

        $z("#content p").animate({
            'font-size': size + 'px'
        });
        return false;
    });

    $z("#aumentar-fonte").click(function() {
        var size = $z("#content h2").css('font-size');

        size = size.replace('px', '');
        size = parseInt(size) + 4;

        $z("#content h2").animate({
            'font-size': size + 'px'
        });
        return false;
    });

    // $z("#aumentar-fonte").click(function() {
    //     var size = $z(".nav-link").css('font-size');

    //     size = size.replace('px', '');
    //     size = parseInt(size) + 4;

    //     $z(".nav-link").animate({
    //         'font-size': size + 'px'
    //     });
    //     return false;
    // });

    $z("#diminuir-fonte").click(function() {
        var size = $z("#content p").css('font-size');

        size = size.replace('px', '');
        size = parseInt(size) - 2;

        $z("#content p").animate({
            'font-size': size + 'px'
        });
        return false;
    });

    $z("#diminuir-fonte").click(function() {
        var size = $z("#content h2").css('font-size');

        size = size.replace('px', '');
        size = parseInt(size) - 2;

        $z("#content h2").animate({
            'font-size': size + 'px'
        });
        return false;
    });
    
    // $z("#diminuir-fonte").click(function() {
    //     var size = $z(".nav-link").css('font-size');

    //     size = size.replace('px', '');
    //     size = parseInt(size) - 2;

    //     $z(".nav-link").animate({
    //         'font-size': size + 'px'

    //     });
    //     return false;
    // });
    

});