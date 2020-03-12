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
    if (screen_width <= 600) {
        if (scroll >= 46) {
            $('header').css({ 'top': '0' }).addClass('bg');
        } else {
            var top = 46 - scroll;
            $('header').css({ 'top': top + 'px' }).removeClass('bg');
        }
    } else {
        if (scroll >= 100) {
            $('header').addClass('bg');
        } else {
            $('header').removeClass('bg');
        }
    }
});