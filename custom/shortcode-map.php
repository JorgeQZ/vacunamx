<?php


function map_scripts(){
    wp_enqueue_style('leaflet-css', '//unpkg.com/leaflet@1.7.1/dist/leaflet.css', 'all');
    wp_enqueue_style('custom-leaflet-css', get_template_directory_uri() . '/custom/css/custom_map_leaflet.css', array(), '1.1', 'all');

    wp_enqueue_script( 'leaflet-js', '//unpkg.com/leaflet@1.7.1/dist/leaflet.js', true);
    // wp_enqueue_script( 'mapStates', get_template_directory_uri() . '/custom/js/mapStatesConfig.js', true);

    $directory = trailingslashit( get_template_directory_uri() );
    $url_states = $directory . 'custom/js/statesData.json';
    $url_states_vaccines = $directory . 'custom/js/vaccines.json';

    wp_register_script( 'map_config', $directory . '/custom/js/mapStatesConfig.js', array('jquery'), false, true  );

    $request_states = wp_remote_get( $url_states );

    $request_states_vaccines = wp_remote_get( $url_states_vaccines );
    if( is_wp_error( $request_states ) ) {
        return false; // Bail early
    }

    if( is_wp_error( $request_states_vaccines ) ) {
        return false; // Bail early
    }


    // Retrieve the data
    $data_states = wp_remote_retrieve_body( $request_states );
    $data_states_vaccines = wp_remote_retrieve_body( $request_states_vaccines );
    wp_localize_script( 'map_config', 'dataStates', array(
        'network_url' => admin_url( 'admin-ajax.php' ),
        'states' => $data_states,
        'vaccines' => $data_states_vaccines,
    ));

    wp_enqueue_script( 'map_config' );
}

function map_leaflet(){
    map_scripts();
    ob_start();
    echo '<div id="map"></div>';
    ob_end_flush();
}

add_shortcode('map_leaflet', 'map_leaflet');
