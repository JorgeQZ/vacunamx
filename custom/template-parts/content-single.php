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

	<div class="contenedor-general-page contenedor-singlepage">

		<div class="contenedor-wrapper">

			<div class="contenedor-enc-singlepage">
				<h1> <?php the_title(); ?> </h1>
			</div>

			<div class="fecha">
				<?php echo get_the_date( 'd-m-Y' ); ?>
			</div>

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

</article><!-- #post-<?php the_ID(); ?> -->
