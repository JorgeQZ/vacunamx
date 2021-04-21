<?php
$ID = get_the_ID();
?>

<div class="contenedor-general-modulos">

    <div class="contenedor-wrapper">

        <?php if( have_rows('carrusel', $ID) ): ?>

        <div class="contenedor-bullets owl-carousel owl-theme">

            <?php 
                $aux = 0;
                while( have_rows('carrusel', $ID) ): the_row(); 
                $titulo_tab = get_sub_field('titulo_tab');
            ?>

            <div class="contenedor-bullet <?php if($aux == 0){ echo 'active'; } ?>">
                <p>
                    <?php echo $titulo_tab; ?>
                </p>
            </div>

            <?php 
                $aux++;
                endwhile; 
            ?>

        </div>

        <?php endif; ?>


        <?php if( have_rows('carrusel', $ID) ): ?>

        <div class="contenedor-modulos owl-carousel owl-theme">

            <?php while( have_rows('carrusel', $ID) ): the_row(); 
                $informacion = get_sub_field('informacion');
                $imagen = get_sub_field('imagen');
            ?>

            <div class="contenedor-item">
                <div class="cont-pregunta">
                    <?php echo $informacion; ?>
                </div>
                <div class="cont-imagen">
                    <img src="<?php echo $imagen; ?>" alt="">
                </div>
            </div>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>

    </div>

</div>


<script>
$('.contenedor-bullets').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    nav: true,
    navText: ["<img src='<?php echo get_template_directory_uri().'/custom/img/left-arrow-white.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/custom/img/right-arrow-white.png';?>'>"],
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 4,
        }
    },
});

$('.contenedor-modulos').owlCarousel({
    loop: false,
    margin: 0,
    dots: false,
    items: 1,
    navText: ["<img src='<?php echo get_template_directory_uri().'/custom/img/left-arrow-white.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/custom/img/right-arrow-white.png';?>'>"],
    responsive: {
        0: {
            nav: false,
        },
        768: {
            nav: true,
        },
        1024: {
            nav: true,
        }
    },
});

var sliderBullets = $('.contenedor-bullets');
sliderBullets.on('changed.owl.carousel', function(e) {
    var indice = e.item.index;
    if ($(window).width() <= 767) {
        $(".contenedor-general-modulos .contenedor-bullets .owl-stage-outer .owl-stage .owl-item").each(function(index) {
            if (index == indice) {
                $(this).children().children().click();
                //$('.contenedor-modulos').trigger('to.owl.carousel', indice);
            }
        });
    }
});


var sliderModulos = $('.contenedor-modulos');
sliderModulos.on('changed.owl.carousel', function(e) {
    var indice = e.item.index;

    if ($(window).width() >= 320 && $(window).width() <= 767) {
        caca = indice;
        $('.contenedor-bullets').trigger('to.owl.carousel', caca);
    }
    if ($(window).width() >= 768 && $(window).width() <= 1023) {
        caca = indice - 1;
        $('.contenedor-bullets').trigger('to.owl.carousel', caca);
    }
    if ($(window).width() >= 1024) {
        caca = indice - 3;
        $('.contenedor-bullets').trigger('to.owl.carousel', caca);
    }

    $(".contenedor-general-modulos .contenedor-bullets .contenedor-bullet.active").removeClass("active");
    $(".contenedor-general-modulos .contenedor-bullets .owl-stage-outer .owl-stage .owl-item").each(function(index) {
        if (index == indice) {
            $(this).children().addClass("active");
        }
    });
});


$(document).ready(function() {

    $(".contenedor-general-modulos .contenedor-bullets .contenedor-bullet p").on('click', function() {
        $(".contenedor-general-modulos .contenedor-bullets .contenedor-bullet.active").removeClass("active");
        $(this).parent().addClass("active");
        var ind = $(this).parent().parent().index();
        $('.contenedor-modulos').trigger('to.owl.carousel', ind);
    });

});
</script>
