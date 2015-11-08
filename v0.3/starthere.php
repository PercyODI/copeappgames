<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php include_once("header.php"); ?>
    <style id="masonry_style"></style>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #B5BCD9;
        }
        
        #container {
            position: relative;
        }
        
        #sidebar {
            background-color: #B5BCD9;
            margin: 0;
            padding: 0;
            display: inline-block;
            position: fixed;
            bottom: 0;
            width: 134px;
            min-height: 500px;
            /*-webkit-box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);*/
            /*-moz-box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);*/
            /*box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);*/
        }
        
        #sidebar_ul {
            margin: 0;
            padding: 25px 0 0 0;
            position: relative;
            width: 134px;
        }
        
        .sidebar_item {
            display: block;
            cursor:pointer;
            position: relative;
            text-align: right;
            font-size: 1.3em;
            margin-bottom: 8px;
            z-index: 3;
            padding-right: 20px;
            transition: all .15s;
        }
        
        .sidebar_item_selected {
            font-weight: bold;
            font-size: 1.4em;
        }
        
        #carabiner-img {
            position: absolute;
            bottom: 0;
            width: 134px;
            z-index: 1;
        }
        
        #content {
            display: inline-block;
            position: absolute;
            right: 0;
            top: 0;
            padding-top: 25px;
        }
        
    </style>
    
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
            $('#sidebar > ul').delay(200).show('slide', {direction: 'left'}, 600);
            
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
                <li class="sidebar_item" id="side_bar_item_groups">Groups</li>
                <li class="sidebar_item" id="side_bar_item_scouts">Scouts</li>
                <li class="sidebar_item" id="side_bar_item_settings">Settings</li>
                <li class="sidebar_item" id="side_bar_item_logout">Logout</li>
            </ul>
            <img src="images/climbing_crop.jpg" id="carabiner-img">
        </div>
        <div id="content"></div>
    </div>
</body>
</html>