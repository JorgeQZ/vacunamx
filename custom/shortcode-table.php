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
    </div>
    <div class="contenedor-wrapper table-sub-cont">
        <table class="vaccines" cellspacing="0" cellpadding="0">
            <!-- header -->
            <thead class="header-data">
                <th></th>
                <th class="border-right">
                    2020
                </th>
                <th colspan="12">
                    2021
                </th>
            </thead>
            <!-- lab HEADER -->
            <tr class="head-data">
                <td>
                    Laboratorio
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
                <td class="border-right">
                    TOTAL
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
    </div>
    <div class="contenedor-wrapper table-sub-cont">
        <div class="desc">
            Los contratos establecidos hasta hoy permitirían la inmunización <br> de hasta 116.69 millones de personas al término de 2021.
        </div>
        <div class="desc-small">

            (*) / Pendiente de confirmación del fabricante elegido.

        </div>
    </div>
</div>


<div class="table-cont">
    <div class="contenedor-wrapper table-sub-cont">
        <div class="title">
            Estatus regulatorio de las vacunas contra el virus SARS-CoV-2 en México
        </div>
    </div>
    <div class="contenedor-wrapper table-sub-cont">
        <table cellspacing="0" cellpadding="0" class="vaccines  vaccines_alt">
            <!-- header -->
            <thead class="header-data_min">
                <th>Vacuna (farmacéutica)</th>
                <th>Plataforma de diseño</th>
                <th>Dosis de esquema</th>
                <th>Fase de ensayo clínico</th>
                <th>Estatus regulatorio en México</th>
                <th>Fecha de autorización</th>
                <th>Estudio clínico en México</th>
            </thead>
            <tbody>
                <tr>
                    <td><strong>BNT162b2</strong><br>(Pfizer, Inc,/BioNTech)</td>
                    <td>ARNm</td>
                    <td>2</td>
                    <td>III</td>
                    <td>Autorizada para uso de emergencia</td>
                    <td>11/12/2020</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td><strong>AZD1222</strong><br>(AstraZeneca/Universidad de Oxford)</td>
                    <td>Adenovirus</td>
                    <td>2</td>
                    <td>III</td>
                    <td>Autorizada para uso de emergencia</td>
                    <td>04/01/201</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td><strong>Sputnik V</strong><br>(Instituto Gamaleya)</td>
                    <td>Vector viral no replicante</td>
                    <td>2</td>
                    <td>III</td>
                    <td>Autorizada para uso de emergencia</td>
                    <td>09/02/2021</td>
                    <td>Solicitud en proceso de revisión</td>
                </tr>
                <tr>
                    <td><strong>Ad5-nCoV</strong><br>(CanSino Biologics Inc)</td>
                    <td>Vector viral no replicante</td>
                    <td>1</td>
                    <td>III</td>
                    <td>Autorizada para uso de emergencia</td>
                    <td>09/02/2021</td>
                    <td>Protocolo de estudio fase III autorizada</td>
                </tr>
                <tr>
                    <td><strong>CoronaVac</strong><br>(Sinovac Research and Development Co)</td>
                    <td>Virus Inactivo</td>
                    <td>2</td>
                    <td>III</td>
                    <td>Autorizada para uso de emergencia</td>
                    <td>09/02/2021</td>
                    <td>NO</td>
                </tr>
                <tr>
                    <td><strong>Ad26.COV2.5</strong><br>(Janssen/Johnson & Johnson)</td>
                    <td>Adenovirus</td>
                    <td>1</td>
                    <td>III</td>
                    <td>--</td>
                    <td>--</td>
                    <td>Protocolo de estudio fase III autorizado</td>
                </tr>
                <tr>
                    <td><strong>CVnCoV</strong><br>(CureVac AG)</td>
                    <td>ARNm</td>
                    <td>2</td>
                    <td>III</td>
                    <td>--</td>
                    <td>--</td>
                    <td>Protocolo de estudio fase III autorizado</td>
                </tr>
                <tr>
                    <td><strong>NVX-CoV2373</strong><br>(Novavax, Inc)</td>
                    <td>Subunidad proteica</td>
                    <td>2</td>
                    <td>III</td>
                    <td>--</td>
                    <td>--</td>
                    <td>Protocolo de estudio fase III autorizado</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="table-cont">
    <div class="contenedor-wrapper table-sub-cont">
        <div class="title">
            Resumen de las principales características de las vacunas disponibles en México*
        </div>
    </div>
    <div class="contenedor-wrapper table-sub-cont">
        <table cellspacing="0" cellpadding="0" class="vaccines  vaccines_alt">
            <!-- header -->
            <thead class="header-data_min">
                <th>Vacuna (farmacéutica)</th>
                <th>Nombre común</th>
                <th>Plataforma de diseño</th>
                <th>Dosis de esquema</th>
                <th>Tiempo entre dosis</th>
                <th style="width: 40%;">Efectos secundarios más comunes</th>
            </thead>
            <tbody>
                <tr>
                    <td><strong>BNT162b2</strong><br>(Pfizer, Inc,/BioNTech)</td>
                    <td>Pfizer</td>
                    <td>ARNm</td>
                    <td>2</td>
                    <td>3-6 <br> semanas</td>
                    <td>Dolor en el sitio de inyección, cansancio, dolor de cabeza, músculos y articulaciones, y fiebre</td>
                </tr>
                <tr>
                    <td><strong>AZD1222</strong><br>(AstraZeneca/Universidad de Oxford)</td>
                    <td>Astra</td>
                    <td>Vector viral no replicante</td>
                    <td>2</td>
                    <td>8-12 <br> semanas</td>
                    <td>Dolor en el sitio de inyección, cansancio, dolor de cabeza, músculos y articulaciones, y fiebre</td>
                </tr>
                <tr>
                    <td><strong>Gam-COVID-Vac</strong><br>(Instituto Gamaleya)</td>
                    <td>Sputnik V</td>
                    <td>Vector viral no replicante</td>
                    <td>2</td>
                    <td>3-4 <br> semanas</td>
                    <td>Dolor e hinchazón en el sitio de inyección, cansancio, dolor de cabeza, músculos y articulaciones, fiebre, malestar general y escalofríos</td>
                </tr>
                <tr>
                    <td><strong>Ad5-nCoV</strong><br>(CanSino Biologics Inc)</td>
                    <td>Cansino</td>
                    <td>Vector viral no replicante</td>
                    <td>1</td>
                    <td>No aplica. <br> El esquema se completa con una sola dosis</td>
                    <td>Dolor, comezón, hinchazón y enrojecimiento en el sitio de inyección, cansancio, dolor de cabeza, músculos y articulaciones, fiebre, diarrea, náusea, vómito, bajo apetito, mareo, tos y dolor de garganta</td>
                </tr>
                <tr>
                    <td><strong>CoronaVac</strong><br>(Sinovac Research and Development Co)</td>
                    <td>Sinovac</td>
                    <td>Virus inactivado</td>
                    <td>2</td>
                    <td>4-5 <br> semanas</td>
                    <td>Dolor, hinchazón y enrojecimiento en el sitio de inyección, cansancio, dolor de cabeza, músculos y articulaciones, fiebre, diarrea y escalofríos</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="contenedor-wrapper table-sub-cont">
        <div class="desc-small">
        *Hasta la fecha de publicación del presente documento 10 De acuerdo con lo descrito en las guías técnicas de aplicación de cada vacuna. Revisadas el cinco de abril de 2021. Disponibles en vacunacovid.gob.mx
        </div>
    </div>
</div>
<?php
    ob_end_flush();
    table_scripts();
}

add_shortcode('table_vaccines', 'table_vaccines');
