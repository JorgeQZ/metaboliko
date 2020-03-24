<?php
/**
* Template Name: Cirugias
* 
*/
?>
<?php get_header(); 
$ID = get_the_ID();
?>

<!-- Hero -->
<?php get_template_part('template-parts/banner','hero') ?>
<!-- Hero -->

<div class="contenedor-items-global">

    <div class="contenedor-items-slider">

    <?php if( have_rows('cirugia', $ID) ): ?>

    <?php while( have_rows('cirugia', $ID) ): the_row(); 
        $contenido = get_sub_field('contenido');	
        $galeria_videos = get_sub_field('galeria_videos');	

    ?>

    <div class="item-slider active">
        <div class="mask" style="background-image: url(<?php echo $contenido['fondo_boton_item']; ?>);"></div>
        <?php echo $contenido['titulo']; ?>
    </div>
   
    <?php
    endwhile; ?>
    <?php endif; ?>

<!--    
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item-slidercirugias.jpg'; ?>);">
            <p>
                Banda <br> <span>Gástrica</span>
            </p>
        </div>
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item2-slidercirugias.jpg'; ?>);">
            <p>
                Manga <br> <span>Gástrica</span>
            </p>
        </div>
         <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item3-slidercirugias.jpg'; ?>);">
            <p>
                Bypass <br> <span>Gástrico</span>
            </p>
        </div>
        <div class="item-slider" style="background-image: url(<?php echo get_template_directory_uri().'/img/item4-slidercirugias.jpg'; ?>);">
            <p>
                Cirugía de <br> <span>Revisión</span>
            </p>
        </div>
-->

    </div>



    <?php if( have_rows('cirugia', $ID) ): 
    $i = 1;    
    ?>

    <?php while( have_rows('cirugia', $ID) ): the_row(); 
        $contenido = get_sub_field('contenido');	
        $galeria_videos = get_sub_field('galeria_videos');	

    ?>

    <div class="contenedor-item-global active">
        <div class="contenedor-general-cirugias">
            <div class="slider-cirugias">
                <div class="cont-img">
                    <div class="img">
                        <img src="<?php echo $contenido['imagen']; ?>" alt="">
                    </div>
                </div>
                <div class="cont-info">
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
            </div>
        </div>

        <?php 
        if( have_rows('galeria_videos'))
        {
        ?>

        <div class="contenedor-general-video">
            <div class="contenedor-video">
                <div id="slider-videos" class="video-carousel owl-carousel owl-theme slider-videos" nav="true">

                <?php
                    while ( have_rows('galeria_videos') ) : the_row(); 
                            ?>
                            <!--
                                <div class="cont-item">
                                    <div class="media">
                                        <img src="<?php echo get_sub_field('video'); ?>" alt="">
                                    </div>
                                    <div class="info">
                                        <p>
                                            <?php echo get_sub_field('descripcion_video'); ?>
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
                    endwhile;
                ?>

    <!--                
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La banda gástrica por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
    -->
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>    
    <?php
    $i++; 
    endwhile; ?>
    <?php endif; ?>

<!--


    <div class="contenedor-item-global active">
        <div class="contenedor-general-cirugias">
            <div class="slider-cirugias">
                <div class="cont-img">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/img-cirugia.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-info">
                    <p class="enc">
                        <small>Banda</small> <br> Gástrica
                        <span>
                            <small>Banda</small> <br> Gástrica
                        </span>
                    </p>
                    <p class="desc">
                    Es una cirugía sencilla, segura, que hace que el paciente coma poco, se llene rápido y pierda peso. 
                    En la acutalidad no es una cirugía que se haga constantemente, pero tiene algunas indiciaciones. 
                    Es importante saber que los pacientes que estan operados de Banga Gástrica deben estar evaluados, 
                    tener seguimiento y estudios por ejemplo endoscopia pues el riesgo de reflujo es alto y 
                    con esto vienen algunos otros problemas.
                    <br> <br>
                    La banda gástrica por laparoscopia es una cirugía para bajar de peso que se lleva a cabo mediante tres 
                    incisiones en el abdomen mediante los cuales se realiza la disección del estómago y se coloca la 
                    banda gástrica, la cual rodea la parte superior de todo el estómago.
                    </p>
                </div>
            </div>
        </div>


        <div class="contenedor-general-video">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La banda gástrica por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La banda gástrica por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-item-global">
        <div class="contenedor-general-cirugias">
            <div class="slider-cirugias">
                <div class="cont-img">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/img-cirugia.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-info">
                    <p class="enc">
                        <small>Manga</small> <br> Gástrica
                        <span>
                            <small>Manga</small> <br> Gástrica
                        </span>
                    </p>
                    <p class="desc">
                    Es una cirugía sencilla, segura, que hace que el paciente coma poco, se llene rápido y pierda peso. 
                    En la acutalidad no es una cirugía que se haga constantemente, pero tiene algunas indiciaciones. 
                    Es importante saber que los pacientes que estan operados de Banga Gástrica deben estar evaluados, 
                    tener seguimiento y estudios por ejemplo endoscopia pues el riesgo de reflujo es alto y 
                    con esto vienen algunos otros problemas.
                    <br> <br>
                    La banda gástrica por laparoscopia es una cirugía para bajar de peso que se lleva a cabo mediante tres 
                    incisiones en el abdomen mediante los cuales se realiza la disección del estómago y se coloca la 
                    banda gástrica, la cual rodea la parte superior de todo el estómago.
                    </p>
                </div>
            </div>
        </div>


        <div class="contenedor-general-video">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La manga gástrica por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La manga gástrica por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-item-global">
        <div class="contenedor-general-cirugias">
            <div class="slider-cirugias">
                <div class="cont-img">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/img-cirugia.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-info">
                    <p class="enc">
                        <small>Bypass</small> <br> Gástrico
                        <span>
                            <small>Bypass</small> <br> Gástrico
                        </span>
                    </p>
                    <p class="desc">
                    Es una cirugía sencilla, segura, que hace que el paciente coma poco, se llene rápido y pierda peso. 
                    En la acutalidad no es una cirugía que se haga constantemente, pero tiene algunas indiciaciones. 
                    Es importante saber que los pacientes que estan operados de Banga Gástrica deben estar evaluados, 
                    tener seguimiento y estudios por ejemplo endoscopia pues el riesgo de reflujo es alto y 
                    con esto vienen algunos otros problemas.
                    <br> <br>
                    El bypass gástrico por laparoscopia es una cirugía para bajar de peso que se lleva a cabo mediante tres 
                    incisiones en el abdomen mediante los cuales se realiza la disección del estómago y se coloca la 
                    banda gástrica, la cual rodea la parte superior de todo el estómago.
                    </p>
                </div>
            </div>
        </div>


        <div class="contenedor-general-video">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            El bypass gástrico por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            El bypass gástrico por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-item-global">
        <div class="contenedor-general-cirugias">
            <div class="slider-cirugias">
                <div class="cont-img">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/img-cirugia.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-info">
                    <p class="enc">
                        <small>Cirugía de </small> <br> Revisión
                        <span>
                            <small>Cirugía de</small> <br> Revisión
                        </span>
                    </p>
                    <p class="desc">
                    Es una cirugía sencilla, segura, que hace que el paciente coma poco, se llene rápido y pierda peso. 
                    En la acutalidad no es una cirugía que se haga constantemente, pero tiene algunas indiciaciones. 
                    Es importante saber que los pacientes que estan operados de Banga Gástrica deben estar evaluados, 
                    tener seguimiento y estudios por ejemplo endoscopia pues el riesgo de reflujo es alto y 
                    con esto vienen algunos otros problemas.
                    <br> <br>
                    La cirugía de revisión por laparoscopia es una cirugía para bajar de peso que se lleva a cabo mediante tres 
                    incisiones en el abdomen mediante los cuales se realiza la disección del estómago y se coloca la 
                    banda gástrica, la cual rodea la parte superior de todo el estómago.
                    </p>
                </div>
            </div>
        </div>


        <div class="contenedor-general-video">
            <div class="contenedor-video">
                <div id="slider-videos" class="owl-carousel owl-theme slider-videos">
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La cirugía de revisión por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                    <div class="cont-item">
                        <div class="media">
                            <img src="<?php echo get_template_directory_uri().'/img/cirugias-video.jpg'; ?>" alt="">
                        </div>
                        <div class="info">
                            <p>
                            La cirugía de revisión por laparoscopia es una cirugía para bajar de peso 
                            que se lleva a cabo mediante tres incisiones en el abdomen mediante 
                            los cuales se realiza la disección del estómago y se coloca la banda 
                            gástrica, la cual rodea la parte superior de todo el estómago.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


-->

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
        navText : ["<img src='<?php echo get_template_directory_uri().'/img/arrowl-azul-video.png'; ?>'>","<img src='<?php echo get_template_directory_uri().'/img/arrowr-azul-video.png'; ?>'>"],
        dots: false,
        autoplayHoverPause: true
    });
