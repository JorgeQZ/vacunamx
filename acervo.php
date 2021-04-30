<?php
/**
 * Template Name: Acervo
 *
 *
 */

get_header();

/* Start the Loop */
// while ( have_posts() ) :
	// the_post();
	// the_content();
		// get_template_part( 'custom/template-parts/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
    // }™


// endwhile; // End of the loop.
?>

<?php if ( ! is_front_page() ) : ?>
		<?php get_template_part( 'custom/template-parts/banner' ); ?>
<?php endif; ?>

<div class="wrapper-documents">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type'=> 'documentos',
    'order'    => 'ASC',
    'posts_per_page' => 4,
    'post_status' => 'published',
    'order_by' => 'post_date',
    'paged' => $paged
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
       $the_query->the_post();
       $current_id = get_the_id();
       $file_custom = get_field('documento');

       ?>
        <a class="item" download href="<?php echo $file_custom['url'] ?>">
            <div class="overlay"></div>
            <div class="thumbnail"><?php echo get_the_post_thumbnail($current_id, 'post-thumbnail'); ?></div>
            <div class="title"><?php echo get_the_title(); ?></div>
            <div class="date"><?php echo get_the_date(); ?></div>
        </a>
       <?php
       // content goes here
    endwhile;
    wp_reset_postdata();
endif;
?>

</div>

<div id="more_posts" class="more_posts">Cargar más documentos</div>


<?php
// echo do_shortcode('[table_vaccines]');
get_footer();
