<?php


function add_theme_scripts() {


    // Generales
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);




    // OWL CAROUSEL
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/custom/js/owl.carousel.min.js',array('jquery'), false);

    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/custom/css/owl.carousel.min.css', array(), '1.1', 'all');

    wp_enqueue_style( 'owl-carousel-theme-css', get_template_directory_uri() . '/custom/css/owl.theme.default.min.css', array(), '1.1', 'all');


    // Map block
    wp_enqueue_style( 'block-map', get_template_directory_uri() . '/custom/css/block-map.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/block-map.css' ), 'all');

    wp_enqueue_script('map-tooltip', get_template_directory_uri().'/custom/js/map-tooltip.js', array('jquery'),filemtime( get_stylesheet_directory() . '/custom/js/map-tooltip.js' ), true);

    wp_enqueue_script('jquery-draggable-custom', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array(), null, false);

    wp_enqueue_script('jquery-draggable-custom-mobile', get_template_directory_uri().'/custom/js/jquery.ui.touch-punch.min.js', array(), null, false);


     // Vaccine block
     wp_enqueue_style( 'block-vaccine', get_template_directory_uri() . '/custom/css/block-vaccine.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/block-vaccine.css' ), 'all');

    // Grid News
    wp_enqueue_style( 'grid-news', get_template_directory_uri() . '/custom/css/grid-news.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/grid-news.css' ), 'all');

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



?>
