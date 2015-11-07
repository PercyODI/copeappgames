<!DOCTYPE html>
<html>
<head>
    <title>COPEapp</title>
    
    <link href="jqueryui/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/roboto_regular_macroman/stylesheet.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'robotoregular', Arial;
        }
        
        #top-container {
            position: relative;
            width: 80%;
            margin: auto;
        }
        
        #copeapp-title {
            display: inline-block;
            margin: 0;
        }
        
        #top-buttons {
            position: absolute;
            right: 0;
            bottom: 0;
            display: inline-block;
            text-align: right;
            vertical-align: bottom;
        }
        
        #carabiner-img {
            position: absolute;
            bottom: 0;
            width: 134px;
        }
        
        #middle-container {
            background-color: #B5BCD9;
            margin: 15px 0 0 0;
            padding: 0;
            position: relative;
            height: 250px;
            -webkit-box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 0px -1px 5px 0px rgba(0,0,0,0.75), 0px 1px 5px 0px rgba(0,0,0,0.75);
        }
        
        /*#middle-container > img {*/
        /*    height: 250px;*/
        /*}*/
        
        #top-btn-signup {
            margin: 0;
        }
        
        #top-btn-login {
            margin-left: 8px;
        }
        
        #login-card {
            /*width: 400px;*/
            position: absolute;
            padding: 8px;
            display: inline-block;
            border: 1px solid black;
            border-radius: 5px;
            background-color: white;
            z-index: 10;
        }
        
        #login-error {
            text-align: center;
        }
        
        .card-h1 {
            margin: auto;
            text-align: center;
        }
        
        /*#login-btn-div {*/
        /*    position: relative;*/
        /*}*/
        
        #login-actions {
            /*position: absolute;*/
            /*right: 0;*/
            display: block;
            text-align: right;
        }
        
        .close-card {
            position: absolute;
            top: 0;
            right: 0;
        }
        /*.top-btn:hover {*/
        /*    font-weight: bold;*/
        /*}*/
        
        #shadow-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            height: 100%;
            background-color: black;
            opacity: 0.7;
        }
    </style>
    <script src="jqueryui/jquery.js"></script>
    <script src="jqueryui/jquery-ui.min.js"></script>
    <!--<script type="text/javascript" src="jqtransform/jqtransformplugin/jquery.jqtransform.js"></script>-->
    <script>
        $(document).ready(function() {
            
            
            
            $(".btn").each(function() {
                $(this).button();
            });
            
            $("#login-error").hide();
            
            $("#shadow-overlay").height($(window).height()).width($(window).width()).offset({top: 0, left: 0});
            $("#shadow-overlay").hide();
            
            // $(function() {
            //     $("form.jqtransform").jqTransform();
            // });
            
            // Click Login
            $("#login-card").width($("#login-card").width()).draggable();
            $("#login-card").hide();
            
            $("#top-btn-login").click(function() {
                $("#shadow-overlay").show("fade");
                $("#login-card").show("puff");
            });
            
            $(".close-card").click(function() {
                $("#shadow-overlay").hide("fade");
                $(this).parent().hide("puff");
            });
            
            $("#login-card").offset({
                top: ($(window).height() / 2) - ($("#login-card").height() / 2),
                left: ($(window).width() / 2) - ($("#login-card").width() / 2),
            });
            
            // Login Submit
            $("#login-submit-btn").click(function() {
                $.post("api/read/instructor_login.php", {"username": $("#login-username").val(), "password": $("#login-password").val()}, function(data) {
                    if(data.success == true) {
                        $("#shadow-overlay").hide("fade");
                        $("#login-card").hide("puff");
                        $("#middle-container").css("transition", "height 1.25s").height($(window).height()).css("margin", "0");
                        $("#top-container").slideUp(1250, function() {
                            window.location = "starthere.php";
                        });
                    } else {
                        $("#login-error").slideDown("slow");
                    }
                });
                
                
            });
        });
    </script>
</head>
<body>
    <div id="top-container">
        <h1 id="copeapp-title">COPEapp</h1>
        <div id="top-buttons">
            <button class="btn top-btn" id="top-btn-signup">Sign-Up</button>
            <button class="btn top-btn" id="top-btn-login">Login</button>
        </div>
    </div>
    <div id="middle-container">
        <img src="images/climbing_crop.jpg" id="carabiner-img">
    </div>
    <div id="login-card" title="Login to COPEapp">
        <h1 class="card-h1">Login to COPEapp</h1>
        <div class="ui-widget" id="login-error">
        	<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
        		Incorrect username or password!
        	</div>
        </div>
        <label for="username">Username:</label>
        <input id="login-username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="login-password" name="login-password">
        <br><br>
        <div id="login-actions">
            <a href="#" id="forgot-submit-btn">Forgot my Password</a> | 
            <button id="login-submit-btn" class="btn">Login</button>
        </div>
        <i class="fa fa-times close-card"></i>
    </div>
    <div id="shadow-overlay"></div>
</body>
</html>