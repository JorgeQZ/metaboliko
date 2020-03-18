<?php $img_featured = get_the_post_thumbnail_url();?>
<?php $post_type = get_post_type(); ?>

<div class="hero-banner" style="background-image: url(<?php echo $img_featured; ?>">

    <?php if($post_type == 'post'): ?>
    <!-- Titulo -->
    <div class="title">
        <?php the_title(); ?>
    </div><!-- Titulo -->

    <?php else: ?>

    <?php 
    $contenido = get_field('contenido'); 
    switch($contenido):
        case "Titulo": 
                ?>
                <!-- Titulo -->
                <div class="title">
                        <?php the_title(); ?>
                </div><!-- Titulo -->
                <?php
                break;
        case "Texto":
                ?>
                <!-- Content Text -->
                <div class="content_text">
                       <?php echo get_field('texto'); ?>
                </div><!-- Content Text -->
                <?php  
                break;

        case "Imagen y Texto": ?>
                        <?php $img_text = get_field('imagen_y_texto'); ?>
                        <!-- Imagen y Texto -->
                        <div class="image_texto">
                                <div class="col">
                                        <img src="<?php echo $img_text['imagen']; ?>">
                                </div>
                                <div class="col">
                                        <div>
                                        <?php echo $img_text['texto']; ?>
                                        </div>
                                </div>
                        </div><!-- Imagen y Texto -->
                <?php break;

        case "Texto y Forma de contacto": 
                ?>
                <!-- Text & Contact Form -->
                <div class="content_text_contactform">
                       <?php $content = get_field('texto_y_forma_de_contacto'); ?>
                       <div class="col">
                               <div>
                                        <?php echo $content['texto']?>
                               </div>
                       </div>
                       
                        <div class="contact-form">
                                <?php echo $content['forma_de_contacto']?>   
                        </div>
                       
                </div><!-- Text & Contact Form -->
        <?php
        break;
        case "Encabezado Inferior": 
                ?>
                <div class="hero-title">
                        <?php echo get_field('encabezado_inferior'); ?>
                </div>
                <?php
                break;
    endswitch; 
    ?>

    <?php endif; ?>


    <!-- social-media -->
    <div class="social-media">
        <div class="links">
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/facebook-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/twitter-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/linkedin-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/instagram-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/youtube-white.png'; ?>" alt=""></a>
            <a href="#" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/pinterest-white.png'; ?>" alt=""></a>
        </div>
    </div><!-- social-media -->
</div>
