<?php
/**
 * Template Name: Blog
 */
get_header();
$current_page = get_query_var('paged');
$current_page = max( 1, $current_page );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset_start = 2;
$per_page = 4;
$offset = ( $current_page - 1 ) * $per_page + $offset_start;
?>

<?php get_template_part( 'custom/template-parts/grid-news' ); ?>

<div class="blog-cont">
    <div class="title">
        últimas noticias
    </div>

    <?php
    $args_post = array(
        'posts_per_page' => $per_page,
        'paged' => $paged,
        'offset' => $offset,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $queried_post = new WP_Query ($args_post);
    $total_rows = max( 0, $queried_post->found_posts - $offset_start );
    $total_pages = ceil( $total_rows / $per_page );

   $count_post = $queried_post->post_count;
    if($queried_post->have_posts()):
        set_query_var('news_posts', $queried_post->posts);
        switch ($count_post):
            case 4:
                echo '<div class="contenedor-wrapper">';
                get_template_part( 'custom/template-parts/news-grid/news-grid-4');
                echo '</div>';

            break;
        endswitch;
        echo '<div class="contenedor-wrapper">';
        echo paginate_links( array(

            'total'   => $total_pages,
            'current' => $current_page,
        ) );
        echo '</div>';
    endif;
    wp_reset_postdata();

?>
</div>
<?php get_footer(); ?>
