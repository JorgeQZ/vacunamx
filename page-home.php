<?php
/**
 * Template Name: Home
 */


 get_header();
?>
<?php get_template_part( 'custom/template-parts/banner-slider');   ?>

<?php get_template_part( 'custom/template-parts/etapas-vacunacion' ); ?>

<?php get_template_part( 'custom/template-parts/block-vaccine' ); ?>

<?php get_template_part( 'custom/template-parts/block-map' ); ?>

<?php get_template_part( 'custom/template-parts/modulos-carrusel' ); ?>

<?php get_template_part( 'custom/template-parts/grid-news' ); ?>

<?php get_footer();?>
