$(document).ready(function() {
    $("#register_btn").click(function(e) {
        e.preventDefault();
        $(".js_alert").slideUp("fast");
        $(".form-group").removeClass("has-error");
        $.post("ajax/register.php", $(".register_form").serialize(), function(data) {
            if(data.status === 'success') {
                window.location = 'index.php';
            } else {
                if(data.message === 'Missing Fields') {
                    $(".form-group[requiredInput]").each(function() {
                        if ($(this).find('input').val() == "") {
                            $(this).addClass("has-error");
                        }
                    });
                }
                if(data.message === "Passwords Don't Match") {
                    $(".form-control[type='password']").parents(".form-group").addClass("has-error");
                }
                if(data.message === "Username Taken") {
                    $("#username_parent").addClass("has-error");
                }
                $(".js_alert").html(data.message).slideDown("fast");
            }
        });
    })
})