$(document).ready(function() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() === 0) {
            $('header .logo, header nav').addClass('ausgefahren');
        } else {
            $('header .logo, header nav').removeClass('ausgefahren');
        }
    });

    // Initial check in case the page is already scrolled
    if ($(window).scrollTop() === 0) {
        $('header .logo, header nav').addClass('ausgefahren');
    } else {
        $('header .logo, header nav').removeClass('ausgefahren');
    }
});
