<?php
/**
 * Template Name: Home
 */


 get_header();
?>

<div class="container-news">
    <!-- Column -->

    <?php
    $lastposts = get_posts(
        array(
            'posts_per_page' => 6
        )
    );


    ?>
    <div class="column">
        <div class="owl-carousel owl-theme grid-news-carousel">
            <?php
            if ( $lastposts ):
                foreach ( $lastposts as $post ) :
                    setup_postdata( $post ); ?>
            <div class="item">

                <div class="overlay" style="background-image: url( <?php echo get_the_post_thumbnail_url('','large') ?>)"></div>

                <div class="content">
                    <div class="title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="excerpt">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>

                <div class="seemore">
                    <a href="<?php the_permalink() ?>">
                        <span>Ver más</span>
                    </a>
                </div>
            </div>
            <?php
                endforeach;
                wp_reset_postdata();
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div><!-- Column -->

    <!-- Column -->
    <div class="column">
        <div class="item"></div>
        <div class="item"></div>
    </div><!-- Column -->
</div>

<script>
$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    items: 1
})
</script>
<?php get_footer();?>
