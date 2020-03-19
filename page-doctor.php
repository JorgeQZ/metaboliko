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

<?php get_footer(); ?>