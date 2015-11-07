<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    <?php include_once("header.php"); ?>
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
            /*-webkit-box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);*/
            /*-moz-box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);*/
            /*box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);*/
        }
        
        #sidebar > ul {
            margin: 0;
            padding: 25px 0 0 0;
        }
        
        .sidebar_item {
            display: block;
            cursor:pointer;
            text-align: right;
            margin-top: 8px;
        }
        
        #carabiner-img {
            position: absolute;
            bottom: 0;
            width: 134px;
        }
        
        #content {
            display: inline-block;
            position: absolute;
            right: 0;
            top: 0;
        }
    </style>
    
    <script>
        // Set sidebar and content height
        function div_heights() {
            var sidebar = $("#sidebar");
            var content = $("#content");
            sidebar.height($(window).height());
            // content.height($(window).height());
            content.width($("#container").width() - ($("#sidebar").width() + 8));
        }
        
        $(document).ready(function() {
            div_heights();
        });
        
        $(window).resize(function() {
            div_heights();
        });
    </script>
</head>
<body>
    <div id="container">
        <div id="sidebar">
            <ul>
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