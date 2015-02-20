<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'base', '/wp-content/themes/sunrise-villa/assets/css/base.css' );
    wp_enqueue_style( 'fontawesome', '/wp-content/themes/sunrise-villa/assets/css/font-awesome.min.css' );
    wp_enqueue_script( 'cycle2', '/wp-content/themes/sunrise-villa/assets/js/jquery.cycle2.min.js', array('jquery') );
    wp_enqueue_script( 'cycle2_carousel', '/wp-content/themes/sunrise-villa/assets/js/jquery.cycle2.carousel.min.js', array('jquery', 'cycle2') );
    wp_enqueue_script( 'scripts', '/wp-content/themes/sunrise-villa/assets/js/scripts.js', array('jquery') );
}

add_image_size('gallery', 365, 275, true);

?>