<?php $posts = get_query_var('news_posts'); ?>

<div class="grid-one-posts">
    <div class="column">

        <article class="post post-<?php echo $posts[0]->ID ?>">
            <div class="post-title">
                <?php echo get_the_title($posts[0]->ID); ?>
                <div class="date">
                    <p><?php echo get_the_date( $date_format, $posts[0]->ID ); ?></p>
                </div>
            </div>
            <div class="vermas">
                <a href="<?php echo get_the_permalink($posts[0]->ID); ?>">
                    lee más
                </a>
            </div>
        </article>
        <div class="overlay" style="background-image: url( <?php echo get_the_post_thumbnail_url($posts[0]->ID,'large') ?>);"></div>
    </div>
</div>

<?php
wp_reset_query();
$posts = set_query_var('news_posts', null);
?>
