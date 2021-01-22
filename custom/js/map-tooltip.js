$tooltip = $(".tooltip-cont");

$('path').hover(function () {
    // $(this).attr("class", "enabled heyo");
    $tooltip.addClass('active');
    $('.tooltip-title').html($(this).attr('title'));
}, function () {
    $tooltip.removeClass('active');
});

$(document).on('mousemove', function (e) {

    $tooltip.css({
        left: e.pageX - 180,
        top: e.pageY - 720
    });

});