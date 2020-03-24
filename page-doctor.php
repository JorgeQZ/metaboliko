<?php 
/* Template Name: Dr Fraga
*/
?>

<?php get_header(); ?>

<!-- Hero -->
<?php get_template_part('template-parts/banner', 'hero'); ?>
<!-- Hero -->

<!-- Content -->
<div class="content-dr">
    <div class="content">
        <div class="title">
            <?php the_field('titulo')?>
        </div>

        <div class="text">
            <?php the_field('descripcion')?>
        </div>
    </div>
</div><!-- Content -->
<!-- Direccion -->
<?php get_template_part('template-parts/content', 'address')?>
<!-- Direccion -->

<!-- Contacto -->
<?php get_template_part('template-parts/content', 'contact'); ?>
<!-- Contacto -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.content-dr .content, .address-container .col div, .contact-container .col, .hero-banner .image_texto{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.address-container .col div, .hero-banner .image_texto').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


	$j('.content-dr .content, .contact-container .col:first-child').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contact-container .col:last-child').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


});

</script>

<?php get_footer(); ?>