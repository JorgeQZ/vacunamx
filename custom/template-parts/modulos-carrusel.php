<div class="contenedor-general-modulos">

    <div class="contenedor-wrapper">

        <div class="contenedor-bullets owl-carousel owl-theme">
            <div class="contenedor-bullet active">
                <p>
                    ¿Es seguro vacunarse?
                </p>
            </div>
            <div class="contenedor-bullet">
                <p>
                    ¿Quién debe ponérsela?
                </p>
            </div>
            <div class="contenedor-bullet">
                <p>
                    ¿Cómo funciona la vacuna?
                </p>
            </div>
            <div class="contenedor-bullet">
                <p>
                    ¿Qué contiene?
                </p>
            </div>

        </div>

        <div class="contenedor-modulos owl-carousel owl-theme">
            <div class="contenedor-item">
                <div class="cont-pregunta">
                    <h2>¿Es seguro vacunarse?</h2>
                    <p>
                        <span> La vacuna es segura. </span> Todas las vacunas aprobadas son sometidas a <span> pruebas rigurosas </span> a lo largo de las diferentes
                        fases de los ensayos clínicos, y siguen siendo evaluadas regularmente una vez comercializadas. Los científicos
                        también siguen constantemente la información procedente de diferentes fuentes en busca de indicios de que una
                        vacuna pueda tener efectos adversos.
                    </p>
                </div>
                <div class="cont-imagen">
                    <img src="<?php echo get_template_directory_uri().'/custom/img/es-seguro-vacunarse.png';?>" alt="">
                </div>
            </div>
            <div class="contenedor-item">
                <div class="cont-pregunta">
                    <h2>¿Quién debe ponérsela?</h2>
                    <p>
                        <span> Toda la población, </span> a fin de salvar vidas, interrumpir la transmisión del virus o
                        <span> disminuir la expansión de la pandemia, </span> así como los efectos indirectos sobre el funcionamiento de los
                        servicios esenciales en la sociedad.
                    </p>
                </div>
                <div class="cont-imagen">
                    <img src="<?php echo get_template_directory_uri().'/custom/img/quien-debe-ponersela.png';?>" alt="">
                </div>
            </div>
            <div class="contenedor-item">
                <div class="cont-pregunta">
                    <h2>¿Cómo funciona la vacuna?</h2>
                    <p>
                        Tras vacunarse, nuestro sistema inmunitario <span> produce anticuerpos, </span> como ocurre cuando nos exponemos a una enfermedad,
                        con la diferencia de que la vacunas contienen solamente patógenos (como virus o bacterias) muertos o debilitados
                        y <span> no causan enfermedades ni complicaciones. </span> La mayoría de las vacunas se inyectan, pero otras se ingieren (vía oral) o
                        se nebulizan en la nariz.
                    </p>
                </div>
                <div class="cont-imagen">
                    <img src="<?php echo get_template_directory_uri().'/custom/img/como-funciona-la-vacuna2.png';?>" alt="">
                </div>
            </div>
            <div class="contenedor-item">
                <div class="cont-pregunta">
                    <h2>¿Qué contiene?</h2>
                    <p>
                        Todos los componentes de las vacunas son importantes <span> para garantizar su inocuidad </span> y su eficacia.
                        Estos son algunos de ellos:
                    </p>
                    <p>
                        <span> El antígeno: </span> es una forma muerta o debilitada de un patógeno (por ejemplo, un virus o una bacteria) que prepara a nuestro organismo para reconocer y combatir una determinada enfermedad en el futuro.
                    </p>
                    <p>
                        <span> Adyuvantes: </span> ayudan a incrementar la respuesta de nuestras defensas (inmunitaria) y, así, facilitan la acción de las vacunas.
                    </p>
                    <p>
                        <span> Conservantes: </span> garantizan que la vacuna mantiene su eficacia.
                    </p>
                    <p>
                        <span> Estabilizantes: </span> protegen la vacuna durante su transporte y almacenamiento.
                    </p>
                </div>
                <div class="cont-imagen">
                    <img src="<?php echo get_template_directory_uri().'/custom/img/que-contiene.png';?>" alt="">
                </div>
            </div>

        </div>

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
