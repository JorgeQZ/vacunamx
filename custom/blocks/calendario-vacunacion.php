<?php

/**
 * Calendario Vacunación Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'calendario-vacunacion-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'calendario-vacunacion';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';

/*
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
*/
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>


    <div class="contenedor-general-calendariovacunacion">
        <div class="contenedor-calendario-vacunacion">

            <div class="contenedor-esquema">
                <div class="cont-esquema owl-carousel owl-theme">
                    <?php if(have_rows('etapas')): ?>
                        <?php
                            $aux = 1;
                            while(have_rows('etapas')): the_row(); ?>
                            <div class="cont-item" tab="<?php echo $aux; ?>">
                                <div class="cont-circulos">
                                    <div class="circulo"> <?php echo $aux; ?> 
                                        <div class="sombra"></div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri().'/custom/img/cirs.png';?>" alt="">
                                </div>
                                <div class="contenedor-info">
                                    <h4>Etapa <?php echo $aux; ?></h4>
                                    <p><?php the_sub_field('descripcion'); ?></p>
                                </div>
                            </div>
                            
                        <?php
                        $aux++; 
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="contenedor-general-contenido">
                <div class="contenedor-contenido-tabs">
                    <?php if(have_rows('etapas')): ?>
                        <?php
                            $aux = 1;
                            while(have_rows('etapas')): the_row(); 
                                $banner_principal = get_sub_field('banner_principal');
                            ?>
                            <div class="cont-contenido-tab">
                                <div class="cont-primario pos<?php echo $aux; ?>">
                                    <div class="cont-text">
                                    <p>
                                        <?php echo $banner_principal['encabezado']; ?>
                                    </p>
                                    </div>
                                    <img src="<?php echo $banner_principal['imagen']; ?>" alt="">
                                </div>
                                <?php the_sub_field('c'); ?>
                            </div>
                                
                        <?php
                        $aux++; 
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>


        </div>
    </div>

<script>

$('.cont-esquema').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    nav: true,
    mouseDrag  : false,
    navText: ["<img src='<?php echo get_template_directory_uri().'/custom/img/left-arrow-white.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/custom/img/right-arrow-white.png';?>'>"],
    responsive: {
        0: {
            items: 1,
        },
        767: {
            items: 3,
        },
        1024: {
            items: 4,
        },
        1200: {
            items: 5,
        }
    },
});


$(document).ready(function () {

    $('.contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-esquema .cont-esquema .cont-item').on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
            $('.contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-esquema .cont-esquema .cont-item.prev').removeClass('prev');
            $('.contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-esquema .cont-esquema .cont-item.active').removeClass('active');
            $(this).parent().prev().children().addClass('prev');
            $(this).addClass('active');
            var indice = $(this).attr("tab");
            $( ".contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-general-contenido .contenedor-contenido-tabs .cont-contenido-tab" ).hide();
            $( ".contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-general-contenido .contenedor-contenido-tabs .cont-contenido-tab" ).eq(indice-1).fadeIn(500);
        }
    });

    $('.contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-esquema .cont-esquema .owl-item:nth-child(1) .cont-item').click();

    var sliderVac = $('.cont-esquema');
    sliderVac.on('changed.owl.carousel', function(e) {
        var indice = e.item.index;
        console.log(indice);
        if ($(window).width() <= 767) {
            $(".contenedor-general-calendariovacunacion .contenedor-calendario-vacunacion .contenedor-esquema .cont-esquema .owl-item").each(function(index) {
                if (index == indice) {
                    $(this).children().click();
                }
            });
        }
});

});

</script>