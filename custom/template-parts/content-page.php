<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<?php get_template_part( 'custom/template-parts/banner' ); ?>
	<?php endif; ?>

	<div class="contenedor-general-page">

		<div class="contenedor-wrapper">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
				)
			);
			?>
		</div>

	</div>

	<?php
		if( get_field('calendario_de_entregas')){
			echo do_shortcode('[table_vaccines]');
		}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
