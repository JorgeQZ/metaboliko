<?php get_header(); ?>

<!-- BLOG -->
<?php 
if ( !is_front_page() && is_home() ) {
    ?>
<div class="blog-container">
    <div class="col">
        <!-- carousel -->
        <div class="post-carousel owl-carousel owl-theme">
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/banner.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div>
                <!-- overlay -->
            </div>
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/banner.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
            </div>
            <div class="item"
                style="background-image: url(<?php echo get_template_directory_uri().'/img/banner.jpg'; ?>)">
                <!-- overlay -->
                <div class="overlay"></div><!-- overlay -->
            </div>
        </div><!-- carousel -->
    </div>

    <div class="col">
    <!-- Grid -->
        <div class="grid">
            <div class="item">
              <!-- overlay -->
              <div class="overlay"></div><!-- overlay --></div>
            <div class="item">
              <!-- overlay -->
              <div class="overlay"></div><!-- overlay --></div>
            <div class="item">
              <!-- overlay -->
              <div class="overlay"></div><!-- overlay --></div>
            <div class="item">
              <!-- overlay -->
              <div class="overlay"></div><!-- overlay --></div>
        </div><!-- Grid -->

    </div>
</div>

<script>
$(document).ready(function() {
    $(".post-carousel").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        nav: true,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true
    });
});
</script>
<?php
  }
?>
<!-- BLOG -->

<?php get_footer(); ?>