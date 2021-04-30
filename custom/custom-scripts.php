<?php


function add_theme_scripts() {


    // Generales
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);


    wp_enqueue_style( 'generals', get_template_directory_uri() . '/custom/css/generals.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/generals.css' ), 'all');
	wp_enqueue_style( 'header', get_template_directory_uri() . '/custom/css/header.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/header.css' ), 'all');
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/custom/css/footer.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/footer.css' ), 'all');

	if(is_front_page()){
		wp_enqueue_style( 'modulos-carrusel', get_template_directory_uri() . '/custom/css/modulos-carrusel.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/modulos-carrusel.css' ), 'all');
        wp_enqueue_style( 'etapas-vacunacion', get_template_directory_uri() . '/custom/css/etapas-vacunacion.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/etapas-vacunacion.css' ), 'all');
        // Map block
        wp_enqueue_style( 'block-map', get_template_directory_uri() . '/custom/css/block-map.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/block-map.css' ), 'all');
        wp_enqueue_script('home-js', get_template_directory_uri().'/custom/js/home.js', array('jquery'),filemtime( get_stylesheet_directory() . '/custom/js/home.js' ), true);
        wp_enqueue_script('map-tooltip', get_template_directory_uri().'/custom/js/map-tooltip.js', array('jquery'),filemtime( get_stylesheet_directory() . '/custom/js/map-tooltip.js' ), true);
        wp_enqueue_script('jquery-draggable-custom', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array(), null, false);
        wp_enqueue_script('jquery-draggable-custom-mobile', get_template_directory_uri().'/custom/js/jquery.ui.touch-punch.min.js', array(), null, false);
        // Vaccine block
        wp_enqueue_style( 'block-vaccine', get_template_directory_uri() . '/custom/css/block-vaccine.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/block-vaccine.css' ), 'all');
        // Grid News
        wp_enqueue_style( 'grid-news', get_template_directory_uri() . '/custom/css/grid-news.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/grid-news.css' ), 'all');
	}
	else{
        wp_enqueue_style( 'page', get_template_directory_uri() . '/custom/css/page.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/page.css' ), 'all');
        wp_enqueue_style( 'calendariovacunacion', get_template_directory_uri() . '/custom/css/calendariovacunacion.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/calendariovacunacion.css' ), 'all');
	}

	wp_enqueue_script('generals_js', get_template_directory_uri().'/custom/js/generals.js', array('jquery'),filemtime( get_stylesheet_directory() . '/custom/js/generals.js' ), false);

	wp_enqueue_style( 'animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',  array(), null, false);

    wp_enqueue_script('jquery.waypoints.min', get_template_directory_uri().'/custom/js/jquery.waypoints.min.js', array('jquery'), false);




    // OWL CAROUSEL
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/custom/js/owl.carousel.min.js',array('jquery'), false);

    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/custom/css/owl.carousel.min.css', array(), '1.1', 'all');

    wp_enqueue_style( 'owl-carousel-theme-css', get_template_directory_uri() . '/custom/css/owl.theme.default.min.css', array(), '1.1', 'all');




	if(is_page_template('blog.php')){
        // Grid News
        wp_enqueue_style( 'grid-news', get_template_directory_uri() . '/custom/css/grid-news.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/grid-news.css' ), 'all');

        wp_enqueue_style( 'blog', get_template_directory_uri() . '/custom/css/blog.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/blog.css' ), 'all');

    }


    if(is_page_template('acervo.php')){
        // Grid News
        wp_enqueue_style( 'acervo', get_template_directory_uri() . '/custom/css/acervo.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/acervo.css' ), 'all');

    }

    wp_enqueue_style( 'accesibilidad', get_template_directory_uri() . '/custom/css/accesibilidad.css', array(), filemtime( get_stylesheet_directory() . '/custom/css/accesibilidad.css' ), 'all');

    wp_register_script( 'load-more-docs', get_template_directory_uri() . '/custom/js/load-more-docs.js');
    wp_enqueue_script( 'load-more-docs' );

    wp_localize_script( 'load-more-docs', 'ajax_posts', array(
	    'ajaxurl' => admin_url( 'admin-ajax.php' ),
	    'noposts' => __('No older posts found', 'vacunamx'),
    ));



}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Carrusel de Nosotros.
        acf_register_block_type(array(
            'name'              => 'calendario-vacunacion',
            'title'             => __('Calendario Vacunación'),
            'description'       => __('Calendario Vacunación.'),
            'render_template'   => 'custom/blocks/calendario-vacunacion.php',
            'category'          => 'formatting',
            'icon'              => 'star-filled',
            'keywords'          => array( 'calendario-vacunacion', 'quote' ),
        ));

    }
}


function entex_add_attachment_support(){
    add_post_type_support('attachment', 'thumbnail');
}
add_action('after_setup_theme', 'entex_add_attachment_support');

function more_post_ajax(){
    $paged = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    header("Content-Type: text/html");


    $args = array(
        'post_type'=> 'documentos',
        'order'    => 'ASC',
        'posts_per_page' => 4,
        'post_status' => 'published',
        'order_by' => 'post_date',
        'paged' => $paged
    );

    $the_query = new WP_Query($args);

    $out = '';

    if($the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
           $the_query->the_post();
           $current_id = get_the_id();
           $file_custom = get_field('documento');
           $out .= '<a class="item loading" download href="'.$file_custom['url'].'"><div class="overlay"></div><div class="thumbnail">'.get_the_post_thumbnail($current_id, 'post-thumbnail').'</div><div class="title">'.get_the_title().'</div><div class="date">'.get_the_date().'</div></a>';

        endwhile;

    endif;
    wp_reset_postdata();
    die($out);
}


add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


?>
