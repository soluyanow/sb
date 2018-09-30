/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/

$(document).ready(function() {
    actionFunctions()
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


