<?php 
    $img_featured = get_the_post_thumbnail_url();
    $slider_banner = get_field('slider_banner');
?>

<?php
    if($slider_banner){
        echo do_shortcode($slider_banner);
    }
    else{
        if($img_featured){
        ?>
        <div class="contenedor-general-banner" style="background-image: url(<?php echo $img_featured; ?>">
            <?php
                if (!is_singular('post')) {
                    ?>
                    <div class="contenedor-wrapper">
                        <div class="cont-contenido-page">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
        <?php
        }
    }
?>