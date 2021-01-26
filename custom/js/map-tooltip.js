
{
    let $tooltip = $(".tooltip-cont");

    $('path').hover(function () {
        $tooltip.addClass('active');
        $('.tooltip-title').html($(this).attr('title'));
    }, function () {
        $tooltip.removeClass('active');
        $tooltip.css({
            left: -100,
            top: -100
        });
    });

    $(document).on('mousemove', function (e) {
        if ($tooltip.hasClass('active')) {
            $tooltip.css({
                left: e.clientX + 120,
                top: e.clientY - 50
            });
        }
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
        })

    }

    // Draggable map
    let mapId = 'primaryMap';

    mapSVG = document.getElementById(mapId);
    $(mapSVG).on('mousedown', function (e) {
        console.log(canDrag);
        if (canDrag) {
            $('#' + mapId).draggable({ disabled: false });
        } else {
            $('#' + mapId).draggable({ disabled: true });

        }
    });
}

$(window).on('scroll', function () {
    let $tooltip = $(".tooltip-cont");
    $tooltip.removeClass('active');
    $tooltip.css({
        left: -100,
        top: -100
    });
});