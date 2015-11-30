$(document).ready(function() {
    $(".icp").iconpicker({placement: "bottom"});
    $(".edit_game_btn").click(function(e) {
        e.preventDefault();
        $(".js_alert").slideUp("fast");
        if($("#icon").parents(".form-group").hasClass("has-error") == true) {
            $(".js_alert").html("Please Select a Valid Game Icon").slideDown("fast");
        } else {
            $.post("ajax/edit_game.php", $(".edit_game_form").serialize(), function(data) {
                console.dir(data);
                if(data.status === 'success') {
                    window.location = data.relocate;
                } else {
                    $(".js_alert").html(data.message).slideDown("fast");
                }
            });
        }
        
    });
    
    $("#primary_type").change(function() {
        if($("#primary_type option:selected").val() === "None") {
            $("#secondary_type").val("None");
            $("#secondary_type").prop("disabled", true);
        } else {
            $("#secondary_type").prop("disabled", false);
        }
    })
});