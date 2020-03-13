<?php 
get_header(); 
get_template_part('template-parts/banner', 'hero');
?>
<div class="single-wrapper">
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>
</div>

<?php 
get_template_part('template-parts/content', 'blog');
get_footer(); 
?>