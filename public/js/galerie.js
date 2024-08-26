$(document).ready(function() {
    $('.image-link').on('click', function(event) {
        event.preventDefault();
        var imgSrc = $(this).attr('href');
        showFullscreenImage(imgSrc);
    });

    function showFullscreenImage(src) {
        var overlay = $('<div class="fullscreen-overlay"><img src="' + src + '" alt="Fullscreen Image"></div>');
        $('body').append(overlay);
        overlay.fadeIn();

        overlay.on('click', function() {
            overlay.fadeOut(function() {
                overlay.remove();
            });
        });
    }
});
