<div class="container-news">
    <!-- Column -->

    <?php
    $carousel_post = get_posts(
        array(
            'posts_per_page' => 6,
            'category' => 5,
            'post_tatus' => 'published',
            'orderby'          => 'publish_date',
            'order'            => 'DESC',
        )
    );
    ?>
    <div class="column">
        <div class="owl-carousel owl-theme grid-news-carousel">
            <?php
            if ( $carousel_post ):
                foreach ( $carousel_post as $post ) :
                    setup_postdata( $post );
                    $enlace_externo = get_field('enlace_externo');					
                    ?>
            <div class="item">

                <div class="overlay" style="background-image: url( <?php echo get_the_post_thumbnail_url('','large') ?>) !important; background-size: cover !important; background-position: center !important;"></div>

                <div class="content">
                    <div class="title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="content-note">
                        <div class="date">
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="excerpt">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>

                <div class="seemore">
                    <a href="<?php if($enlace_externo){ echo $enlace_externo; } else{ the_permalink(); } ?>" title="Ver más: Ir al enlace" <?php if($enlace_externo){ echo 'target="_blank"'; } ?>>
                        <span>Ver más</span>
                        <span><img src="<?php echo get_template_directory_uri().'/custom/img/right-arrow-white.png'?>" alt="Ir al enlace"></span>
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
        <?php
         $latestpost = get_posts(
            array(
                'posts_per_page' => 2,
                'post_tatus' => 'published',
                'orderby'          => 'publish_date',
                'order'            => 'DESC',
            )
        );

        if ( $latestpost ):
            foreach ( $latestpost as $post ) :
                setup_postdata( $post );
                $enlace_externo = get_field('enlace_externo');					
                ?>

        <div class="row-item">
            <div class="overlay" style="background-image: url( <?php echo get_the_post_thumbnail_url('','large') ?>) !important; background-size: cover !important;  background-position: center !important;"></div>

            <div class="content">
                <div class="title">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="content-note">
                    <div class="date">
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                    <div class="excerpt">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>

            <div class="seemore">
                <a href="<?php if($enlace_externo){ echo $enlace_externo; } else{ the_permalink(); } ?>" title="Ver más: Ir al enlace" <?php if($enlace_externo){ echo 'target="_blank"'; } ?>>
                    <span><img src="<?php echo get_template_directory_uri().'/custom/img/right-arrow-white.png'?>" alt="Ir al enlace"></span>
                </a>
            </div>
        </div>
        <?php
            endforeach;
            wp_reset_postdata();
        endif;
        wp_reset_postdata();
        ?>

    </div><!-- Column -->
</div>

<script>
$('.grid-news-carousel').owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    items: 1
})
</script>
