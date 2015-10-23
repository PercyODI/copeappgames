$(document).ready(function() {
        // Auto hide the contentents div
        $("#content").hide();
        
        // Set height of container div to full height
        $(".container").css("min-height", $(window).height() - 16);
        
        // List Games function
        $("#list-games").click(function() {
            $("#content").hide("slide", function() {
                $.get("list_games.php", function(data) {
                    $("#content").html(data);
                    $("#content").show("slide");
                });
            });
        });
        
        // List Scouts function
        $("#list-scouts").click(function() {
            $("#content").hide("slide", function() {
                $.get("list_scouts.php", function(data) {
                    $("#content").html(data);
                    $("#content").show("slide");
                });
            });
        });
        
    });
    
    $(window).resize(function() {
        // Keep height of container div at full height
        $(".container").css("min-height", $(window).height() - 16);
    });