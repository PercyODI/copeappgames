<?php include_once("session_check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php include_once("header.php"); ?>
    <link rel="stylesheet" type="text/css" href="starthere.css">
    
    <script src="starthere.js"></script>
    <script>
        // DOM to manipulate
        var globaldom;
        
        // Set sidebar and content height
        function div_heights() {
            var sidebar = $("#sidebar");
            var content = $("#content");
            sidebar.height($(window).height());
            content.css("min-height", $(window).height());
            content.width($("#container").width() - ($("#sidebar").width() + 28));
            

        }
        
        $(document).ready(function() {
            // hide content div
            $('#content').hide();
        
            div_heights();
            $('#sidebar > ul').height($('#sidebar > ul'));
            $('#sidebar > ul').hide();
            $('#sidebar > ul').delay(200).show('slide', {direction: 'left'}, 600, function() {
                // Auto start on Start
                $("#side_bar_item_start").click();
            });
            
            // Get start cards
            $("#side_bar_item_start").click(function() {
                $("#content").hide("slide", {direction: "up"}, 700, function() {
                    load_start();
                });
            });
            
            $("#side_bar_item_games").click(function() {
                $("#content").hide("slide", {direction: "up"}, 700, function() {
                    load_games();
                });
            });
            
            $("#side_bar_item_groups").click(function() {
                $("#content").hide("slide", {direction: "up"}, 700, function() {
                    load_groups();
                });
            });
            
            $("#side_bar_item_scouts").click(function() {
                $("#content").hide("slide", {direction: "up"}, 700, function() {
                    load_scouts();
                });
            });
            
            $("#side_bar_item_settings").click(function() {
                $("#content").hide("slide", {direction: "up"}, 700, function() {
                    load_settings();
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

    </script>
</head>
<body>
    <div id="container">
        <div id="sidebar">
            <ul id='sidebar_ul'>
                <li class="sidebar_item" id="side_bar_item_start">Start</li>
                <li class="sidebar_item" id="side_bar_item_games">Games</li>
                <!--<li class="sidebar_item" id="side_bar_item_groups">Groups</li>-->
                <!--<li class="sidebar_item" id="side_bar_item_scouts">Scouts</li>-->
                <!--<li class="sidebar_item" id="side_bar_item_settings">Settings</li>-->
                <li class="sidebar_item" id="side_bar_item_logout">Logout</li>
            </ul>
            <img src="images/climbing_crop.jpg" id="carabiner-img">
        </div>
        <div id="content"></div>
    </div>
    <div id="behind_modal" style="display: none;"></div>
</body>
</html>