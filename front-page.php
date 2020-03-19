<?php get_header(); ?>
<!-- Hero Banner -->
<div class="hero-banner">
    <!-- hero title -->
    <div class="hero-title">#RecuperaTuVida</div><!-- hero title -->

    <!-- ring-overlay -->
    <div class="ring-overlay"></div><!-- ring-overlay -->

    <!-- content -->
    <div class="front-content">
        <div class="title">Quiero...</div>
        <select name="hero-select" id="hero-select" class="select-custom">
            <option>Operarme para perder peso</option>
            <option>Definición muscular</option>
            <option>No sé a qué soy candidato</option>
            <option>Mejorar mi imagen</option>
            <option>Perder peso</option>
        </select>
    </div><!-- content -->



    <!-- social-media -->
    <div class="social-media">
        <div class="links">
            <a href="https://www.facebook.com/clinicametabolikO/" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/facebook-white.png'; ?>" alt=""></a>
            <a href="https://twitter.com/metaboliko" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/twitter-white.png'; ?>" alt=""></a>
            <a href="https://mx.linkedin.com/company/cl%C3%ADnica-metaboliko" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/linkedin-white.png'; ?>" alt=""></a>
            <a href="https://www.instagram.com/clinicametaboliko/" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/instagram-white.png'; ?>" alt=""></a>
            <a href="https://www.youtube.com/channel/UCV7KykfT6_opfuXtW8TWtZA" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/youtube-white.png'; ?>" alt=""></a>
            <a href="https://www.pinterest.com.mx/metaboliko/" target="_blank"><img
                    src="<?php echo get_template_directory_uri().'/img/icons/pinterest-white.png'; ?>" alt=""></a>
        </div>
    </div><!-- social-media -->
    <!-- carousel -->
    <div class="banner-carousel owl-carousel owl-theme">
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/banner.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div>
            <!-- overlay -->
        </div>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/banner.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div><!-- overlay -->
        </div>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/banner.jpg'; ?>)">
            <!-- overlay -->
            <div class="overlay"></div><!-- overlay -->
        </div>
    </div><!-- carousel -->

</div><!-- Hero Banner -->

<!-- Posts -->
<div class="posts-container">
    <?php  
    $post_args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'principal'
    );
    $the_query = new WP_Query($post_args);    
    ?>

    <?php if($the_query->have_posts()):?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <div class="overlay"></div>
                    <div class="text">
                        <div class="title"><?php the_title(); ?></div>
                        <div class="desc"><?php the_excerpt(); ?></div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div><!-- Posts -->

