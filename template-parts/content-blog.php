<div class="blog-container">
    <div class="col">


        <!-- carousel -->
        <div class="post-carousel owl-carousel owl-theme">

            <?php  
                $post_args = array(
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'slider'
                );
            
                $the_query = new WP_Query($post_args);
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
            <!-- Item -->
            <div class="item"
                style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->

                <!-- Content -->
                <div class="content">
                    <div class="title">
                        <?php the_title(); ?>
                    </div>
                    <div class="vermas">
                        <a href="<?php the_permalink() ?>">
                            <span>
                                Ver más
                            </span>
                        </a>
                    </div>
                </div><!-- Content -->
            </div><!-- Item -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div><!-- carousel -->
    </div>

    <!-- Column -->
    <div class="col">

        <?php  
        $post_args = array(
            'posts_per_page' => 4,
            'post_type' => 'post',
            'post_status' => 'publish'
        );
     
        $the_query = new WP_Query($post_args);
        ?>

        <!-- Grid -->
        <div class="grid">
            <?php 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                
                ?>
            <!-- Item -->
            <div class="item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
                <!-- Content -->
                <div class="content">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="vermas"><a href="<?php the_permalink() ?>">Ver más</a></div>
                </div><!-- Content -->
            </div><!-- Item -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
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