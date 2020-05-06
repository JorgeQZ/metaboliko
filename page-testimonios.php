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

<style>
    .contenedor-general-video .contenedor-video .item .customVideo .embed-container { 
        position: relative; 
        padding-bottom: 56.25%;
        overflow: hidden;
        max-width: 100%;
        height: auto;
        box-shadow: 0px -45px 60px -40px rgba(0, 0, 0, 0.75), 0px 45px 60px -40px rgba(0, 0, 0, 0.75);
    } 

    .contenedor-general-video .contenedor-video .item .customVideo .embed-container iframe { 
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        border-radius: 20px;
        border: 3px solid white;
        display: block;
    }

    .contenedor-general-galeria .cont-galeria .cont-slide .cont-img{
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->

<div class="contenedor-general-cirugias" style="background-image: url(<?php echo get_template_directory_uri().'/img/fondo-verde-sistema.jpg'; ?>)">
    <div class="cont-cirugias">
        <p class="enc">
            Sistema Proteinado
            <span>
                Sistema Proteinado
            </span>
        </p>
    </div>
    <div class="cont-cirugias-items">
        <?php if( have_rows('sistema_proteinado', $ID) ): ?>

        <?php while( have_rows('sistema_proteinado', $ID) ): the_row(); 
            $imagen_item = get_sub_field('imagen_item');	
            $titulo = get_sub_field('titulo');
        ?>

        <div class="cont-new-item">
            <div class="new-item" style="background-image: url(<?php echo $imagen_item; ?>);">
            </div>
            <p><?php echo $titulo; ?></p>
        </div>

        <?php
        endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div class="contenedor-general-cirugias" style="background-image: url(<?php echo get_template_directory_uri().'/img/f-cir.jpg'; ?>)">
    <div class="cont-cirugias">
        <p class="enc">
            Cirugías
            <span>
                Cirugías
            </span>
        </p>
    </div>
    <div class="cont-cirugias-items">
        <?php if( have_rows('cirugias', $ID) ): ?>

        <?php while( have_rows('cirugias', $ID) ): the_row(); 
            $imagen_item = get_sub_field('imagen_item');	
            $titulo = get_sub_field('titulo');
        ?>

        <div class="cont-new-item">
            <div class="new-item" style="background-image: url(<?php echo $imagen_item; ?>);">
            </div>
            <p><?php echo $titulo; ?></p>
        </div>

        <?php
        endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php if( have_rows('sistema_proteinado', $ID) ): ?>

<?php while( have_rows('sistema_proteinado', $ID) ): the_row(); 
?>

<div class="c-galeria sistema">


<?php 
        if( have_rows('galeria_imagenes'))
        {
        ?>
        <div class="contenedor-general-galeria">
            <p class="enc">
                Galería
                <span>
                    Galería
                </span>
            </p>
            <div class="cont-galeria">
                <div class="slider-galeria owl-carousel owl-theme">

                <?php 
                            $i = 1;
                            ?>
                            <?php if( have_rows('galeria_imagenes', $ID) ): ?>

                            <?php while( have_rows('galeria_imagenes', $ID) ): the_row(); 
                                $imagen = get_sub_field('imagen');
                                $color = get_sub_field('color');
                            ?>
                                <?php
                                if($i == 1)
                                {
                                ?>
                                <div class="cont-slide">
                                <?php
                                }
                                ?>
                                <div class="cont-img" style="background-image: url(<?php echo $imagen ?>); border-color: <?php echo $color ?>">
                                    <img style="visibility: hidden;" src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
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

                </div>
            </div>
        </div>

    <?php
    }
    ?>

</div>

<?php
endwhile; ?>
<?php endif; ?>




<?php if( have_rows('cirugias', $ID) ): ?>

<?php while( have_rows('cirugias', $ID) ): the_row(); 
?>

<div class="c-galeria cirugia">


<?php 
        if( have_rows('galeria_imagenes'))
        {
        ?>
        <div class="contenedor-general-galeria">
            <p class="enc">
                Galería
                <span>
                    Galería
                </span>
            </p>
            <div class="cont-galeria">
                <div class="slider-galeria owl-carousel owl-theme">

                <?php 
                            $i = 1;
                            ?>
                            <?php if( have_rows('galeria_imagenes', $ID) ): ?>

                            <?php while( have_rows('galeria_imagenes', $ID) ): the_row(); 
                                $imagen = get_sub_field('imagen');
                                $color = get_sub_field('color');
                            ?>
                                <?php
                                if($i == 1)
                                {
                                ?>
                                <div class="cont-slide">
                                <?php
                                }
                                ?>
                                <div class="cont-img" style="background-image: url(<?php echo $imagen ?>); border-color: <?php echo $color ?>">
                                    <img style="visibility: hidden;" src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
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

                </div>
            </div>
        </div>

    <?php
    }
    ?>

</div>

<?php
endwhile; ?>
<?php endif; ?>







<?php if( have_rows('sistema_proteinado', $ID) ): ?>

<?php while( have_rows('sistema_proteinado', $ID) ): the_row(); 
?>

<div class="c-galeria-videos sistema">


<?php 
        if( have_rows('galeria_videos_'))
        {
        ?>
<div class="contenedor-general-video">
    <div class="contenedor-video">
        <div id="slider-videos" class="video-carousel owl-carousel owl-theme" nav="true" dots="true">

                <?php if( have_rows('galeria_videos_', $ID) ): ?>

                <?php while( have_rows('galeria_videos_', $ID) ): the_row(); 
                    $video = get_sub_field('video');
                ?>

        <div class="item">
            <div class="customVideo cont-video">
                <?php
                if(get_sub_field('video'))
                {
                ?>
                <video>
                    <source src="<?php echo get_sub_field('video'); ?>" preload>
                    Your browser does not support the video tag.
                </video>
                <?php
                }else
                {
                ?>
                <div class="embed-container">
                    <?php echo get_sub_field('video_youtube'); ?>
                </div>
                <?php
                }
                ?>                                    
            </div>            
        </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

    <?php
    }
    ?>

</div>

<?php
endwhile; ?>
<?php endif; ?>


<?php if( have_rows('cirugias', $ID) ): ?>

<?php while( have_rows('cirugias', $ID) ): the_row(); 
?>

<div class="c-galeria-videos cirugia">


<?php 
        if( have_rows('galeria_videos_'))
        {
        ?>
<div class="contenedor-general-video">
    <div class="contenedor-video">
        <div id="slider-videos" class="video-carousel owl-carousel owl-theme" nav="true" dots="true">

                <?php if( have_rows('galeria_videos_', $ID) ): ?>

                <?php while( have_rows('galeria_videos_', $ID) ): the_row(); 
                    $video = get_sub_field('video');
                ?>

        <div class="item">
            <div class="customVideo cont-video">
                <?php
                if(get_sub_field('video'))
                {
                ?>
                <video>
                    <source src="<?php echo get_sub_field('video'); ?>" preload>
                    Your browser does not support the video tag.
                </video>
                <?php
                }else
                {
                ?>
                <div class="embed-container">
                    <?php echo get_sub_field('video_youtube'); ?>
                </div>
                <?php
                }
                ?>                                    
            </div>            
        </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

    <?php
    }
    ?>

</div>

<?php
endwhile; ?>
<?php endif; ?>


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

    $(".slider-galeria").owlCarousel({
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





    $(".cont-new-item").each(function(index){
        
        $(this).click(function(){
            $(".c-galeria").removeClass("active");
            $(".c-galeria").eq(index).addClass("active");
            $(".c-galeria-videos").removeClass("active");
            $(".c-galeria-videos").eq(index).addClass("active");
        });
        
    });

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
.contenedor-general-cirugias .cont-cirugias, .contenedor-general-galeria p.enc, .contenedor-general-galeria .cont-galeria, .contenedor-general-video .contenedor-video, .hero-banner .hero-title{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.contenedor-general-galeria p.enc, .contenedor-general-galeria .cont-galeria, .contenedor-general-video .contenedor-video').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
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
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.hero-banner .hero-title').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '100%',
        triggerOnce: true
    });


});

</script>