<!-- Bascula -->
<div class="bascule-container" id="bascula">
    <!-- Behinde -->
    <div class="content-behinde">
        <div class="shape"></div>
        <div class="text">
            <div class="text-option active" id="option0">
                <div class="title">
                    operarme para <br>
                    <strong>perder peso</strong>
                </div>
                <div class="desc">
                    Existen diferentes cirugías para bajar de peso
                    que se llevan a cabo en la clínica Metaboliko,
                    estas son diseñadas para pacientes que cumplen
                    con ciertos criterios, por lo que es importante conocer
                    a profundidad cada caso y así determinar cuál es la mejor opción
                    para cada persona. Entre las cirugías para bajar de peso
                    que realizamos se encuentran:
                    <ul>
                        <li><span>BANDA GÁSTRICA</span></li>
                        <li><span>MANGA GÁSTRICA</span></li>
                        <li><span>BYPASS GÁSTRICO</span></li>
                    </ul>
                </div>
            </div>
            <div class="text-option" id="option1">
                <div class="title">
                    Definición<br>
                    <strong>muscular</strong>
                </div>
                <div class="desc">
                    Existen diferentes cirugías para bajar de peso
                    que se llevan a cabo en la clínica Metaboliko,
                    estas son diseñadas para pacientes que cumplen
                    con ciertos criterios, por lo que es importante conocer
                    a profundidad cada caso y así determinar cuál es la mejor opción
                    para cada persona. Entre las cirugías para bajar de peso
                    que realizamos se encuentran:
                    <ul>
                        <li><span>BANDA GÁSTRICA</span></li>
                        <li><span>MANGA GÁSTRICA</span></li>
                        <li><span>BYPASS GÁSTRICO</span></li>
                    </ul>
                </div>
            </div>
            <div class="text-option" id="option2">
                <div class="title">
                    No sé a qué <br>
                    <strong>soy candidat@</strong>
                </div>
                <div class="desc">
                    Existen diferentes cirugías para bajar de peso
                    que se llevan a cabo en la clínica Metaboliko,
                    estas son diseñadas para pacientes que cumplen
                    con ciertos criterios, por lo que es importante conocer
                    a profundidad cada caso y así determinar cuál es la mejor opción
                    para cada persona. Entre las cirugías para bajar de peso
                    que realizamos se encuentran:
                    <ul>
                        <li><span>BANDA GÁSTRICA</span></li>
                        <li><span>MANGA GÁSTRICA</span></li>
                        <li><span>BYPASS GÁSTRICO</span></li>
                    </ul>
                </div>
            </div>
            <div class="text-option" id="option3">
                <div class="title">
                    Mejorar <br>
                    <strong>mi imagen</strong>
                </div>
                <div class="desc">
                    Existen diferentes cirugías para bajar de peso
                    que se llevan a cabo en la clínica Metaboliko,
                    estas son diseñadas para pacientes que cumplen
                    con ciertos criterios, por lo que es importante conocer
                    a profundidad cada caso y así determinar cuál es la mejor opción
                    para cada persona. Entre las cirugías para bajar de peso
                    que realizamos se encuentran:
                    <ul>
                        <li><span>BANDA GÁSTRICA</span></li>
                        <li><span>MANGA GÁSTRICA</span></li>
                        <li><span>BYPASS GÁSTRICO</span></li>
                    </ul>
                </div>
            </div>
            <div class="text-option" id="option4">
                <div class="title">
                    perder <br>
                    <strong>peso</strong>
                </div>
                <div class="desc">
                    Existen diferentes cirugías para bajar de peso
                    que se llevan a cabo en la clínica Metaboliko,
                    estas son diseñadas para pacientes que cumplen
                    con ciertos criterios, por lo que es importante conocer
                    a profundidad cada caso y así determinar cuál es la mejor opción
                    para cada persona. Entre las cirugías para bajar de peso
                    que realizamos se encuentran:
                    <ul>
                        <li><span>BANDA GÁSTRICA</span></li>
                        <li><span>MANGA GÁSTRICA</span></li>
                        <li><span>BYPASS GÁSTRICO</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shape-blue">
            <img src="<?php echo get_template_directory_uri().'/img/blue-shape.png'?>" alt="">
        </div>
    </div><!-- Behinde -->


    <!-- Front -->
    <div class="content-front">
        <!-- Options -->
        <div class="options">
            <button class="option" id="option1" data-item="0">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <strong>operarme para</strong>
                <br>perder peso
            </button>

            <button class="option" id="option2" data-item="1">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <strong>definición</strong> <br> muscular
            </button>

            <button class="option" id="option3" data-item="2">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <strong>no sé a qué</strong> <br> soy candidat@
            </button>

            <button class="option" id="option4" data-item="3">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <strong>mejorar</strong> <br>mi imagen
            </button>

            <button class="option" id="option5" data-item="4">
                <div class="shape-line-bottom"></div>
                <div class="shape-line"></div>
                <strong>perder</strong> peso
            </button>
        </div><!-- Options -->

        <!-- Bascula -->
        <div class="bascule">
            <img src="<?php echo get_template_directory_uri().'/img/bascula.png'?>" alt="">
        </div><!-- Bascula -->

        <!-- Mujer -->
        <div class="woman">
            <img src="<?php echo get_template_directory_uri().'/img/woman.png'?>" alt="">
        </div><!-- Mujer -->

    </div><!-- Front -->
</div><!-- Bascula -->



<!-- Quien es el DR Fraga -->
<div class="who-is-container">
    <div class="col">
        <div class="figure-container">
            <img src="<?php echo get_template_directory_uri().'/img/ring-bg.png'; ?>" alt="" class="ring">
            <div class="figure">
                <img src="<?php echo get_template_directory_uri().'/img/dr-fraga-cicle-bg.png'; ?>" alt="" class="back">
                <img src="<?php echo get_template_directory_uri().'/img/dr-fraga-figure.png'; ?>" alt="" class="dr">
            </div>
        </div>
    </div>
    <div class="col">
        <div class="content">
            <div class="title">
                <small>¿Quien es</small> <br> EL DR. FRAGA
            </div>
            <div class="desc">
                Especialista en cirugía laparoscópica bariátrica
                y metabólica. En clínica Metabóliko tenemos
                como prioridad mejorar la calidad de vida de todos nuestros pacientes. Además, contamos
                con una filosofía la cual es que nuestros pacientes vivan saludables y felices.
            </div>
            <a class="button" href="#">conoce más</a>
        </div>
    </div>
</div><!-- Quien es el DR Fraga -->

<!-- Direccion -->
<?php get_template_part('template-parts/content', 'address')?>
<!-- Direccion -->

<!-- Contacto -->
<?php get_template_part('template-parts/content', 'contact')?>
<!-- Contacto -->



<?php 

// if ( have_posts() ) {

//     while ( have_posts() ) {
//         the_post();

//         the_content();
//     }
// }
?>
<script>
$('#hero-select').CustomSelect(
    'Cirugía para perder peso'
);

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
});
</script>
<?php get_footer(); ?>