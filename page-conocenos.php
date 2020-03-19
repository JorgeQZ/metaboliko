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
    <div class="video-carousel owl-carousel owl-theme">
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

<?php get_footer(); ?>