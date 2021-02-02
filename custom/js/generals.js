$(document).ready(function () {
    $('.burguer').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.contenedor-movil').toggleClass('active');
    });
});