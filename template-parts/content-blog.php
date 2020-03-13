<div class="blog-container">
    <div class="col">
        <!-- carousel -->
        <div class="post-carousel owl-carousel owl-theme">

        <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-1.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->

                <!-- Content -->
                <div class="content">
                    <div class="title">
                        ¿Porqué operarse con nosotros?
                    </div>
                    <div class="vermas">
                        <a href="">
                            <span>
                                Ver más
                            </span>
                        </a>
                    </div>
                </div><!-- Content -->
            </div><!-- Item -->

            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-1.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->

                <!-- Content -->
                <div class="content">
                    <div class="title">
                        ¿Porqué operarse con nosotros?
                    </div>
                    <div class="vermas">
                        <a href="">
                            <span>
                                Ver más
                            </span>
                        </a>
                    </div>
                </div><!-- Content -->
            </div><!-- Item -->

            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-1.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->

                <!-- Content -->
                <div class="content">
                    <div class="title">
                        ¿Porqué operarse con nosotros?
                    </div>
                    <div class="vermas">
                        <a href="">
                            <span>
                                Ver más
                            </span>
                        </a>
                    </div>
                </div><!-- Content -->
            </div><!-- Item -->
        </div><!-- carousel -->
    </div>

    <!-- Column -->
    <div class="col">

        <!-- Grid -->
        <div class="grid">

            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-5.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
                <!-- Content -->
                <div class="content">
                    <div class="title">¿Cómo se relacionan la obesidad y la cirrosis hepática?</div>
                    <div class="vermas"><a href="#">Ver más</a></div>
                </div><!-- Content -->
            </div><!-- Item -->

            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-6.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
                <!-- Content -->
                <div class="content">
                    <div class="title">¿Cómo se relacionan la obesidad y la cirrosis hepática?</div>
                    <div class="vermas"><a href="#">Ver más</a></div>
                </div><!-- Content -->
            </div><!-- Item -->

            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-7.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
                <!-- Content -->
                <div class="content">
                    <div class="title">¿Cómo se relacionan la obesidad y la cirrosis hepática?</div>
                    <div class="vermas"><a href="#">Ver más</a></div>
                </div><!-- Content -->
            </div><!-- Item -->

            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/blog-8.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
                <!-- Content -->
                <div class="content">
                    <div class="title">¿Cómo se relacionan la obesidad y la cirrosis hepática?</div>
                    <div class="vermas"><a href="#">Ver más</a></div>
                </div><!-- Content -->
            </div><!-- Item -->
        </div><!-- Grid -->

    </div><!-- Column -->

</div>

<script>
$(document).ready(function() {
    $(".post-carousel").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        nav: true,
        navText: ["<img src='<?php echo get_template_directory_uri().'/img/arrow.png';?>'>",
            "<img src='<?php echo get_template_directory_uri().'/img/arrow.png';?>'>"
        ],
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true
    });
});
</script>