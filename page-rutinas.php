<?php
/**
 * Template Name: Rutinas
 */
get_header(); ?>

<!-- Hero Banner -->
<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->
<!-- Hero Banner -->

<div class="bodies_container">
    <div class="shape-title">
        <div class="title">
            Entrenamiento
        </div>
    </div>

    <div class="bodies_square">
        <div class="body_1">
            <img src="<?php echo get_template_directory_uri().'/img/cuerpo_1.png' ?>" alt="">
            <div class="options">

                <button class="option fadeInUp animated" id="biceps" data-item="1">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>Biceps</strong></p>
                </button>

                <button class="option fadeInUp animated" id="piernas" data-item="2">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>Piernas</strong></p>
                </button>

                <button class="option fadeInUp animated" id="hombros" data-item="3">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>Hombros</strong></p>
                </button>

                <button class="option fadeInUp animated" id="gluteos" data-item="4">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>glúteos</strong></p>
                </button>


            </div>
        </div>

        <div class="body_2">
            <img src="<?php echo get_template_directory_uri().'/img/cuerpo_2.png' ?>" alt="">
            <div class="options">

                <button class="option fadeInUp animated" id="trapecio" data-item="1">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>trapecio</strong></p>
                </button>

                <button class="option fadeInUp animated" id="triceps" data-item="2">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>triceps</strong></p>
                </button>

                <button class="option fadeInUp animated" id="pecho" data-item="3">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>pecho</strong></p>
                </button>


                <button class="option fadeInUp animated" id="espalda" data-item="4">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>espalda</strong></p>
                </button>


            </div>
        </div>
    </div>

    <a class="link-anatomy">
        <img src="<?php echo get_template_directory_uri().'/img/anatomy.png' ?>" alt="">
    </a>
</div>

<div class="grid_videos">
    <div class="title">ejercicios para <br><strong><span id="ejercicio_tipo">dummy</span></strong> </div>
    <div class="grid_container_columns">
        <div class="grid_column">
            <div class="grid_column_title">
                ligas
            </div>
            <div class="grid_column_content">
                <div class="grid_column_content__item">
                    <div class="grid_column_content__item__video">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uddGAk12NQA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="grid_column_content__item__name">
                        ejercicio #1
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_column">
            <div class="grid_column_title">
                peso libre
            </div>
            <div class="grid_column_content">
                <div class="grid_column_content__item"></div>

            </div>
        </div>
        <div class="grid_column">
            <div class="grid_column_title">
                aparatos
            </div>
            <div class="grid_column_content">
                <div class="grid_column_content__item"></div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.bascule-container .content-front .options .option,
.who-is-container .col,
.address-container .col div,
.contact-container .col,
.bascule-container .content-behinde .text .title,
.bascule-container .content-behinde .text .desc,
.hero-banner .front-content,
.hero-banner .hero-title {
    opacity: 0;
}

</style>

<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.bascule-container .content-front .options .option, .bascule-container .content-behinde .text .title, .bascule-container .content-behinde .text .desc').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.who-is-container .col:nth-child(1), .contact-container .col:first-child, .address-container .col div, .hero-banner .front-content').waypoint(function() {
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

    $j('.who-is-container .col:nth-child(2), .contact-container .col:last-child').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


});
</script>
