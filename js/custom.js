$(document).ready(function() {
    $('#menu-button').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.menu-header-container').toggleClass('active');
    });

    $('#custom-select-hero-select li').click(function(e) {
        var option = $('#custom-select-hero-select li').index(this);
        $('.text-option .title, .text-option .desc').hide('fast');
        $('.text-option#option' + option + ' .title').fadeIn();
        $('.text-option#option' + option + ' .desc').fadeIn();

        $('html,body').delay(300).animate({
            scrollTop: $("#bascula").offset().top - 90
        }, 'slow');
    });

    $('button.option').click(function() {
        var optionButton = $('button.option').index(this);
        $('.text-option .title, .text-option .desc').hide('fast');
        $('.text-option#option' + optionButton + ' .title').fadeIn('fast');
        $('.text-option#option' + optionButton + ' .desc').fadeIn('fast');
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
            if (document.body.classList.contains('logged-in')) {
                $('header').css({ 'top': '0' });
            }
            $('header').addClass('bg');
        } else {
            if (document.body.classList.contains('logged-in')) {
                var top = 46 - scroll;
                $('header').css({ 'top': top + 'px' });
            }
            $('header').removeClass('bg');
        }
    } else if (screen_width >= 783) {
        if (scroll >= 30) {
            if (document.body.classList.contains('logged-in')) {
                $('header').css({ 'top': '30px' });
            }
            $('header').addClass('bg');
        } else {
            if (document.body.classList.contains('logged-in')) {
                var top = 30 - scroll;
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