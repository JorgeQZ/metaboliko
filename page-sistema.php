<?php
/**
* Template Name: Sistema
* 
*/
?>
<?php get_header(); 
$ID = get_the_ID();
?>

<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->

<div class="contenedor-general-tenedor">
    <img src="<?php echo get_template_directory_uri().'/img/fondo-tenedor.jpg'; ?>" alt="">

<div class="contenedor-items-global">


    <?php if( have_rows('sistema', $ID) ): 
    $i = 1;    
    ?>

    <?php while( have_rows('sistema', $ID) ): the_row(); 
        $contenido = get_sub_field('contenido');	
        $galeria_videos = get_sub_field('galeria_videos');	

    ?>


    <div class="contenedor-item-global <?php if($i == 1) echo 'active' ?>">
        <div class="contenedor-info">
            <div class="enc">
                <?php echo $contenido['titulo']; ?>
                <span>
                    <?php echo $contenido['titulo']; ?>
                </span>
            </div>
            <div class="desc">
                <?php echo $contenido['descripcion']; ?>
            </div>
        </div>
        
        <div class="contenedor-general-videos">
            <div class="contenedor-video">
                <div id="slider-videos" class="video-carousel owl-carousel owl-theme slider-videos" nav="true">

                <?php
                    if( have_rows('galeria_videos') ): while ( have_rows('galeria_videos') ) : the_row(); 
                            ?>
                            <!--
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen el SISTEMA PROTEINADO logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                            -->
                                <!-- Item -->

                                <div class="cont-item">
                                    <div class="customVideo media">
                                        <video>
                                            <source src="<?php echo get_sub_field('video'); ?>" preload>
                                            Your browser does not support the video tag.
                                        </video>                                    
                                    </div>
                                    <div class="info">
                                        <p>
                                            <?php echo get_sub_field('descripcion_video'); ?>
                                        </p>
                                    </div>
                                </div>
                                <!-- Item -->

                            <?php
                    endwhile; endif;
                ?>

                <!--
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen el SISTEMA PROTEINADO logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen el SISTEMA PROTEINADO logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>


    <?php
    $i++; 
    endwhile; ?>
    <?php endif; ?>

<!--
    <div class="contenedor-item-global active">
        <div class="contenedor-info">
            <p class="enc">
                    <small>Sistema</small> <br> Proteinado
                    <span>
                        <small>Sistema</small> <br> Proteinado
                    </span>
                </p>
            <p class="desc">
                El Sistema Proteinado es un tratamiento médico estricto, en el cual los pacientes 
                entran en un estado metabólico controlado bajo estricta supervisión médica, 
                logrando que su cuerpo gaste la GRASA almacenada en su cuerpo como fuente de energía. 
                <br> <br>
                Este cambio metabólico tiene como fin que el paciente pierda peso sin tener hambre, 
                pero lo más importante viene después, ya que el paciente debe aprender a comer en 
                forma intuitiva, es decir, en base a lo que haga en su día a día y en este proceso 
                subir masa muscular con el fin de que el músculo le permita quemar más calorías 
                y sea mas facíl mantener su peso ideal.
            </p>
        </div>
        
        <div class="contenedor-general-videos">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen el SISTEMA PROTEINADO logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen el SISTEMA PROTEINADO logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="contenedor-item-global">
        <div class="contenedor-info">
            <p class="enc">
                    <small>Masa</small> <br> Muscular
                    <span>
                        <small>Masa</small> <br> Muscular
                    </span>
                </p>
            <p class="desc">
                La masa muscular es un tratamiento médico estricto, en el cual los pacientes 
                entran en un estado metabólico controlado bajo estricta supervisión médica, 
                logrando que su cuerpo gaste la GRASA almacenada en su cuerpo como fuente de energía. 
                <br> <br>
                Este cambio metabólico tiene como fin que el paciente pierda peso sin tener hambre, 
                pero lo más importante viene después, ya que el paciente debe aprender a comer en 
                forma intuitiva, es decir, en base a lo que haga en su día a día y en este proceso 
                subir masa muscular con el fin de que el músculo le permita quemar más calorías 
                y sea mas facíl mantener su peso ideal.
            </p>
        </div>
        
        <div class="contenedor-general-videos">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen la MASA MUSCULAR logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen la MASA MUSCULAR logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-item-global">
        <div class="contenedor-info">
            <p class="enc">
                    <small>Mejora de</small> <br> Imagen
                    <span>
                        <small>Mejora de</small> <br> Imagen
                    </span>
                </p>
            <p class="desc">
                La masa muscular es un tratamiento médico estricto, en el cual los pacientes 
                entran en un estado metabólico controlado bajo estricta supervisión médica, 
                logrando que su cuerpo gaste la GRASA almacenada en su cuerpo como fuente de energía. 
                <br> <br>
                Este cambio metabólico tiene como fin que el paciente pierda peso sin tener hambre, 
                pero lo más importante viene después, ya que el paciente debe aprender a comer en 
                forma intuitiva, es decir, en base a lo que haga en su día a día y en este proceso 
                subir masa muscular con el fin de que el músculo le permita quemar más calorías 
                y sea mas facíl mantener su peso ideal.
            </p>
        </div>
        
        <div class="contenedor-general-videos">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen la MASA MUSCULAR logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen la MASA MUSCULAR logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-item-global">
        <div class="contenedor-info">
            <p class="enc">
                    <small>Definición</small> <br> Muscular
                    <span>
                        <small>Definición</small> <br> Muscular
                    </span>
                </p>
            <p class="desc">
                La masa muscular es un tratamiento médico estricto, en el cual los pacientes 
                entran en un estado metabólico controlado bajo estricta supervisión médica, 
                logrando que su cuerpo gaste la GRASA almacenada en su cuerpo como fuente de energía. 
                <br> <br>
                Este cambio metabólico tiene como fin que el paciente pierda peso sin tener hambre, 
                pero lo más importante viene después, ya que el paciente debe aprender a comer en 
                forma intuitiva, es decir, en base a lo que haga en su día a día y en este proceso 
                subir masa muscular con el fin de que el músculo le permita quemar más calorías 
                y sea mas facíl mantener su peso ideal.
            </p>
        </div>
        
        <div class="contenedor-general-videos">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen la MASA MUSCULAR logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/sistema-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            En resumen la MASA MUSCULAR logra hacer que el paciente pierda grasa sin tener hambre para después 
                            aprender a comer en forma intuitiva mientras sube su masa muscular en las areas que mayormente le benefician, 
                            por ejemplo en una mujer pierna y nalga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
