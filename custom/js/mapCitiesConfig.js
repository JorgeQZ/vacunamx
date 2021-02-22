$(document).ready(function () {
    var map = new L.Map("map-cities", {
        center: [24.760001, -102.618469],
        zoom: 4.58,

    });


    // // set nambes and division
    // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    //     id: 'mapbox/light-v10',
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     tileSize: 512,
    //     zoomOffset: -1,
    //     fillOpacity: 0.4,
    //     accessToken: 'pk.eyJ1Ijoiam9yZ2VxeiIsImEiOiJja2tpbWFpcngwNjNkMm5zNnZtYnRzaDRtIn0.sEhmM2W8vZ5UPlUtaWPS7Q'
    // }).addTo(map);

    L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(map);

    // Get shapes of states
    let citiesData = JSON.parse(dataCities.cities);

    // Get number of vaccines by statest
    let citiesData_vaccines = JSON.parse(dataCities.vaccines);

    let atributesMap = {
        "fillOpacity": 0.1,
        "fillColor": '#fff',
        "color": '#ff00334f',
        "weight": 1
    }
    let map_mexico = L.geoJson(citiesData, { style: atributesMap }).addTo(map);

    // Set to each path an ID
    map_mexico.eachLayer(function (layer) {
        layer._path.id = layer.feature.properties.state_code + '_' + layer.feature.properties.mun_code;
        layer._path.setAttribute('mun_code', layer.feature.properties.mun_code)
        layer._path.setAttribute('mun_name', layer.feature.properties.mun_name)
        layer._path.setAttribute('state_code', layer.feature.properties.state_code)
    }).addTo(map);

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

    // Set color state by vaccines
    $.each(citiesData_vaccines, function (i, item) {
        console.log(item, i);
        $('#' + item.state_code + '_' + item.mun_code).css({
            fill: getColor(item.vacunados),
            "fill-opacity": 0.5
        });
    });

});