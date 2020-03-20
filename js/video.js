$.fn.CustomVideo = function() {
    var CustomVideos = this;

    var TotalVideos = CustomVideos.length;

    for (i = 0; i < TotalVideos; i++) {
        var Video = CustomVideos[i];
        $('<img class="play" src="../wp-content/themes/metaboliko/img/arrow.png">').prependTo(Video);
        $('<div class="overlay"></div>').prependTo(Video);

        $(Video).on('click', function() {
            var video_item = $(this).find('video')[0];

            $(this).find('.play, .overlay').toggle();
            if (video_item.paused) {
                video_item.play();

            } else {
                video_item.pause();

            };
        });

    }

}

$(document).ready(function() {

    var navv = $(".video-carousel").attr("nav");
    if (!navv) {
        navv = false;
    }

    var dotss = $(".video-carousel").attr("dots");
    if (!dotss) {
        dotss = false;
    }

    $(".video-carousel").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        center: true,
        lazyLoad: false,
        smartSpeed: 450,
        onDragged: PauseVideos,
        nav: navv,
        dots: dotss
    });

    $(".customVideo").CustomVideo();

    $('.video-carousel .owl-dots button').click(function(e) {
        PauseVideos();
    });

    $('.video-carousel .owl-nav button').click(function(e) {
        PauseVideos();
    });

    $('.contenedor-items-slider .item-slider').click(function(e) {
        PauseVideos();
    });

    function PauseVideos() {
        var videos = $('.customVideo video');

        videos.each(function(element, value) {
            // value.currentTime = 0;

            value.pause();

        });

        $('.play , .overlay').show();
    }
});