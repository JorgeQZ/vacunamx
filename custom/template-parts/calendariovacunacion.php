
<div class="contenedor-general-calendariovacunacion">

<div class="contenedor-wrapper">

    <div class="contenedor-calendario-vacunacion">

            <div class="contenedor-esquema">

                <div class="cont-esquema owl-carousel owl-theme">
                    <div class="cont-item active">
                        <div class="cont-circulos">
                            <div class="circulo">1</div>
                            <img src="<?php echo get_template_directory_uri().'/custom/img/cirs.png';?>" alt="">
                        </div>
                        <div class="contenedor-info">
                            <h4>Etapa 1</h4>
                            <p>Diciembre 2020 <br> a Febrero 2021</p>
                        </div>
                    </div>

                    <div class="cont-item">
                        <div class="cont-circulos">
                            <div class="circulo">2</div>
                            <img src="<?php echo get_template_directory_uri().'/custom/img/cirs.png';?>" alt="">
                        </div>
                        <div class="contenedor-info">
                            <h4>Etapa 2</h4>
                            <p>Febrero – Abril</p>
                        </div>
                    </div>

                    <div class="cont-item">
                        <div class="cont-circulos">
                            <div class="circulo">3</div>
                            <img src="<?php echo get_template_directory_uri().'/custom/img/cirs.png';?>" alt="">
                        </div>
                        <div class="contenedor-info">
                            <h4>Etapa 3</h4>
                            <p>Abril - Mayo</p>
                        </div>
                    </div>

                    <div class="cont-item">
                        <div class="cont-circulos">
                            <div class="circulo">4</div>
                            <img src="<?php echo get_template_directory_uri().'/custom/img/cirs.png';?>" alt="">
                        </div>
                        <div class="contenedor-info">
                            <h4>Etapa 4</h4>
                            <p>Mayo - Junio</p>
                        </div>
                    </div>

                    <div class="cont-item">
                        <div class="cont-circulos">
                            <div class="circulo">5</div>
                            <img src="<?php echo get_template_directory_uri().'/custom/img/cirs.png';?>" alt="">
                        </div>
                        <div class="contenedor-info">
                            <h4>Etapa 5</h4>
                            <p>Junio - Marzo <br> de 2022</p>
                        </div>
                    </div>
                    
                </div>

                


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

</script>