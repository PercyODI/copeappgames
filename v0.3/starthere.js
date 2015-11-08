function load_start() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_start").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
    
    var heading_str = "<h1 style='margin: 0;'>" +
            "<i class='fa fa-plus-square fa-2x' style='" +
                "display: inline-block;" +
                "vertical-align: middle;'></i>" +
            "<span>Create a New Group</span>" +
            "</h1>" +
            "<h1 style='text-align: center'>" +
                "Or Work with a Previous Group" +
            "</h1>";
    content.append(heading_str);
    content.show("slide", {direction: "down"}, 700);
    
    content.append("<div class='grid' id='group_grid'></div>");
    $("#masonry_style").html(
        ".grid {" +
            "margin: auto;" +
        "}" +
        ".grid_item {" +
            "width: 300px;" +
            "float: left;" +
            "border: 1px solid black;" +
            "margin-bottom: 10px;" +
            "text-align: center;" + 
            "border-radius: 5px;" +
            "background-color: white;" +
            "padding: 8px;" +
            "-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" +
            "-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" +
            "box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" +
            "cursor: pointer;" +
        "}"
    );
    $(".grid").masonry({
        itemSelector: '.grid_item',
        isFitWidth: true,
        gutter: 10
    });
    
    $.getJSON("api/read/groups_read.php", {limit: 10}, function(data) {
        for(var i = 0; i < data.numrows; i++) {
            var group_card = $("<div class='group_card grid_item' id='group_card_" + i + "' groupid='" + data[i].groupid + "'>" +
                data[i].name +
                "</div>");
            $("#group_grid")
                .delay(1500*i)
                .append(group_card)
                .masonry('appended', group_card)
                .masonry('layout');
            $("#group_card_" + i)
                .data(data[i])
                .click(function() {
                    // console.dir($(this).data('groupid'));
                    window.location = "session.php?groupid=" + $(this).data('groupid');
                });
        }
    });
}

function load_games() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_games").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
    
    var search_html = "<div id='search_div'>" +
        "<input type='text' placeholder='search'>" +
        "<select id='search_select'>" +
        "<option value='suggested'>Suggested Games</option>" +
        "<option value='unplayed'>Unplayed Games</option>" +
        "<option value='all' selected>All Games</option>" +
        "</select>" +
        "<a id='new_game_link'>Create a New Game</a>" +
        "</div><br>";
        
    content.append(search_html);
    content.show("slide", {direction: "down"}, 700);
    
    content.append("<div class='grid' id='game_grid'></div>");
    $("#masonry_style").html(
        ".grid {" +
            "margin: auto;" +
        "}" +
        ".grid_item {" +
            "width: 200px;" +
            "float: left;" +
            "border: 1px solid black;" +
            "margin-bottom: 10px;" +
            "text-align: center;" + 
            "border-radius: 5px;" +
            "background-color: white;" +
            "padding: 8px;" +
            "-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" +
            "-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" +
            "box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" +
            "cursor: pointer;" +
        "}"
    );
    $(".grid").masonry({
        itemSelector: '.grid_item',
        isFitWidth: true,
        gutter: 10
    });
    
    $.getJSON("api/read/games_read.php", {limit: 10}, function(data) {
        for(var i = 0; i < data.numrows; i++) {
            var game_card = $("<div class='game_card grid_item' id='game_card_" + i + "' gameid='" + data[i].gameid + "'>" +
                (data[i].icon != null ? ("<i class='fa fa-" + data[i].icon + " fa-3x'></i>") : "" ) +
                "<h3>" + data[i].title + "</h3>" +
                "<p style='text-align: justify'>" + data[i].description + "</p>" +
                "</div>");
            $("#game_grid")
                .append(game_card)
                .masonry('appended', game_card)
                .masonry('layout');
            $("#game_card_" + i)
                .data(data[i])
                .click(function() {
                    console.dir($(this).data('gameid'));
                });
        }
    });
}

function load_groups() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_groups").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
}

function load_scouts() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_scouts").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
}

function load_settings() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_settings").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
}

function load_logout() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_logout").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
}
