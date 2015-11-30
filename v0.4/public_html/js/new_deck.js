$(document).ready(function() {
    $(".icp").iconpicker({placement: "bottom"});
    // selected: true, defaultValue: "fa-gamepad", inputSearch: true
    $(".new_deck_btn").click(function(e) {
        e.preventDefault();
        $(".js_alert").slideUp("fast");
        if($("#icon").parents(".form-group").hasClass("has-error") == true) {
            $(".js_alert").html("Please Select a Valid Deck Icon").slideDown("fast");
        } else {
            $.post("ajax/new_deck.php", $(".new_deck_form").serialize(), function(data) {
                console.log("Check");
                console.dir(data);
                if(data.status === 'success') {
                    window.location = data.relocate;
                } else {
                    $(".js_alert").html(data.message).slideDown("fast");
                }
            });
        }
        
    });
});