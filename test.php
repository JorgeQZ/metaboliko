<?php
/**
 * Template Name: Test
 */



$terms = get_terms(
    array(
        'taxonomy' => 'categorias_rutinas',
        'parent' => 0
        )
);

echo '<pre>';
print_r($terms);
echo '</pre>';



foreach($terms as $term){
    $current_parent_id = $term->term_taxonomy_id;
    $current_parent_name = $term->taxonomy;
    $current_child = get_term_children($current_parent_id, $current_parent_name);
    echo get_term_link($term->term_id);

    echo '<pre>';
    print_r($current_child);
    echo'</pre>';

    foreach($current_child as $child_id){
        $args_current_child = array(
            'posts_per_page' => 3,
            'post_type' => 'rutinas_videos',
            'tax_query' => array(
                array(
                    'taxonomy' => 'categorias_rutinas',
                    'field' => 'term_id',
                    'terms' => $child_id
                )
            )
        );

        echo '<hr>';
        echo $child_id;
        $child_content = get_term( $child_id );

        echo '<pre>';
        echo $child_content->name;
        echo '</pre>';

        $posts_array = get_posts($args_current_child);
        echo '<pre>';
        print_r($posts_array);
        echo '</pre>';
    }
}

echo '<hr>';

?>
