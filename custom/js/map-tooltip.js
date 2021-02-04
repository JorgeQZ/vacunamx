
{
    var $tooltip = $(".tooltip-cont");

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

        console.log(e.clientX, e.pageX, $(window).width());
        let screen_width = $(window).width();

        let max_limit_posX = screen_width * .7;
        console.info(max_limit_posX);

        if (screen_width < 1440) {
            if (e.clientX < max_limit_posX) {
                $tooltip.removeClass('inverse');

            } else {
                $tooltip.addClass('inverse');
            }
        }
        if ($tooltip.hasClass('active')) {
            $tooltip.css({
                left: e.clientX + 120,
                top: e.clientY - 50
            });
        }

    });

    var zoom = 1;
    var stepSize = .5;
    var canDrag = false;
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
    var mapId = 'primaryMap';

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
    var $tooltip = $(".tooltip-cont");
    $tooltip.removeClass('active');
    $tooltip.css({
        left: -100,
        top: -100
    });
});