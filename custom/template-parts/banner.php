<?php $img_featured = get_the_post_thumbnail_url();?>

<?php
    if(get_field('slider_banner')){
        echo do_shortcode(the_field('slider_banner'));
    }
    else{
        if($img_featured){
        ?>
        <div class="contenedor-general-banner" style="background-image: url(<?php echo $img_featured; ?>">
            <div class="contenedor-wrapper">
                <div class="cont-contenido-page">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <?php
        }
    }
?>