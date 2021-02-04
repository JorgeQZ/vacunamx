<div class="container-map">


    <div class="contenedor-wrapper subcont-map">
        <div class="title">
            Mapa de vacunación
            <div class="line-shape"></div>
        </div>

        <div class="map">
            <?php get_template_part( 'custom/template-parts/map' ); ?>
        </div>
        <div class="doc">
            <img src="<?php echo get_template_directory_uri().'/custom/img/doc_map_middle.png'; ?>" alt="">
        </div>

        <div class="controls">
            <button class="zoom-in">+</button>
            <button class="zoom-out">-</button>
        </div>
    </div>
</div>
