<?php
function uri_tedx_2018_enqueues() {

    $parent_style = 'uri-2017-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'uri-tedx-2018-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
    
    wp_enqueue_script( 'uri-tedx-2018-script', get_stylesheet_directory_uri() . '/js/script.min.js', array(), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'uri_tedx_2018_enqueues' );
?>