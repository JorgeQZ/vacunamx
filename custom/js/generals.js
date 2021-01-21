$(document).ready(function () {

    console.log("haha");

    $('.burguer').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.contenedor-movil').toggleClass('active');
    });



});