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
</div><!-- Video -->
<?php endif; ?>

<!-- Contacto -->
<?php get_template_part('template-parts/content','contact') ?>
<!-- Contacto -->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.address-container .col div, .video-container .title, .video-container .video-carousel, .contact-container .col{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.address-container .col div, .video-container .title, .video-container .video-carousel').waypoint(function() {
        $j(this).toggleClass('fadeInUp animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


	$j('.contact-container .col:first-child').waypoint(function() {
        $j(this).toggleClass('fadeInLeft animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contact-container .col:last-child').waypoint(function() {
        $j(this).toggleClass('fadeInRight animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


});

</script>

<?php get_footer(); ?>