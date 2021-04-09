$(document).ready(function () {
    var map = new L.Map("map-cities", {
        center: [24.760001, -102.618469],
        zoom: 4.58,

    });


    // // set nambes and division
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        id: 'mapbox/streets-v11',
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        tileSize: 512,
        zoomOffset: -1,
        fillOpacity: 0.4,
        accessToken: 'pk.eyJ1Ijoiam9yZ2VxeiIsImEiOiJja2tpbWFpcngwNjNkMm5zNnZtYnRzaDRtIn0.sEhmM2W8vZ5UPlUtaWPS7Q'
    }).addTo(map);

    // L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
    //     subdomains: 'abcd',
    //     maxZoom: 19
    // }).addTo(map);



    // Get shapes of states
    let citiesData = JSON.parse(dataCities.cities);

    // Get number of vaccines by statest
    let citiesData_vaccines = JSON.parse(dataCities.vaccines);


    // Atritbutos
    let atributesMap = {
        fillOpacity: 0.1,
        "fillColor": '#fff',
        "color": '#666',
        "weight": 0.5,
        dashArray: '3',
    }

    // Division de minicipios
    let map_mexico = L.geoJson(citiesData, {
        style: atributesMap,
        onEachFeature: onEachFeature
    }).addTo(map);




    // agregar a cada municipio id's y nombre
    map_mexico.eachLayer(function (layer) {
        layer._path.id = layer.feature.properties.state_code + '_' + layer.feature.properties.mun_code;
        layer._path.setAttribute('mun_code', layer.feature.properties.mun_code);
        layer._path.setAttribute('mun_name', layer.feature.properties.mun_name);
        layer._path.setAttribute('state_code', layer.feature.properties.state_code);
    }).addTo(map);


    // Funcion de retorno de colores
    function getColor(d) {
        return d > 1000 ? '#800026' :
            d > 500 ? '#BD0026' :
                d > 200 ? '#E31A1C' :
                    d > 100 ? '#FC4E2A' :
                        d > 50 ? '#FD8D3C' :
                            d > 20 ? '#FEB24C' :
                                d > 10 ? '#FED976' :
                                    '#FFEDA0';
    }

    // Funcion de retirni de opacidad
    function getOpacity(d) {
        return d > 1000 ? '1' :
            d > 500 ? '0.9' :
                d > 200 ? '0.8' :
                    d > 100 ? '0.7' :
                        d > 50 ? '0.6' :
                            d > 20 ? '0.5' :
                                d > 10 ? '0.4' :
                                    '0.3';


    }

    // Set color state by vaccines
    $.each(citiesData_vaccines, function (i, item) {

        $('#' + item.state_code + '_' + item.mun_code).css({
            fill: getColor(item.vacunados),
            "fill-opacity": getOpacity(item.vacunados)
        });

        $('#' + item.state_code + '_' + item.mun_code).attr('vacunados', item.vacunados);


    });


    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }

    // Resalto de municipio
    function highlightFeature(e) {

        var layer = e.target;

        layer.setStyle({
            weight: 1,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }



        let data_mun = {
            'vacunados': $('#' + this._path.id).attr('vacunados'),
            'municipio': $('#' + this._path.id).attr('mun_name'),
        };

        info.update(data_mun);
    }

    //Reset de highlight
    function resetHighlight(e) {
        map_mexico.resetStyle(e.target);

        info.update();
    }

    //Funcion zoom
    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }
    // Leyenda de rangos esuina derecha
    var legend = L.control({ position: 'bottomright' });

    legend.onAdd = function (map) {

        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 10, 20, 50, 100, 200, 500, 1000],
            labels = [];

        // loop through our density intervals and generate a label with a colored square for each interval
        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
        }

        return div;
    };

    legend.addTo(map);




    // informacion top derecha
    var info = L.control();

    info.onAdd = function (map) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    // method that we will use to update the control based on feature properties passed


    info.update = function (props) {
        let vacunados_text;
        if (props != undefined) {
            if (props.vacunados != undefined) {
                vacunados_text = props.vacunados;
            } else {
                vacunados_text = 'Sin datos de vacunados'
            }
        }

        this._div.innerHTML = '<h4>Vacunados de minicipio:</h4>' + (props ?
            '<b>' + props.municipio + '</b><br />' + vacunados_text
            : 'Hover over a state');
    };

    info.addTo(map);
});