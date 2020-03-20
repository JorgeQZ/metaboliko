<?php
/**
* Template Name: Testimonios
* 
*/
?>
<?php get_header(); 
$ID = get_the_ID();
$seccion_2 = get_field('seccion_2');	

?>

<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->

<div class="contenedor-general-cirugias">
    <div class="cont-cirugias">
        <p class="enc">
            <?php echo $seccion_2['titulo']; ?>
            <span>
                <?php echo $seccion_2['titulo']; ?>
            </span>
        </p>
        <p class="desc">
            <?php echo $seccion_2['descripcion']; ?>
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

        <?php 
                    $i = 1;
                    ?>
                    <?php if( have_rows('galeria', $ID) ): ?>

                    <?php while( have_rows('galeria', $ID) ): the_row(); 
                        $imagen = get_sub_field('imagen');
                    ?>
                        <?php
                        if($i == 1)
                        {
                        ?>
                        <div class="cont-slide">
                        <?php
                        }
                        ?>
                        <div class="cont-img">
                            <img src="<?php echo $imagen ?>" alt="">
                        </div>
                        <?php
                        if($i == 8)
                        {
                        ?>
                        </div>
                        <?php
                        }
                        ?>
                    <?php
                    if($i < 8) 
                    $i++;
                    else
                    $i = 1 
                    ?>    
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    if($i != 1)
                    {
                    ?>
                    </div>
                    <?php
                    }
                    ?>

        <!--
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
        -->
        </div>
    </div>
</div>


<div class="contenedor-general-video">
    <div class="contenedor-video">
        <div id="slider-videos" class="video-carousel owl-carousel owl-theme" nav="true" dots="true">

                <?php if( have_rows('galeria_videos', $ID) ): ?>

                <?php while( have_rows('galeria_videos', $ID) ): the_row(); 
                    $video = get_sub_field('video');
                ?>
<!--
                <div class="cont-video">
                    <img src="<?php echo $video ?>" alt="">
                </div>
-->
                <!-- Item -->
        <div class="item">
            <div class="customVideo cont-video">
                <video>
                    <source src="<?php echo $video ?>" preload>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div><!-- Item -->

            <?php endwhile; ?>
            <?php endif; ?>

        <!--
            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri().'/img/testimonios-video.png'; ?>" alt="">
            </div>
            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri().'/img/testimonios-video.png'; ?>" alt="">
            </div>
            <div class="cont-video">
                <img src="<?php echo get_template_directory_uri().'/img/testimonios-video.png'; ?>" alt="">
            </div>
        -->
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

    $( ".owl-prev").html("<img src='<?php echo get_template_directory_uri().'/img/arrowl-video.png'; ?>'>");
    $( ".owl-next").html("<img src='<?php echo get_template_directory_uri().'/img/arrowr-video.png'; ?>'>");

    /*
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
    */
});
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.contenedor-general-cirugias .cont-cirugias, .contenedor-general-galeria p.enc, .contenedor-general-galeria .cont-galeria, .contenedor-general-video .contenedor-video{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.contenedor-general-galeria p.enc, .contenedor-general-galeria .cont-galeria, .contenedor-general-video .contenedor-video').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });
/*
	$j('.contenedor-general-infraestructura .contenedor-logos .cont-logos img, .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor:nth-child(4n-3), .contenedor-general-infraestructura .contenedor-general-info-servidores .cont-servidor:nth-child(4n-1), .banner .banner-title').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });
*/
    $j('.contenedor-general-cirugias .cont-cirugias').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


});

</script>