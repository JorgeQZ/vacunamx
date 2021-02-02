
var canAnimate = true;

$(document).ready(function () {

    // // Animacion de numeros
    let waypoint_numbers = new Waypoint({
        element: document.getElementsByClassName('numbers')[0],
        handler: function (direction) {

            const obj = document.getElementById("numbers_text");
            if (canAnimate) {
                $(this.element).css('opacity', 0);
                $(this.element).addClass('animate__fadeInUp animate__animated');
                animateValue(obj, 0, 329983, 1700);
            }
            $('.container-vaccine .vaccine-content .img-vaccine .cont-animacion .cont-contenido').addClass("actual");

        },
        offset: '100%',
        triggerOnce: true
    });

    // // Waypoints fade in

    // DEJAR EN FADEIN porque FadeInUp hace fallar el tooltip de Mexico
    $('.contenedor-wrapper')
        .css({ 'opacity': '0' })
        .waypoint(function (direction) {
            if (direction === 'down') {
                $(this.element).addClass('animate__fadeIn animate__animated');
            }

        }, {
            offset: '75%',
            triggerOnce: true
        })

    // // Click en etapas
    $('.cont-item').on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
            $('.cont-item').removeClass('active');
            $(this).addClass('active');
        }
    });
});

// Animate Numbers
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = numberWithCommas(Math.floor(progress * (end - start) + start));
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    canAnimate = false;
    window.requestAnimationFrame(step);
}

// Formmatting numbers
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

