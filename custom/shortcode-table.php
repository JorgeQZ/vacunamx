<?php

function table_scripts(){

    wp_enqueue_style('table-vaccines', get_template_directory_uri() . '/custom/css/table-vaccines.css', array(), '1.1', 'all');


    // // wp_enqueue_script( 'mapStates', get_template_directory_uri() . '/custom/js/mapStatesConfig.js', true);

}

function table_vaccines(){
    ob_start();
    ?>
<div class="table-cont">
    <div class="contenedor-wrapper">
        <div class="title">
            CALENDARIO DE ENTREGAS (miles de personas inmunizadas)
        </div>
        <table>
            <!-- header -->
            <thead>
                <th colspan="2">
                    2020
                </th>
                <th colspan="12">
                    2021
                </th>
            </thead>
            <!-- lab HEADER -->
            <tr>
                <td>
                    <strong>Laboratorio</strong>
                </td>
                <td>DIC</td>
                <td>ENE</td>
                <td>FEB</td>
                <td>MAR</td>
                <td>ABR</td>
                <td>MAY</td>
                <td>JUN</td>
                <td>JUL</td>
                <td>AGO</td>
                <td>SEP</td>
                <td>OCT</td>
                <td>NOV</td>
                <td>DIC</td>
            </tr>

            <!-- lab HEADER -->
            <tr>
                <td>
                    <strong>1. PFIZER</strong>
                </td>
                <td>125</td>
                <td>ENE</td>
                <td>FEB</td>
                <td>MAR</td>
                <td>ABR</td>
                <td>MAY</td>
                <td>JUN</td>
                <td>JUL</td>
                <td>AGO</td>
                <td>SEP</td>
                <td>OCT</td>
                <td>NOV</td>
                <td>DIC</td>
            </tr>


        </table>
    </div>
</div>
<?php
    ob_end_flush();
    table_scripts();
}

add_shortcode('table_vaccines', 'table_vaccines');
