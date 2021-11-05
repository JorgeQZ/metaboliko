<?php
/**
 * Template Name: Rutinas
 */
get_header();

$terms = get_terms(array('taxonomy' => 'categorias_rutinas','parent' => 0));

?>

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

                <a class="option option-rutina fadeInUp animated" id="biceps_" href="#biceps">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>Biceps</strong></p>
                </a>

                <a class="option option-rutina fadeInUp animated" id="piernas_">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>Piernas</strong></p>
                </a>

                <a class="option option-rutina fadeInUp animated" id="hombros_">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>Hombros</strong></p>
                </a>

                <a class="option option-rutina fadeInUp animated" id="gluteos_">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>glúteos</strong></p>
                </a>


            </div>
        </div>

        <div class="body_2">
            <img src="<?php echo get_template_directory_uri().'/img/cuerpo_2.png' ?>" alt="">
            <div class="options">

                <a class="option option-rutina fadeInUp animated" id="trapecio_">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>trapecio</strong></p>
                </a>

                <a class="option option-rutina fadeInUp animated" id="triceps_" href="#triceps">
                    <div class="shape-line-bottom">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <div class="shape-line"></div>
                    <p><strong>triceps</strong></p>
                </a>

                <a class="option option-rutina fadeInUp animated" id="pecho_">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>pecho</strong></p>
                </a>


                <a class="option option-rutina fadeInUp animated" id="espalda_">
                    <div class="shape-line-bottom"></div>
                    <div class="shape-line"></div>
                    <div class="shape-line-img">
                        <img src="https://www.clinicametaboliko.com/wp-content/themes/metaboliko/img/green-arc.png" alt="">
                    </div>
                    <p><strong>espalda</strong></p>
                </a>
            </div>
        </div>
    </div>

    <a class="link-anatomy">
        <img src="<?php echo get_template_directory_uri().'/img/anatomy.png' ?>" alt="">
    </a>
</div>

<div class="grid_videos" id="ejercicios">
    <div class="title">ejercicios para <br>
        <div class="button-left">
            <img src="<?php echo get_template_directory_uri().'/img/arrow-down.png'; ?>" alt="">
        </div>
        <div class="button-right">
            <img src="<?php echo get_template_directory_uri().'/img/arrow-down.png'; ?>" alt="">
        </div>
    </div>

    <!-- Slider de videos de rutinas -->
    <div class="owl-carousel owl-theme rutinasSlider" id="rutinasSlider">
        <?php
        foreach($terms as $term):
            $current_parent_id = $term->term_taxonomy_id;
            $current_parent_name = $term->taxonomy;
            $current_child = get_term_children($current_parent_id, $current_parent_name);

        ?>

        <div class="item" id="<?php echo $term->name?>" data-hash="<?php echo strtolower($term->name)?>">
            <!-- Item -->
            <div class="title_tax"><strong><?php echo $term->name?></strong></div>
            <!-- Grid Container -->
            <div class="grid_container_columns">
                <?php
                $aux_ = 0;
                foreach($current_child as $child_id):

                    if($aux_ <= 2):

                        $args_current_child = array(
                            'posts_per_page' => 3,
                            'post_type' => 'rutinas_videos',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categorias_rutinas',
                                    'field' => 'term_id',
                                    'terms' => $child_id
                                )
                            )
                        );

                        $child_content = get_term($child_id);
                        $posts_array = get_posts($args_current_child);
                        ?>
                <div class="grid_column">
                    <div class="grid_column_title">
                        <?php echo $child_content->name; ?>
                    </div>
                    <div class="grid_column_content">
                        <?php
                            if($posts_array):
                                foreach($posts_array as $post):
                            ?>
                        <div class="grid_column_content__item">
                            <div class="grid_column_content__item__video">
                                <?php echo get_field('video', $post->ID); ?>
                            </div>
                            <div class="grid_column_content__item__name">
                                <?php echo $post->post_title; ?>
                            </div>
                        </div>
                        <?php
                                wp_reset_postdata();
                                endforeach;
                            endif;
                            ?>
                    </div>
                </div>
                <?php
                    $aux_ ++;
                    endif;
                wp_reset_postdata();
                endforeach;
                ?>
            </div><!-- Grid Container -->

            <!-- Link -->
            <a href="<?php echo get_term_link($term->term_id);?>" class="category_link">
                <img src="<?php echo get_template_directory_uri().'/img/arrow-down.png'; ?>" alt="">
            </a>
        </div><!-- item -->

        <?php
        wp_reset_postdata();
        endforeach;
        ?>


    </div><!-- Slider de videos de rutinas -->


</div>
<?php get_footer(); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<script>
$(document).ready(function() {

    $('.option-rutina').on('click', function(event) {
        event.stopPropagation();
        var position = $('#ejercicios').offset().top - 50;

        $("body, html").animate({
            scrollTop: position
        } /* speed */ );
    });


});
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.owl-carousel').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


});

var owl = $('.rutinasSlider');
owl.owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    items: 1,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash',
    autoHeight: true
})

$('.button-left').click(function() {
    owl.trigger('prev.owl.carousel');
});


$('.button-right').click(function() {
    owl.trigger('next.owl.carousel');
});
</script>
