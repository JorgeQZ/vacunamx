
$(document).ready(function (e) {
    let $tooltip = $(".tooltip-cont");

    $('path').on('mouseenter', function (e) {
        e.preventDefault();

        $tooltip.addClass('active');
        $('.tooltip-title').html($(this).attr('title'));
        $('path').removeClass('hover');
        $(this).addClass('hover');
    });


    // $('path').on('mouseleave', function (e) {
    //     e.preventDefault();
    //     // console.log(e.type)
    //     $tooltip.removeClass('active');
    //     $tooltip.css({
    //         left: -100,
    //         top: -100
    //     });
    //     $('path').removeClass('hover');
    // });+


    // Draggable map
    let mapId = 'primaryMap';
    mapSVG = document.getElementById(mapId);

    $(mapSVG).on('mousemove click', function (e) {
        e.preventDefault();


        let screen_width = $(window).width();
        let max_limit_posX = screen_width * .7;

        if (screen_width < 1440) {
            if (e.clientX < max_limit_posX) {
                $tooltip.removeClass('inverse');
            } else {
                $tooltip.addClass('inverse');
            }
        }

        if ($tooltip.hasClass('active')) {
            if (screen_width < 768) {
                $tooltip.css({
                    left: e.clientX,
                    top: e.clientY - 125
                });
            } else {
                $tooltip.css({
                    left: e.clientX + 120,
                    top: e.clientY - 50
                });
            }
        }

    });





    $(mapSVG).on('mousedown touchmove', function (e) {
        e.preventDefault();
        if (canDrag) {
            $('#' + mapId).draggable({ disabled: false });
        } else {
            $('#' + mapId).draggable({ disabled: true });

        }
    });
});



$(window).on('scroll', function () {
    let $tooltip = $(".tooltip-cont");
    $tooltip.removeClass('active');

    $('path').removeClass('hover');

    $tooltip.css({
        left: -100,
        top: -100
    });
});


// Zoom funtions

$('.zoom-in').on('click touchend', function (e) {
    e.preventDefault();
    zoomInMap();
});

$('.zoom-out').on('click touchend', function (e) {
    e.preventDefault();
    zoomOutMap();
});

let zoom = 1;
let stepSize = .5;
let canDrag = false;

function zoomInMap() {
    $map = $('#primaryMap');
    zoom += stepSize;
    canDrag = true;


    $('.map').addClass('zoomedIn');
    $map.css({
        transform: "scale(" + zoom + ")"
    })

}

function zoomOutMap() {
    $map = $('#primaryMap');
    if (zoom > 1) {
        zoom -= stepSize;
        if (zoom == 1) {
            $('.map').removeClass('zoomedIn');
            canDrag = false;
            $map.css({
                left: 0,
                top: 0,

            });
        }
    }
    $map.css({
        transform: "scale(" + zoom + ")"
    });
}