<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'events',
         array(
                'labels' => array( // добавляем новые элементы в административную частьку
                'name' => __( 'События' ),
                'singular_name' => __( 'Событие' ),
                'has_archive' => true,
                'add_new' => 'Добавить событие',
                'not_found' => 'Ничего не найдено',
                'not_found_in_trash' => 'В корзине не найдено событий'
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => array( //добавляем элементы в редактор
                    'title',
                    'editor',
                    'author',
                    'trackbacks',
                    'thumbnail',
                    'page-attributes',
                    'post-formats',
                    'custom-fields'
                ),
               'taxonomies' => array('category') //добавляем к записям необходимый набор таксономий
           ));
}


add_filter( 'template_include', 'include_template_function', 1 );

function include_template_function( $template_path ) {
    if ( get_post_type() == 'events' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-events.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-events.php';
            }
        }
    }
    return $template_path;
}
