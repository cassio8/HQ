/***
 * FUNCTIONS
 ***/
// Check mobile
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

// ScrollAnim
function scrollAnim (target) {
    $(target).animatescroll({
        scrollSpeed: 800,
        easing: 'easeOutExpo',
        padding: 115,
    });
}

/***
 * GERAL
 ***/
$(function() {

    // menu
    var $win = $(window),
        $menu = $('header nav'),
        $menuToggle = $('header .menuToggle');

    if ($win.width() <= 768) {
        $($menuToggle).click(function(event) {
            event.preventDefault();
            $menu.slideToggle();
            $('html').toggleClass('open-menu');
        });

        $('header nav a').click(function(event) {
            $menu.slideToggle();
            $('html').toggleClass('open-menu');
        });
    }

    $win.resize(function(event) {
        $('html').removeClass('open-menu');

        if ($win.width() <= 768) {
            $($menu).css('display', 'none');
        } else {
            $($menu).css('display', 'block');
        }
    });

    // imagesLoaded
    $('body').imagesLoaded().always( function( instance ) {
        $('body').addClass('loaded');
    });

    // wow
    new WOW({
        offset: 300
    }).init();


    // owl carousel
    $('.owl-carousel').owlCarousel({
        items           : 1,
        loop            : true,
        autoplay        : true,
        dots            : true,
        nav             : false
    });



    // Galeria
    $('.galeria').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
              enabled:true
            }
        });
    });

    // Scrollspy
    $('body').scrollspy({
        target: 'header nav',
        offset: 300
    });

    // Scroll
    $('.scroll').on('click', function(event) {
        var data   = $(this).data('target');
        var href   = $(this).attr('href');
        var target = (data !== undefined) ? data : href;

        scrollAnim(target);
    });

});