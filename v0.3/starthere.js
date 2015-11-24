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

    $(".grid").masonry({
        itemSelector: '.card',
        isFitWidth: true,
        gutter: 10
    });
    
    $.getJSON("api/read/groups_read.php", {limit: 10}, function(data) {
        for(var i = 0; i < data.numrows; i++) {
            var group_card = $("<div class='card group_card' id='group_card_" + i + "' groupid='" + data[i].groupid + "'>" +
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
    $(".grid").masonry({
        itemSelector: '.card',
        isFitWidth: true,
        gutter: 10
    });
    
    $.getJSON("api/ui/get_game_cards.php", {limit: 10}, function(data) {
        for(var i = 0, len = data.length; i < len; i++) {
            var game_card = $(data[i]);
            $("#game_grid")
                .append(game_card)
                .masonry('appended', game_card)
                .masonry('layout');
            game_card.click(function() {
                $("#behind_modal")
                    .width($(document).width())
                    .height($(document).height())
                    .fadeIn('slow');
                $.scrollLock(true);
                $.get("api/ui/get_full_game_card.php", {gameid: $(this).attr("gameid")}, function(data) {
                    var full_card_data = $(data);
                    $("body").append(full_card_data);
                    $("#owl-pics").owlCarousel({
                        navigation: true,
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        pagination: true,
                        items: 4
                    });
                    $("#owl-vids").owlCarousel({
                        navigation: true,
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        pagination: true,
                        singleItem: true,
                        autoHeight: true
                    });
                    full_card_data
                        .fadeIn("slow");
                        // .offset({
                        //     top: 15,
                        //     left: $(window).width() / 2 - full_card_data.outerWidth() / 2
                        // });
                });
                $("#behind_modal").click(function() {
                    $(".full_card").fadeOut('slow', function() {
                        $(this).remove();
                    });
                    $(this).fadeOut('slow');
                    $.scrollLock(false);
                });
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
    
    $("#changing_style").html(
        "#logout_header {" +
            "margin: auto;" +
            "text-align: center;" +
        "}" + 
        "#logout_buttons {" +
            "display: flex;" +
            "justify-content: space-around;" +
        "}" +
        ".logout_button {" +
            "font-size: 1.3em;" +
            "padding: 10px 50px;" +
        "}");
    
    var question_html = "<h1 id='logout_header'>Are you sure you want to logout?</h1>" +
        "<br>" +
        "<div id='logout_buttons'>" +
            "<button id='logout_yes' class='logout_button'>Yes</button>" + 
            "<button id='logout_no' class='logout_button'>No</button>" +
        "</div>";
        
    content.append(question_html);
    content.show("slide", {direction: "down"}, 700);
    
    $("#logout_yes").click(function() {
        $.get("api/read/instructor_logout.php", function(data) {
            content.append("<h2>" + data + "</h2>");
            setTimeout(function() {
                window.location = "index.php";
            }, 2000);
        });
    });
    
    $("#logout_no").click(function() {
        $("#side_bar_item_start").click();
    });
}
