$(document).ready(function() {
    $("#log_in_btn").click(function(e) {
        e.preventDefault();
        $.post("ajax/login.php", {
            username: $("#username").val(),
            password: $("#password").val()
        }, function(data) {
            if(data.loginSuccess === 'true') {
                window.location = "browse_decks.php";
            } else {
                $(".form-group").addClass("has-error");
                $("#password").val("").focus();
                $(".js_alert").slideDown("fast");
            }
        });
    });
});