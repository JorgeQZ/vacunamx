<?php $posts = get_query_var('news_posts'); ?>

<div class="grid-two-posts">
    <div class="column">

        <article class="post post-<?php echo $posts[0]->ID ?>">
            <div class="post-title">
                <?php echo get_the_title($posts[0]->ID); ?>
                <div class="date">
                    <p><?php echo get_the_date( $date_format, $posts[0]->ID ); ?></p>
                </div>
            </div>
            <div class="vermas">
                <?php $enlace_externo = get_field('enlace_externo', $posts[0]->ID); ?>
                <a href="<?php if($enlace_externo){ echo $enlace_externo; } else{ echo get_the_permalink($posts[0]->ID); } ?>" <?php if($enlace_externo){ echo 'target="_blank"'; } ?> >
                    lee más
                </a>
            </div>
        </article>
        <div class="overlay" style="background-image: url( <?php echo get_the_post_thumbnail_url($posts[0]->ID,'large') ?>);"></div>
    </div>

    <div class="column">
        <article class="post post-<?php echo $posts[1]->ID ?>">
            <div class="post-title">
                <?php echo get_the_title($posts[1]->ID); ?>
                <div class="date">
                    <p><?php echo get_the_date( $date_format, $posts[1]->ID ); ?></p>
                </div>
            </div>
            <div class="vermas">
                <?php $enlace_externo = get_field('enlace_externo', $posts[1]->ID); ?>
                <a href="<?php if($enlace_externo){ echo $enlace_externo; } else{ echo get_the_permalink($posts[1]->ID); } ?>" <?php if($enlace_externo){ echo 'target="_blank"'; } ?> >
                    lee más
                </a>
            </div>
        </article>

        <div class="overlay" style="background-image: url( <?php echo get_the_post_thumbnail_url($posts[1]->ID,'large') ?>);"></div>
    </div>
</div>

<?php
wp_reset_query();
$posts = set_query_var('news_posts', null);
?>
