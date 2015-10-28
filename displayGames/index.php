<!DOCTYPE html>
<html>
<head>
    <title>Showing Games Tests</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        /*body {*/
        /*    overflow: hidden;*/
        /*}*/
        
        #pageTitle {
            text-align: center;
        }
    
        #container {
            width: 75%;
            margin: auto;
        }
        
        #container:after {
          content: "";
          display: table;
          clear: both;
        }
        
        #content {
            margin: 0 auto;
            /*overflow-y: auto;*/
            /*overflow-x: hidden;*/
        }
        
        #content:after {
          content: "";
          display: table;
          clear: both;
        }
        
        #searchbar {
            text-align: right;
        }
        
        #goals {
            cursor: default;
            -webkit-user-select: none;  /* Chrome all / Safari all */
            -moz-user-select: none;     /* Firefox all */
            -ms-user-select: none;      /* IE 10+ */
            user-select: none; 
        }
        
        #goals:hover {
            font-weight: bold;
        }
        
        .line-img {
            width: 100%;
            height: 22px;
        }
        
        .game {
            width: 200px;
            float: left;
            margin: 13px 13px;
            padding: 5px;
            border: 1px solid black;
            transition: all .2s;
        }
        
        .game:hover {
            border-color: red;
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        
        .title {
            margin: 0;
            text-align: center;
            font-size: 1.3em;
            
        }
        
        .description {
            margin: 0;
            height: auto;
        }
        
        .float-right {
            display: inline-block;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
    <script>
        
        function getGames() {
            $.get("getGames.php", {searchText: $("#searchText").val()}, function(data) {
                if(Masonry.data("#content")) {
                    $("#content").masonry('destroy');
                }
                console.log("going...");
                $("#content").html(data); 
                $("#content").masonry({
                    itemSelector: ".game",
                    isFitWidth: true
                });
                $("#content").masonry('layout');
            });
        }
        
        $(document).ready(function() {
            
            // $("#content").css("max-height", $(window).height() - $("#content").offset().top - 10);
            $("#goals-div").hide();
            
            $("#goals-div").masonry({
                itemSelector: ".goal",
                columnWidth: 200,
                isFitWidth: true
            });
            
            $("#go-btn").click(function() {
                 getGames();
            });
            
            // For Fun...Too much strain on database!!
            $("#searchText").keyup(function() {
                getGames();
            });
            
            $("#goals").click(function() {
                // $("#goals-div").toggle('slide', {direction: "up"});
                if($("#goals-div").is(':visible')) {
                    $("#goals-div").slideUp();
                } else {
                    $("#goals-div").slideDown();
                }
            });
        });
        
        $(window).resize(function() {
            // $("#content").css("max-height", $(window).height() - $("#content").offset().top - 7);
        });
    </script>
</head>

<body>
    <div id="container">
        <h1 id="pageTitle">Welcome to COPEapp</h1>
        <img src="images/grunge_line.jpg" class="line-img">
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
                <div id="go" class="float-right"><button type="button" id="go-btn">Go</button></div>
            </div>
        </div>
        <div id="goals-div">
            <p class='goal'>Communication</p>
            <p class='goal'>Planning</p>
            <p class='goal'>Trust</p>
            <p class='goal'>Teamwork</p>
            <p class='goal'>Leadership</p>
            <p class='goal'>Decisionmaking</p>
            <p class='goal'>Problemsolving</p>
            <p class='goal'>Selfesteem</p>
        </div>
        <div id="content"></div>
        <div id="footer">
            <img src="images/grunge_line.jpg" class="line-img">
        </div>
    </div>
    
</body>
</html>