<?php
/**
 * Template Name: Acervo
 *
 *
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	// the_content();
		get_template_part( 'custom/template-parts/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
    // }™


endwhile; // End of the loop.



$args = array(
    'post_type'=> 'documentos',
    'order'    => 'ASC'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
       $the_query->the_post();
       // content goes here
    endwhile;
    wp_reset_postdata();
else:
endif;
// echo do_shortcode('[table_vaccines]');
get_footer();
