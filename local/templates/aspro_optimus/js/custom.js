/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/

$(document).ready(function() {
    actionFunctions();
    $(".reg-checkout-input").on("click", function() {
        changeRegPage();
    });
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
}

function changeRegPage() {
    $.each($(".reg-checkout input"), function(i, j) {
        if (j.checked === true) {
            $("."+j.value).css("display", "block");
        } else {
            $("."+j.value).css("display", "none");
        }
    });
}

function sendPartnerInfo() {
    $(".send-info").click();
}

function tst() {
    //$("#auth-col").replaceWith("<div class='auth-col'></div>");



}




