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
<?php 
$rows = get_field('videos' );
if($rows) : ?>
<div class="video-container">
    <!-- Titulo -->
    <div class="title">¿Qué hacemos?</div><!-- Titulo -->
<div class="cont-video-carousel">
    <!-- carousel -->
    <div class="video-carousel owl-carousel owl-theme" dots="true">
    <?php foreach($rows as $row): ?>
        <!-- Item -->
        <div class="item">
            <div class="customVideo">
                <video controls>
                    <source src="<?php echo $row['video']?>" type="video/mp4" preload>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div><!-- Item -->
    <?php endforeach; ?>
    </div><!-- carousel -->
</div>
</div><!-- Video -->
<?php endif; ?>

<!-- Contacto -->
<?php get_template_part('template-parts/content','contact') ?>
<!-- Contacto -->

<?php get_footer(); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.address-container .col div, .video-container .title, .cont-video-carousel, .contact-container .col, .hero-banner .content_text{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.address-container .col div, .video-container .title, .cont-video-carousel, .hero-banner .content_text').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


	$j('.contact-container .col:first-child').waypoint(function() {
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