</div>

    <div class="contenedor-items-slider">

    <?php if( have_rows('sistema', $ID) ): ?>

    <?php while( have_rows('sistema', $ID) ): the_row(); 
        $contenido = get_sub_field('contenido');	
        $galeria_videos = get_sub_field('galeria_videos');	

    ?>

    <div class="item-slider" style="background-image: url(<?php echo $contenido['fondo_boton_item']; ?>);">
        <?php echo $contenido['titulo']; ?>
    </div>

    <?php
    endwhile; ?>
    <?php endif; ?>

<!--
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item-slidersistema.jpg'; ?>);">
            <p>
            Perder <br> <span>Peso</span>
            </p>
        </div>
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item2-slidersistema.jpg'; ?>);">
            <p>
            Incremento de <br> <span>Masa Muscular</span>
            </p>
        </div>
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item3-slidersistema.jpg'; ?>);">
            <p>
            Mejora de <br> <span>Imagen</span>
            </p>
        </div>
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item4-slidersistema.jpg'; ?>);">
            <p>
            Definición <br> <span>Muscular</span>
            </p>
        </div>
-->
    </div>
</div>


<div class="contenedor-general-galeria">
    <div class="cont-galeria">
        <div id="slider-galeria" class="owl-carousel owl-theme">

        <?php 
                    $rows = count(get_field('galeria', $ID));
                    $i = 1;
                    ?>
                    <?php if( have_rows('galeria', $ID) ): ?>

                    <?php while( have_rows('galeria', $ID) ): the_row(); 
                        $imagen = get_sub_field('imagen');
                    ?>
                        <?php
                        if($i == 1)
                        {
                        ?>
                        <div class="cont-slide">
                        <?php
                        }
                        ?>
                        <div class="cont-img">
                            <img src="<?php echo $imagen ?>" alt="">
                        </div>
                        <?php
                        if($i == 10)
                        {
                        ?>
                        </div>
                        <?php
                        }
                        ?>
                    <?php
                    if($i < 10) 
                    $i++;
                    else
                    $i = 1 
                    ?>    
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    if($i != 1)
                    {
                    ?>
                    </div>
                    <?php
                    }
                    ?>
<!--            
            <div class="cont-slide">
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria2.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria3.jpg'; ?>" alt="">
                </div>
                <div class="cont-img">
                    <img src="<?php echo get_template_directory_uri().'/img/img-galeria.jpg'; ?>" alt="">
                </div>

-->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>

$(document).ready(function() {
    $(".banner-carousel").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true
    });

    
/*
    $(".slider-videos").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        nav:true,
        navText : ["<img src='<?php echo get_template_directory_uri().'/img/arrowl-verde-video.png'; ?>'>","<img src='<?php echo get_template_directory_uri().'/img/arrowr-verde-video.png'; ?>'>"],
        dots: false,
        autoplayHoverPause: true
    });
*/

    $( ".video-carousel .owl-prev").html("<img src='<?php echo get_template_directory_uri().'/img/arrowl-verde-video.png'; ?>'>");
    $( ".video-carousel .owl-next").html("<img src='<?php echo get_template_directory_uri().'/img/arrowr-verde-video.png'; ?>'>");


    $("#slider-galeria").owlCarousel({
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 450,
        loop: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true
    });


    $(".contenedor-general-tenedor .contenedor-items-slider .item-slider").each(function(index){
        $(this).click(function(){
            $(".contenedor-item-global").removeClass("active");
            $(".contenedor-item-global").eq(index).addClass("active");
        });
    });


});
</script>