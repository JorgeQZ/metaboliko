<?php 

include_once ('widgets/icons-social-media.php');
include_once ('widgets/contact.php');

add_image_size( 'footer-logo', 250, 36, true );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), '1.1', 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
   
    wp_enqueue_script('customSelect', get_template_directory_uri().'/js/customSelect.js', array('jquery'),'1.1', false);
 
    if(is_front_page()){
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    }

    // Blog Post
    if(is_singular() && !is_front_page() && !is_home() && !is_page()){
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css', array(), '1.1', 'all');
        wp_enqueue_style( 'single', get_template_directory_uri() . '/css/single.css', array(), '1.1', 'all');

        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    }

    // Blog 
    if ( !is_front_page() && is_home() ) {
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    }

    // Page 
    if(is_page()){
        wp_enqueue_style( 'single', get_template_directory_uri() . '/css/single.css', array(), '1.1', 'all');
    }
    // Conocenos
    if (is_page_template('page-conocenos.php') ) {
        wp_enqueue_style( 'conocenos', get_template_directory_uri() . '/css/conocenos.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.green.min', get_template_directory_uri() . '/css/owl.theme.green.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel', get_template_directory_uri().'/js/owl.carousel.js', array('jquery'),'1.1', true);
        wp_enqueue_script('video', get_template_directory_uri().'/js/video.js', array('jquery'),'1.1', true);
    }
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'),'1.1', false);

    if(is_page_template('page-testimonios.php')){
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), '1.1', 'all');
        wp_enqueue_style( 'testimonios', get_template_directory_uri() . '/css/testimonios.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    }

    if(is_page_template('page-cirugias.php')){
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), '1.1', 'all');
        wp_enqueue_style( 'cirugias', get_template_directory_uri() . '/css/cirugias.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    }

    if(is_page_template('page-sistema.php')){
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), '1.1', 'all');
        wp_enqueue_style( 'sistema', get_template_directory_uri() . '/css/sistema.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    }

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function mtblko_menu() {
    register_nav_menu('header',__( 'Header' ));
    register_nav_menu('footer',__( 'Footer' ));
    register_nav_menu('legales',__( 'Legales' ));
}
add_action( 'init', 'mtblko_menu' );


function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Contacto Columna 1', 'wpb' ),
        'id' => 'ccolumn-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Contacto Columna 2', 'wpb' ),
        'id' => 'ccolumn-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Columna 1', 'wpb' ),
        'id' => 'fcolumn-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer Columna 2', 'wpb'),
        'id' => 'fcolumn-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' =>__( 'Footer Columna 3', 'wpb'),
        'id' => 'fcolumn-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 4', 'wpb'),
        'id' => 'fcolumn-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Columna 5', 'wpb'),
        'id' => 'fcolumn-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Column 5', 'wpb'),
        'id' => 'fcolumn-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
