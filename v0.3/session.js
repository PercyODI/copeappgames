function div_heights() {
    var sidebar = $("#sidebar");
    var content = $("#content");
    sidebar.height($(window).height());
    content.css("min-height", $(window).height());
    content.width($("#container").width() - ($("#sidebar").width() + 28));
}

function load_session() {
    $(".sidebar_item").each(function() {
        $(this).removeClass("sidebar_item_selected");
    });
    $("#side_bar_item_session").addClass("sidebar_item_selected");
    var content = $("#content");
    content.html("");
    
    $.get("api/getGroupSession.php", {groupid: $("groupid").attr("value")}, function(data) {
        content.html(data);
        content.show("slide", {direction: "down"}, 700);
            var ctx = document.getElementById("myChart").getContext("2d");
            var chartdata = {
                labels: ['communication', 'planning', 'trust', 'teamwork', 'leadership', 'decisionmaking', 'problemsolving', 'selfesteem'],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.6)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 90, 21, 66, 55, 40]
                    }
                ]
            };
            var chartoptions = {
                scaleOverride: true,
                scaleSteps: 10,
                scaleStepWidth: 10,
                scaleStartValue: 0
            };
            var myNewChart = new Chart(ctx).Radar(chartdata, chartoptions);
    });
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

$(document).ready(function() {
    // hide content div
    $('#content').hide();
    
    div_heights();
    $('#sidebar > ul').height($('#sidebar > ul'));
    $('#sidebar > ul').hide();
    $('#sidebar > ul').delay(200).show('slide', {direction: 'left'}, 600, function() {
        // Auto start on Session
        $("#side_bar_item_session").click();
    });
    
    $("#side_bar_item_session").click(function() {
        $("#content").hide("slide", {direction: "up"}, 700, function() {
            load_session();
        });
    });

    $("#side_bar_item_back").click(function() {
        $("#content").hide("slide", {direction: "up"}, 700, function() {
            // load_back();
            window.location = "starthere.php";
        });
    });
    
    $("#side_bar_item_logout").click(function() {
        $("#content").hide("slide", {direction: "up"}, 700, function() {
            load_logout();
        });
    });
    
    
});

$(window).resize(function() {
    div_heights();
});