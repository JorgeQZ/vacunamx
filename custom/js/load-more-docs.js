$(document).ready(function () {


    var pageNumber = 1;


    function load_posts() {
        pageNumber++;
        var str = '&pageNumber=' + pageNumber + '&action=more_post_ajax';
        $.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function (data) {
                var $data = $(data);


                if ($data.length) {
                    for (var i = 0; i <= $data.length; i++) {
                        $(".wrapper-documents").append($data[i]);
                    }
                    // $(".wrapper-documents").append($data);
                    // $("#more_posts").attr("disabled", false);
                } else {
                    $("#more_posts").attr("disabled", true);
                    $("#more_posts").text("No hay más documentos");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    $("#more_posts").on("click", function () { // When btn is pressed.
        $("#more_posts").attr("disabled", true); // Disable the button, temp.
        load_posts();
        $(this).insertAfter('.wrapper-documents'); // Move the 'Load More' button to the end of the the newly added posts.
    });

});