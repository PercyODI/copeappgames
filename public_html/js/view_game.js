$(document).ready(function() {
    // $(".ckedit").ckeditor({
    //     on: {
    //         blur: function(event) {
    //             console.dir(event);
    //         }
    //     }
    // });
    CKEDITOR.disableAutoInline = true;
    
    $(".ckedit").each(function() {
        var divThis = $(this);
        CKEDITOR.inline($(this).get(0), {
            on: {
                blur: function( event ) {
                    var data = event.editor.getData();
                    var field = divThis.parents(".ckedit_ph_wrapper").attr("data-field");
                    var gameid = divThis.parents(".ckedit_ph_wrapper").attr("data-gameid");
                    var userid = divThis.parents(".ckedit_ph_wrapper").attr("data-userid");
                    $.post("ajax/edit_game_field.php", {
                        "field" : field,
                        "gameid" : gameid,
                        "userid" : userid, 
                        "data" : data
                    });
                }
            }
        });
    });
    // CKEDITOR.inline("ckedit_", {
        // on: {
        //     blur: function( event ) {
        //         var data = event.editor.getData();
        //         console.dir(data);
        //         // Do sth with your data...
        //     }
        // }
    // } );
});