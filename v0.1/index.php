<!DOCTYPE html>
<head>
    <title>COPE App</title>
    <?php
        include_once("connect.php");
    ?>
    <link rel="stylesheet" type="text/css" href="index_style.css">
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="index_scripts.js"></script>
</head>
<body>
    <div class="container">
        <h1 id="pagetitle">Welcome to COPEapp</h1>
        <hr class="style-seven">
        <div id="navigation">
            <button type="button" id="list-games">List All Games</button>
            <button type="button" id="list-scouts">List All Scouts</button>
            <button type="button" id="new-session">Start New COPE Session</button>
        </div>
        <div id="content"></div>
    </div>
</body>

