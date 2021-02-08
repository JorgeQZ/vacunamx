<?php
/**
 * Template Name: Noticias
 */
get_header();
$current_page = get_query_var('paged');
$current_page = max( 1, $current_page );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$offset_start = 2;
$per_page = 2;
$range = 2;
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

            case 3:
                echo '<div class="contenedor-wrapper">';
                get_template_part( 'custom/template-parts/news-grid/news-grid-3');
                echo '</div>';
            break;

            case 2:
                echo '<div class="contenedor-wrapper">';
                get_template_part( 'custom/template-parts/news-grid/news-grid-2');
                echo '</div>';
            break;

            case 1:
                echo '<div class="contenedor-wrapper">';
                get_template_part( 'custom/template-parts/news-grid/news-grid-1');
                echo '</div>';
            break;

            case 0:
                echo '<div class="contenedor-wrapper">';
                get_template_part( 'custom/template-parts/news-grid/news-grid-0');
                echo '</div>';
            break;
        endswitch;

        echo '<div class="pag-cont">';

        echo '<div class="item previous">';
        if($paged > 1):
            echo  "<a class='item previous' href=".get_pagenum_link($paged - 1)."><img src='".get_template_directory_uri().'/custom/img/left-arrow-idle.png'."'>
            <img class='hover' src='".get_template_directory_uri().'/custom/img/left-arrow-color.png'."'></a>";
        endif;
        echo '</div>';

        for($i=1; $i<= $total_pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $per_page )){
                if($paged == $i):
                    echo "<span class='item current'>".$i."</span>";
                else:
                    echo "<a href='".get_pagenum_link($i)."' class='item'>".$i."</a>";
                endif;
            }
        }

        echo '<div class="item next">';
        if($paged < $total_pages):
            echo  "<a class='item next' href=".get_pagenum_link($paged + 1)."><img src='".get_template_directory_uri().'/custom/img/right-arrow-idle.png'."'>
            <img class='hover' src='".get_template_directory_uri().'/custom/img/right-arrow-color.png'."'></a>";
        endif;
        echo '</div>';// end item next

        echo '</div>'; // end pag-cont
        echo '<div class="custom-pag">Página '.$paged.' de '.$total_pages.'</div>';

    else:
        echo '<div class="contenedor-wrapper">';
        get_template_part( 'custom/template-parts/news-grid/news-grid-0');
        echo '</div>';
    endif;
    wp_reset_postdata();

?>
</div>
<?php get_footer(); ?>
