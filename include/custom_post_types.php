<?php
/**
 * Registro de custom post types de Videos de Rutinas
 */

 function meta_rutinas_videos_posttype(){
     $labels = array(
        'name' => __('Videos de rutinas', 'textdomain'),
        'singular_name' => __('Video de rutinas', 'textdomain')
     );

     $supports = array (
         'title',
         'editor',
         'excerpt',
         'author',
         'thumbnail'
     );

    register_post_type('rutinas_videos',
        array(
            'labels' => $labels,
            'supports'            => $supports,
            'description'         => 'Videos de Rutinas de Metaboliko',
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post'
        )
    );
}

add_action('init', 'meta_rutinas_videos_posttype');

function meta_rutinas_tax(){
    register_taxonomy(
        'categorias_rutinas',
        'rutinas_videos',
        array(
            'hierarchical' => true,
            'label' => 'Categorías de Rutinas',
            'query_var' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'rutinas_videos',
            )
        )
    );
}
add_action( 'init', 'meta_rutinas_tax');

?>
