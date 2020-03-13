<?php get_header(); ?>

<!-- BLOG -->
<?php 
if ( !is_front_page() && is_home() ) {
    get_template_part('template-parts/content', 'blog');
}
?>
<!-- BLOG -->

<?php get_footer(); ?>