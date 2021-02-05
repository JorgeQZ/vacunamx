<header>

    <div class="contenedor-header" id="site-navigation">

        <div class="contenedor-logo">
            <img src="<?php echo get_template_directory_uri().'/custom/img/logo-gobiernodemexico.png';?>" alt="">
        </div>

        <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'contenedor-menu',
                    'fallback_cb'     => false,
                )
            );
		?>

        <div class="contenedor-logo">
            <img src="<?php echo get_template_directory_uri().'/custom/img/logo-secretariadesalud.png';?>" alt="">
        </div>

        <div class="cont-burguer">
            <div class="burguer">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

    </div>


    <!-- Mobile -->
    <div class="contenedor-movil">

        <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'contenedor-menu',
                    'fallback_cb'     => false,
                )
            );
		?>

    </div>
    <!-- Mobile -->

</header>
