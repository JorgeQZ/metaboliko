<?php

/**
 * Taxonomías
 */

get_header();?>
<?php if(get_post_type() === 'rutinas_videos'): ?>

<?php get_template_part('template-parts/banner','hero') ?>

<?php
$content_tax = get_queried_object();
$parent_id = $content_tax->term_id;
$parent_name = $content_tax->taxonomy;
$children = get_term_children($parent_id, $parent_name);

?>

<div class="grid_subtax">
    <div class="title">ejercicios para <br><strong></div>
    <!-- Grid Container -->
    <div class="title_tax"><?php echo $content_tax->name ?></div>
    <div class="grid_container_columns">
        <?php
            foreach($children as $child_id):
                    $args_current_child = array(
                        'posts_per_page' => -1,
                        'post_type' => 'rutinas_videos',
                        'orderby'   => 'title',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorias_rutinas',
                                'field' => 'term_id',
                                'terms' => $child_id
                            )
                        )
                    );

                    $child_content = get_term($child_id);
                    $posts_array = get_posts($args_current_child);
                    ?>
        <div class="grid_column">
            <div class="grid_column_title">
                <?php echo $child_content->name; ?>
            </div>
            <div class="grid_column_content">
                <?php
                if($posts_array):
                    foreach($posts_array as $post): ?>
                <div class="grid_column_content__item">
                    <div class="grid_column_content__item__video">
                        <?php echo get_field('video', $post->ID); ?>
                    </div>
                    <div class="grid_column_content__item__name">
                        <?php echo $post->post_title; ?>
                    </div>
                </div>
                <?php
                wp_reset_postdata();
            endforeach;
        endif;
                                ?>
            </div>
        </div>
        <?php
                wp_reset_postdata();
                endforeach;
                ?>
    </div><!-- Grid Container -->
</div>
<?php endif; ?>

<?php get_footer(); ?>
