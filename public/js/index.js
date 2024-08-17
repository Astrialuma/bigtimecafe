$(document).ready(function() {
    $(window).on('scroll', function() {
        if ($(window).scrollTop() === 0) {
            $('header').removeClass('headershadow');
        } else {
            $('header').addClass('headershadow');
        }
    });

    // Initial check in case the page is already scrolled
    if ($(window).scrollTop() === 0) {
        $('header').removeClass('headershadow');
    } else {
        $('header').addClass('headershadow');
    }
});


function move(){
    const currentUrl = window.location.href;
    const state = {};
    history.pushState(state, '', currentUrl);

}