<?php $img_featured = get_the_post_thumbnail_url();?>
<?php $post_type = get_post_type(); ?>

<div class="hero-banner" style="background-image: url(<?php echo $img_featured; ?>">

    <?php if($post_type == 'post'): ?>
    <!-- Titulo -->
    <div class="title">
        <?php the_title(); ?>
    </div><!-- Titulo -->

    <?php else: ?>

    <?php 
    $contenido = get_field('contenido'); 
    switch($contenido):
        case "Titulo": 
                ?>
                <!-- Titulo -->
                <div class="title">
                        <?php the_title(); ?>
                </div><!-- Titulo -->
                <?php
                break;
        case "Texto":
                ?>
                <!-- Titulo -->
                <div class="content_text">
                       <?php echo get_field('texto'); ?>
                </div><!-- Titulo -->
                <?php  
                break;

        case "Imagen y Texto":
                break;
    endswitch; 
    ?>

    <?php endif; ?>


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
</div>