<?php $posts = get_query_var('news_posts'); ?>
<div class="grid-four-posts">
    <div class="column">
        <article class="post post-<?php echo $posts[0]->ID ?>">
            <?php echo get_the_title($posts[0]->ID); ?>
            <div class="vermas">
                <a href="<?php echo get_the_permalink($posts[0]->ID); ?>">
                    lee más
                </a>
            </div>
        </article>
    </div>
    <div class="column">
        <div class="row">
            <article class="post post-<?php echo $posts[1]->ID ?>">
                <?php echo get_the_title($posts[1]->ID); ?>

                <div class="vermas">
                    <a href="<?php echo get_the_permalink($posts[1]->ID); ?>">
                        lee más
                    </a>
                </div>
            </article>
        </div>
        <div class="row">
            <article class="post post-<?php echo $posts[2]->ID ?>">
                <?php echo get_the_title($posts[2]->ID); ?>
            </article>
            <div class="vermas">
                <a href="<?php echo get_the_permalink($posts[2]->ID); ?>">
                    lee más
                </a>
            </div>
        </div>
    </div>
    <div class="column">
        <article class="post post-<?php echo $posts[3]->ID ?>">
            <?php echo get_the_title($posts[3]->ID); ?>
        </article>
        <div class="vermas">
            <a href="<?php echo get_the_permalink($posts[3]->ID); ?>">
                lee más
            </a>
        </div>
    </div>
</div>

<?php
wp_reset_query();
$posts = set_query_var('news_posts', null);
?>
