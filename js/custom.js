$(document).ready(function() {
    $('#menu-button').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.menu-header-container').toggleClass('active');
    });
});

var screen_width = $(window).width();
$(window).resize(function() {
    screen_width = $(window).width();
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    console.info(screen_width);
    if (screen_width <= 600) {
        if (scroll >= 46) {
            if (document.body.classList.contains('logged-in')) { $('header').css({ 'top': '0' }); }
            $('header').addClass('bg');
        } else {
            if (document.body.classList.contains('logged-in')) {
                var top = 46 - scroll;
                $('header').css({ 'top': top + 'px' });
            }
            $('header').removeClass('bg');
        }
    } else {
        if (scroll >= 100) {
            $('header').addClass('bg');
        } else {
            $('header').removeClass('bg');
        }
    }
});