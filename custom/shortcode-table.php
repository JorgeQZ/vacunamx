<?php

function table_scripts(){

    wp_enqueue_style('table-vaccines', get_template_directory_uri() . '/custom/css/table-vaccines.css', array(), '1.1', 'all');


    // // wp_enqueue_script( 'mapStates', get_template_directory_uri() . '/custom/js/mapStatesConfig.js', true);

}

function table_vaccines(){
    ob_start();
    ?>
<div class="table-cont">
    <div class="contenedor-wrapper table-sub-cont">
        <div class="title">
            CALENDARIO DE ENTREGAS (miles de personas inmunizadas)
        </div>
        <table>
            <!-- header -->
            <thead class="header-data">
                <th></th>
                <th>
                    2020
                </th>
                <th colspan="12">
                    2021
                </th>
            </thead>
            <!-- lab HEADER -->
            <tr class="head-data">
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
                <td>969</td>
                <td>969</td>
                <td>969</td>
                <td>969</td>
                <td>1875</td>
                <td>1875</td>
                <td>1875</td>
                <td>1875</td>
                <td>1425</td>
                <td>1425</td>
                <td>1425</td>
                <td>1425</td>
            </tr>

            <!-- lab HEADER -->
            <tr>
                <td>
                    <strong>2. CanSino</strong>
                </td>
                <td>2500</td>
                <td>2500</td>
                <td>2500</td>
                <td>2500</td>
                <td>2667</td>
                <td>2667</td>
                <td>2667</td>
                <td>5667</td>
                <td>5667</td>
                <td>5667</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!-- lab HEADER -->
            <tr>
                <td>
                    <strong>3. COVAX(*)</strong>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
                <td>2579</td>
            </tr>

            <!-- lab HEADER -->
            <tr>
                <td>
                    <strong>4. AstraZeneca</strong>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>5000</td>
                <td>7870</td>
                <td>7870</td>
                <td>6270</td>
                <td>6450</td>
                <td>5240</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <!-- lab HEADER -->
            <tr class="footer-table">
                <td>
                    <strong>TOTAL</strong>
                </td>
                <td>2,265</td>
                <td>3,469</td>
                <td>3,469</td>
                <td>11,0485</td>
                <td>14,085</td>
                <td>14,991</td>
                <td>13,391</td>
                <td>16,571</td>
                <td>15,361</td>
                <td>9,647</td>

                <td>4,004</td>
                <td>4,044</td>
                <td>4,044</td>
            </tr>


        </table>

        <div class="desc">
            Los contratos establecidos hasta hoy permitirían la inmunización de hasta 116.69 millones de personas al término de 2021.
            <br>
            <small>
                (*) / Pendiente de confirmación del fabricante elegido.
            </small>
        </div>
    </div>
</div>
<?php
    ob_end_flush();
    table_scripts();
}

add_shortcode('table_vaccines', 'table_vaccines');
