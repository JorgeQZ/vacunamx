<?php


function add_theme_scripts() {

    // Generales
    // wp_deregister_script('jquery');
    // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

    // wp_enqueue_style( 'general', get_template_directory_uri() . '/css/general.css', array(), filemtime( get_stylesheet_directory() . '/css/general.css' ), 'all');
    // wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');

    // wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/custom.js' ), false);
    // wp_enqueue_script('search', get_template_directory_uri().'/js/search.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/search.js' ), false);
    // wp_enqueue_script('headerjs', get_template_directory_uri().'/js/header.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/header.js' ), false);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
