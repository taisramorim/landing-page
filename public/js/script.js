$(document).ready(function() {
    $('nav a').on('click', function(event) {
        event.preventDefault();
        const target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);
    });
});
