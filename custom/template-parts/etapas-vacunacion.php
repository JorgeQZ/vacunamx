
<div class="contenedor-general-etapasvacunacion">

    <div class="contenedor-wrapper">

        <div class="contenedor-etapas-vacunacion">

                <div class="contenedor-enc">
                    <div class="cont-enc">
                        <h2>
                            Etapas de vacunación
                        </h2>
                    </div>
                </div>

                <div class="contenedor-esquema">

                    <div class="cont-esquema owl-carousel owl-theme">
                        <div class="cont-item active">
                            <img src="<?php echo get_template_directory_uri().'/custom/img/vineta.png';?>" alt="">
                            <div class="cont-info">
                                <p>
                                    Diciembre 2020 <br>
                                    - Febrero 2021
                                </p>
                            </div>
                            <div class="cont-index">
                                <p> 1 </p>
                            </div>
                            <div class="contenedor-info">
                                <h4>Etapa 1</h4>
                                <p>Personal de salud <br> de primera línea <br> de control de la <br> COVID-19.</p>
                            </div>
                        </div>

                        <div class="cont-item">
                            <img src="<?php echo get_template_directory_uri().'/custom/img/vineta.png';?>" alt="">
                            <div class="cont-info">
                                <p>
                                    Marzo <br>
                                    - Abril 2021
                                </p>
                            </div>
                            <div class="cont-index">
                                <p> 2 </p>
                            </div>
                            <div class="contenedor-info">
                                <h4>Etapa 2</h4>
                                <p>Personal de salud <br> restante, además <br> de personas <br> de 60 y más años <br> o que tengan <br> comorbilidades <br> asociadas.</p>
                            </div>
                        </div>

                        <div class="cont-item">
                            <img src="<?php echo get_template_directory_uri().'/custom/img/vineta.png';?>" alt="">
                            <div class="cont-info">
                                <p>
                                    Abril <br>
                                    - Mayo 2021
                                </p>
                            </div>
                            <div class="cont-index">
                                <p> 3 </p>
                            </div>
                            <div class="contenedor-info">
                                <h4>Etapa 3</h4>
                                <p>Personas de 50 <br> a 59 años.</p>
                            </div>
                        </div>

                        <div class="cont-item">
                            <img src="<?php echo get_template_directory_uri().'/custom/img/vineta.png';?>" alt="">
                            <div class="cont-info">
                                <p>
                                    Mayo <br>
                                    - Junio 2021
                                </p>
                            </div>
                            <div class="cont-index">
                                <p> 4 </p>
                            </div>
                            <div class="contenedor-info">
                                <h4>Etapa 4</h4>
                                <p>Personas de 40 <br> a 49 años.</p>
                            </div>
                        </div>

                        <div class="cont-item">
                            <img src="<?php echo get_template_directory_uri().'/custom/img/vineta.png';?>" alt="">
                            <div class="cont-info">
                                <p>
                                    Junio 2021  <br>
                                    - Marzo 2022
                                </p>
                            </div>
                            <div class="cont-index">
                                <p> 5 </p>
                            </div>
                            <div class="contenedor-info">
                                <h4>Etapa 5</h4>
                                <p>Resto de <br> población.</p>
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