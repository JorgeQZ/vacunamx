<div class="container-map">


    <div class="contenedor-wrapper subcont-map">
        <div class="title">
            Mapa de vacunación
            <div class="line-shape"></div>
        </div>

        <div class="map">
            <?php get_template_part( 'custom/template-parts/map' ); ?>
        </div>
        <div class="doc-mobil">
            <img src="<?php echo get_template_directory_uri().'/custom/img/doc-mobil.png'; ?>" alt="">
        </div>
        <div class="doc">
            <img src="<?php echo get_template_directory_uri().'/custom/img/doc2.png'; ?>" alt="">
        </div>
        <div class="doc-bubble">
            <img src="<?php echo get_template_directory_uri().'/custom/img/doc3.png'; ?>" alt="">
        </div>

        <div class="controls">
            <button onclick="zoomInMap()">+</button>
            <button onclick="zoomOutMap()">-</button>
        </div>
    </div>
</div>