*/

    $( ".video-carousel .owl-prev").html("<img src='<?php echo get_template_directory_uri().'/img/arrowl-azul-video.png'; ?>'>");
    $( ".video-carousel .owl-next").html("<img src='<?php echo get_template_directory_uri().'/img/arrowr-azul-video.png'; ?>'>");


    $(".contenedor-items-global .contenedor-items-slider .item-slider").each(function(index){
        $(this).click(function(){
            $(".contenedor-items-global .contenedor-items-slider .item-slider").removeClass("active");
            $(this).addClass("active");
            $(".contenedor-item-global").removeClass("active");
            $(".contenedor-item-global").eq(index).addClass("active");
        });
    });




    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
var tech = getUrlParameter('cirugia');


if(tech){
    $(".contenedor-item-global").each(function(index){
        if(index == tech)
        {
            $(this).addClass("active");
        }
        else{
            $(this).removeClass("active");
        }
    });
    $(".contenedor-items-global .contenedor-items-slider .item-slider").each(function(index){
        if(index == tech)
        {
            $(this).addClass("active");
        }
        else{
            $(this).removeClass("active");
        }
    });
}
else{
    $(".contenedor-item-global").each(function(index){
        if(index == 0)
        {
            $(this).addClass("active");
        }
        else{
            $(this).removeClass("active");
        }
    });
    $(".contenedor-items-global .contenedor-items-slider .item-slider").each(function(index){
        if(index == 0)
        {
            $(this).addClass("active");
        }
        else{
            $(this).removeClass("active");
        }
    });
}


});
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

<style>
.contenedor-items-global .contenedor-items-slider, .slider-cirugias, .contenedor-general-video .contenedor-video{
    opacity: 0;
}
</style>

<script>
var $j = jQuery.noConflict();

	jQuery(function($j) {

    $j('.contenedor-general-video .contenedor-video').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

	$j('.slider-cirugias').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    $j('.contenedor-items-global .contenedor-items-slider').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });


});

</script>