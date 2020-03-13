<?php 
/* Template Name: Conocenos
*/
?>

<?php get_header(); ?>
<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->

<!-- Address -->
<?php get_template_part('template-parts/content','address') ?>
<!-- Address -->

<!-- Video -->
<div class="video-container">
    <!-- Titulo -->
    <div class="title">¿Qué hacemos?</div><!-- Titulo -->

    <!-- carousel -->
    <div class="video-carousel owl-carousel owl-theme">
        <!-- Item -->
        <div class="item">
            <div class="customVideo">
                <video>
                    <source src="<?php echo get_template_directory_uri(); ?>/video/video.MP4" type="video/mp4" preload>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div><!-- Item -->

        <!-- Item -->
        <div class="item">
            <div class="customVideo">
                <video>
                    <source src="<?php echo get_template_directory_uri(); ?>/video/video.MP4" type="video/mp4" preload>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div><!-- Item -->

        <!-- Item -->
        <div class="item">
            <div class="customVideo">
                <video>
                    <source src="<?php echo get_template_directory_uri(); ?>/video/video.MP4" type="video/mp4" preload>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div><!-- Item -->

    </div><!-- carousel -->
</div><!-- Video -->


<!-- Contacto -->
<?php get_template_part('template-parts/content','contact') ?>
<!-- Contacto -->

<?php get_footer(); ?>