$(document).ready(function() {
        // Auto hide the contentents div
        $("#content").hide();
        
        // Set height of container div to full height
        $(".container").css("min-height", $(window).height() - 16);
        
        // List Games function
        $("#list-games").click(function() {
            $("#content").hide("slide", {direction: "left"}, function() {
                $.get("list_games.php", function(data) {
                    $("#content").html(data);
                    $("#content").show("slide", {direction: "left"});
                });
            });
        });
        
        // List Scouts function
        $("#list-scouts").click(function() {
            $("#content").hide("slide", {direction: "left"}, function() {
                $.get("list_scouts.php", function(data) {
                    $("#content").html(data);
                    $("#content").show("slide", {direction: "left"});
                });
            });
        });
        
        // Start new cope session function
        $("#new-session").click(function() {
            $("#content").hide("slide", {direction: "left"}, function() {
                
            });
        });
        
    });
    
    $(window).resize(function() {
        // Keep height of container div at full height
        $(".container").css("min-height", $(window).height() - 16);
    });