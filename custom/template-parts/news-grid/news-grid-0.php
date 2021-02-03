<?php $posts = get_query_var('news_posts'); ?>

<div class="grid-none-posts">
    <div class="column">
        <br>
        <h3>No hay noticias que mostrar.</h3>
        <br>
        Vuelve al inicio de <a href="<?php echo get_site_url().'/blog/';?>">noticias<a>
    </div>
</div>

<?php
wp_reset_query();
$posts = set_query_var('news_posts', null);
?>
