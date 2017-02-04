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
