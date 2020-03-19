<?php
/**
* Template Name: Testimonios
* 
*/
?>
<?php get_header(); 
$ID = get_the_ID();
?>

<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->

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

        <?php 
                    $rows = count(get_field('galeria', $ID));
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
        <div id="slider-videos" class="owl-carousel owl-theme" style="position: relative;">

            <?php 
                $rows = count(get_field('galeria_videos', $ID));
                $i = 1;
                ?>
                <?php if( have_rows('galeria_videos', $ID) ): ?>

                <?php while( have_rows('galeria_videos', $ID) ): the_row(); 
                    $video = get_sub_field('video');
                ?>

                <div class="cont-video">
                    <img src="<?php echo $video ?>" alt="">
                </div>

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