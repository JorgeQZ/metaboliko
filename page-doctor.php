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
            <small>
                <strong>PERFIL</strong><br>
            </small>
            PROFESIONAL
        </div>

        <div class="text">
            El Dr. Hernán Fraga, destacado profesional
            de la salud, con diversos estudios y certificaciones, con excelencia académica tanto de especialidad
            en cirugía general como de laparoscopía avanzada, enfocados a la solución de problemas de salud mediante el
            debido proceso de prevención,
            el diagnóstico, tratamiento y la rehabilitación
            de sus pacientes, manteniendo siempre
            presentes los valores de ética, respeto,
            honestidad y responsabilidad.
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