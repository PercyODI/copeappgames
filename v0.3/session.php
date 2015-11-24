<?php include_once("session_check.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    
    <?php include_once("header.php"); ?>
    
    <link rel="stylesheet" type="text/css" href="session.css">
    <script src="session.js"></script>
</head>
<body>
    <groupid value="<?php echo $_GET['groupid']; ?>"></groupid>
    <div id="container">
        <div id="sidebar">
            <ul id='sidebar_ul'>
                <li class="sidebar_item" id="side_bar_item_session">Session</li>
                <li class="sidebar_item" id="side_bar_item_back">Back</li>
                <li class="sidebar_item" id="side_bar_item_logout">Logout</li>
            </ul>
            <img src="images/climbing_crop.jpg" id="carabiner-img">
        </div>
        <div id="content"></div>
    </div>
</body>
</html>