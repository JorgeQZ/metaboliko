<?php get_header(); ?>
<?php get_template_part('template-parts/banner','hero'); ?>
<?php get_template_part('template-parts/content','address'); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.address-container .col div, .hero-banner .content_text_contactform{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.address-container .col div, .hero-banner .content_text_contactform').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

/*
	$j('.content-dr .content, .contact-container .col:first-child').waypoint(function() {
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
*/

});

</script>

<?php get_footer(); ?>