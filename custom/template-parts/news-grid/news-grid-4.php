<?php $posts = get_query_var('news_posts'); ?>
<pre>
<?php
print_r($posts);
?>
</pre>

<div class="grid-four-posts">
    <div class="column post-<?php echo $posts[0]->ID ?>">

        <div class="shape">
        </div>
    </div>
    <div class="column">
        <div class="row"></div>
        <div class="row"></div>
    </div>
    <div class="column"></div>
</div>
