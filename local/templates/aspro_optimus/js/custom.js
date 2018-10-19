/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/

$(document).ready(function() {
    actionFunctions();
 });

function actionFunctions() {
    $("#login_btn").click(function() {
        window.location.replace("/s2/auth");
    });

    $("#personal_btn").click(function() {
        window.location.replace("/s2/personal");
    });

    $("#exit_btn").click(function() {
        window.location.replace("?logout=yes");
    });

    $(".reg-page-checkout input").on("click", function () {
        var elArray = $(".rg-page");
        $.each(elArray, function(i, j) {
            var element = $("#" + j.id);
            element.css("display", "none");
        });

        $("#" + $("#" + this.id).data("page")).css("display", "block");
    });

    $(".send-partner-info-form").submit(function (e) {
        var form = $(".send-partner-info-form").get(0);
        var formData = new FormData(form);

        $.ajax({
            url: '/s2/auth/upload/send_files.php',
            data: formData,
            type: 'post',
            dataType: "json",
            success: function (data) {

            },
            error: function (data) {

            },
            cache: false,
            contentType: false,
            processData: false
        });
        e.preventDefault();
    });


    $("#mf-ok-text").html($(".mf-ok-text").html());
}
