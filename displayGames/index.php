<!DOCTYPE html>
<html>
<head>
    <title>Showing Games Tests</title>
    <?php
        include_once("../connect.php");
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        #container {
            width: 700px;
            margin: auto;
        }
        
        #searchbar {
            text-align: right;
        }
        
        .float-right {
            display: inline-block;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            // #.get
        });
    </script>
</head>

<body>
    <div id="container">
        <h1>Welcome to COPEapp</h1>
        <hr>
        <div id="showContainer">
            <div id="searchbar">
                <div id="goals" class="float-right">Goals <i class="fa fa-caret-down"></i></div>
                <div id="search" class="float-right"><input type="text" id="searchText" placeholder="search"></div>
                <div id="whatToSearch" class="float-right">
                    <select id="whatToSearchSelection">
                        <option value="suggestedGames">Suggested Games</option>
                        <option value="unplayedGames">Unplayed Games</option>
                        <option value="allGames">All Games</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</body>
</html>