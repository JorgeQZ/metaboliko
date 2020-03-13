<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>

    <header class="<?php if ( is_user_logged_in() ){ echo 'mt';} ?>">
        <a href="#" class="brand-logo">
            <img src="<?php echo get_template_directory_uri().'/img/logo-header.png'; ?>" alt="">
        </a>
        <div class="menu-button" id="menu-button">
            <span></span>
            <span></span>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'header', ) ); ?>
    </header>
    