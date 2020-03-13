<?php
/**
* Template Name: Testimonios
* 
*/
?>
<?php get_header(); ?>

<!-- Hero Banner -->
<div class="hero-banner">
    <!-- hero title -->
    <div class="hero-title">#RecuperaTuVida</div><!-- hero title -->

    <!-- ring-overlay -->
    <!--
    <div class="ring-overlay"></div>
    ring-overlay 
-->

    <!-- content -->
<!--
    <div class="content">
        <div class="title">Quiero...</div>
        <select name="hero-select" id="hero-select" class="select-custom">
            <option value="Cirugías para Bajar de Peso">Cirugías para Bajar de Peso</option>
            <option value="Cirugía Antirreflujo por Laparoscopia">Cirugía Antirreflujo por Laparoscopia</option>
            <option value="Colecistectomía por Laparoscopía">Colecistectomía por Laparoscopía</option>
            <option>Hernia Abdominal por Laparoscopia</option>
            <option>Hernia Inguinal por Laparoscopia</option>
        </select>
    </div>
-->
    <!-- content -->

    <!-- whatsapp button -->
<!--
    <div class="button-whatsapp">
        <a href="#" target="_blank">
            <img src="<?php echo get_template_directory_uri().'/img/whatsapp-button.png'; ?>" alt="">
        </a>
    </div>
-->    
    <!-- whatasapp button-->

    <!-- social-media -->
    <div class="social-media">
        <div class="links">
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/facebook-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/twitter-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/linkedin-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/instagram-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/youtube-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/pinterest-white.png'; ?>" alt=""></a>
        </div>
    </div><!-- social-media -->
    <!-- carousel -->
    <div class="banner-carousel owl-carousel owl-theme">
        <div class="item"
            style="background-image: url(<?php echo get_template_directory_uri().'/img/banner-testimonios.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div>
            <!-- overlay -->
        </div>
    </div><!-- carousel -->

</div><!-- Hero Banner -->


<div class="contenedor-general-cirugias">
    <div class="cont-cirugias">
        <p class="enc">
            Cirugías
            <span>
                Cirugías
            </span>
        </p>
        <p class="desc">
        No sigas imaginando cómo sería tu vida 
        sin padecer de obesidad. 
        <br><br>
        Recupera tu salud recupera tu vida.
        </p>
    </div>
</div>


<div class="contenedor-general-galeria">
    <p class="enc">
        Galería
        <span>
            Galería
        </span>
    </p>
    <div class="cont-galeria">
        <div id="slider-galeria" class="owl-carousel owl-theme">
            <div class="cont-slide">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
            </div>
            <div class="cont-slide">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contenedor-general-video">
    <div class="contenedor-video">
        <div id="slider-videos" class="owl-carousel owl-theme" style="position: relative;">
            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri().'/img/testimonios-video.png'; ?>" alt="">
            </div>
            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri().'/img/testimonios-video.png'; ?>" alt="">
            </div>
            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri().'/img/testimonios-video.png'; ?>" alt="">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>

$(document).ready(function() {
    $(".banner-carousel").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true
    });

    $("#slider-galeria").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true
    });

    $("#slider-videos").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        nav:true,
        navText : ["<img src='<?php echo get_template_directory_uri().'/img/arrowl-video.png'; ?>'>","<img src='<?php echo get_template_directory_uri().'/img/arrowr-video.png'; ?>'>"],
        autoplayHoverPause: true
    });
});
</script>