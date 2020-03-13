$.fn.CustomVideo = function() {
    var CustomVideos = this;

    var TotalVideos = CustomVideos.length;

    for (i = 0; i < TotalVideos; i++) {
        var Video = CustomVideos[i];
        $('<img class="play" src="../wp-content/themes/metaboliko/img/arrow.png">').prependTo(Video);
        $('<div class="overlay"></div>').prependTo(Video);
        $(Video).click(function() {
            $(Video).find('.play').show();
        });
    }

}