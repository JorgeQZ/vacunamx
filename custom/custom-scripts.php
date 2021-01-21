<?php


function add_theme_scripts() {

    // Generales
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);


    // OWL CAROUSEL
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/custom/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/custom/js/owl.carousel.min.js' ), false);

    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/custom/css/owl.carousel.min.css', array(), '1.1', 'all');

    wp_enqueue_style( 'owl-carousel-theme-css', get_template_directory_uri() . '/custom/css/owl.theme.default.min.css', array(), '1.1', 'all');


    wp_enqueue_style( 'grid-news', get_template_directory_uri() . '/custom/css/grid-news.css', filemtime( get_stylesheet_directory() . '/custom/css/grid-news.css' ), '1.1', 'all');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
