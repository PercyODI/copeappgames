$(document).ready(function() {
        // Set height of container div to full height
        $(".container").css("min-height", $(window).height() - 16);
        
        // List Games function
        $("#list-games").click(function() {
            $.get("list_games.php", function(data) {
                $("#content").html(data);
            });
        });
        
        // List Scouts function
        $("#list-scouts").click(function() {
            $.get("list_scouts.php", function(data) {
                $("#content").html(data);
            });
        });
        
    });
    
    $(window).resize(function() {
        // Keep height of container div at full height
        $(".container").css("min-height", $(window).height() - 16);
    });