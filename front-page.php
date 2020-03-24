<?php get_header(); ?>

<?php $opcion1 = get_field('opcion_1');?>
<?php $opcion2 = get_field('opcion_2');?>
<?php $opcion3 = get_field('opcion_3');?>
<?php $opcion4 = get_field('opcion_4');?>
<?php $opcion5 = get_field('opcion_5');?>

<!-- Hero Banner -->
<div class="hero-banner">
    <!-- hero title -->
    <div class="hero-title">#RecuperaTuVida</div><!-- hero title -->

    <!-- ring-overlay -->
    <div class="ring-overlay"></div><!-- ring-overlay -->

    <!-- content -->
    <div class="front-content">
        <div class="title">Quiero...</div>
        <select name="hero-select" id="hero-select" class="select-custom">
            <option><?php echo $opcion1['boton']?></option>
            <option><?php echo $opcion2['boton']?></option>
            <option><?php echo $opcion3['boton']?></option>
            <option><?php echo $opcion4['boton']?></option>
            <option><?php echo $opcion5['boton']?></option>
        </select>
    </div><!-- content -->



    <!-- social-media -->
    <div class="social-media">
        <div class="links">
            <a href="https://www.facebook.com/clinicametabolikO/" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/facebook-white.png'; ?>" alt=""></a>
            <a href="https://twitter.com/metaboliko" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/twitter-white.png'; ?>" alt=""></a>
            <a href="https://mx.linkedin.com/company/cl%C3%ADnica-metaboliko" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/linkedin-white.png'; ?>" alt=""></a>
            <a href="https://www.instagram.com/clinicametaboliko/" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/instagram-white.png'; ?>" alt=""></a>
            <a href="https://www.youtube.com/channel/UCV7KykfT6_opfuXtW8TWtZA" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/youtube-white.png'; ?>" alt=""></a>
            <a href="https://www.pinterest.com.mx/metaboliko/" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/pinterest-white.png'; ?>" alt=""></a>
        </div>
    </div><!-- social-media -->
    <!-- carousel -->
    <div class="banner-carousel owl-carousel owl-theme">
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/home-banner2.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div>
            <!-- overlay -->
        </div>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/home-banner2.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div><!-- overlay -->
        </div>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/home-banner2.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div><!-- overlay -->
        </div>
    </div><!-- carousel -->

</div><!-- Hero Banner -->

<!-- Posts -->
<div class="posts-container">
    <?php  
    $post_args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'principal'
    );
    $the_query = new WP_Query($post_args);    
    ?>

    <?php if($the_query->have_posts()):?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
        <a href="<?php the_permalink(); ?>" target="_blank">
            <div class="overlay"></div>
            <div class="text">
                <div class="title"><?php the_title(); ?></div>
                <div class="desc"><?php the_excerpt(); ?></div>
            </div>
        </a>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div><!-- Posts -->





<!-- Bascula -->
<div class="bascule-container" id="bascula">
    <!-- Behinde -->
    <div class="content-behinde">
        <div class="shape"></div>
        <div class="text">
            <div class="text-option active" id="option0">
                <div class="title">
                    <?php echo $opcion1['titulo']?>
                </div>
                <div class="desc">
                    <?php echo $opcion1['descripcion']?>
                </div>
            </div>

            <div class="text-option" id="option1">
                <div class="title">
                    <?php echo $opcion2['titulo']?>
                </div>
                <div class="desc">
                    <?php echo $opcion2['descripcion']?>
                </div>
            </div>
            <div class="text-option" id="option2">
                <div class="title">
                    <?php echo $opcion3['titulo']?>
                </div>
                <div class="desc">
                    <?php echo $opcion3['descripcion']?>
                </div>
            </div>
            <div class="text-option" id="option3">
                <div class="title">
                    <?php echo $opcion4['titulo']?>
                </div>
                <div class="desc">
                    <?php echo $opcion4['descripcion']?>
                </div>
            </div>
            <div class="text-option" id="option4">
                <div class="title">
                    <?php echo $opcion5['titulo']?>
                </div>
                <div class="desc">
                    <?php echo $opcion5['descripcion']?>
                </div>
            </div>
        </div>
        <div class="shape-blue">
            <img src="<?php echo get_template_directory_uri().'/img/blue-shape.png'?>" alt="">
        </div>
    </div><!-- Behinde -->


    <!-- Front -->
    <div class="content-front">
        <!-- Options -->
        <div class="options">
            <button class="option" id="option1" data-item="0">
                <div class="shape-line-bottom">
                    <img src="<?php echo get_template_directory_uri().'/img/green-arc.png';?>" alt="">
                </div>
                <div class="shape-line"></div>
                <?php echo $opcion1['boton']?>
            </button>

            <button class="option" id="option2" data-item="1">
                <div class="shape-line-bottom">
                <img src="<?php echo get_template_directory_uri().'/img/green-arc.png';?>" alt="">
                </div>
                <div class="shape-line"></div>
                <?php echo $opcion2['boton']?>
            </button>

            <button class="option" id="option3" data-item="2">
                <div class="shape-line-bottom">
                <img src="<?php echo get_template_directory_uri().'/img/green-arc.png';?>" alt="">
                </div>
                <div class="shape-line"></div>
                <?php echo $opcion3['boton']?>
            </button>

            <button class="option" id="option4" data-item="3">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <div class="shape-line-img">
                <img src="<?php echo get_template_directory_uri().'/img/green-arc.png';?>" alt="">
                </div>
                <?php echo $opcion4['boton']?>
            </button>

            <button class="option" id="option5" data-item="4">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <div class="shape-line-img">
                <img src="<?php echo get_template_directory_uri().'/img/green-arc.png';?>" alt="">
                </div>
                <?php echo $opcion5['boton']?>
            </button>
        </div><!-- Options -->

        <!-- Bascula -->
        <div class="bascule">
            <img src="<?php echo get_template_directory_uri().'/img/bascula.png'?>" alt="">
        </div><!-- Bascula -->

        <!-- Mujer -->
        <div class="woman">
            <img src="<?php echo get_template_directory_uri().'/img/woman.png'?>" alt="">
        </div><!-- Mujer -->

    </div><!-- Front -->
</div><!-- Bascula -->

<!-- Quien es el DR Fraga -->

<?php $fraga = get_field('fraga'); ?>
<div class="who-is-container">
    <div class="col">
        <div class="figure-container">
            <img src="<?php echo $fraga['imagen']['url']?>" alt="">
        </div>
    </div>
    <div class="col">
        <div class="content">
            <div class="title">
                <?php echo $fraga['titulo']?>
                <img src="<?php echo get_template_directory_uri().'/img/drfraga-line.png'?>" alt="">
            </div>
            <div class="desc">
                <?php echo $fraga['descripcion']?>
            </div>
            <a class="button" href="<?php echo $fraga['url_link']?>"><?php echo $fraga['texto_link']?></a>
        </div>
    </div>
</div><!-- Quien es el DR Fraga -->

<!-- Direccion -->
<?php get_template_part('template-parts/content', 'address')?>
<!-- Direccion -->

<!-- Contacto -->
<?php get_template_part('template-parts/content', 'contact')?>
<!-- Contacto -->

<script>
$('#hero-select').CustomSelect(
    'Cirugía para perder peso'
);

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
});
</script>

<?php get_footer(); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.bascule-container .content-front .options .option, .who-is-container .col, .address-container .col div, .contact-container .col, .bascule-container .content-behinde .text .title, .bascule-container .content-behinde .text .desc, .hero-banner .front-content, .hero-banner .hero-title{
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