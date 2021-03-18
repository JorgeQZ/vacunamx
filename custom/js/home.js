
var canAnimate = true;

$(document).ready(function () {

    // // Animacion de numeros
    let waypoint_numbers = new Waypoint({
        element: document.getElementsByClassName('numbers')[1],
        handler: function (direction) {

            const obj = $('.datoprincipal').get(0);
            if (canAnimate) {
                $(this.element).css('opacity', 0);
                $(this.element).addClass('animate__fadeInUp animate__animated');
                //animateValue(obj, 0, 15, 1700);
                animarDatos();
            }
            $('.container-vaccine .contenedor-contenido-tabs .contenido-tab:nth-child(2) .vaccine-content .img-vaccine .cont-animacion .cont-contenido').addClass("actual");

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

    // Click Vacuna
    $('.container-vaccine .contenedor-tabs .tab.btn-active').on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
            $('.container-vaccine .contenedor-tabs .tab.active').removeClass('active');
            $(this).addClass('active');
            var indice = $(this).attr("tab");
            $(".container-vaccine .contenedor-contenido-tabs .contenido-tab").hide();
            $(".container-vaccine .contenedor-contenido-tabs .contenido-tab").eq(indice-1).fadeIn(500);
            //animarDatos();
            $('.container-vaccine .vaccine-content .img-vaccine .cont-animacion .cont-contenido').removeClass("actual");
            $('.container-vaccine .contenedor-contenido-tabs .contenido-tab:nth-child('+ indice +') .vaccine-content .img-vaccine .cont-animacion .cont-contenido').addClass("actual");
            /*
            .animate({
                width:'60%'
            });
            */
            $('.container-vaccine .contenedor-contenido-tabs .contenido-tab:nth-child('+ indice +') .datos-vacunacion').addClass('animate__fadeInUp animate__animated');
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



Number.prototype.format = function(n) {
    var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
    return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
};

function animarDatos(){
    $('.count').each(function () {
        $(this).prop('counter', 0).animate({
            counter: $(this).text().replace(/,/g, "")
        }, {
            duration: 1700,
            easing: 'easeOutExpo',
            step: function (step) {
                $(this).text('' + step.format());
            }
        });
    });
}