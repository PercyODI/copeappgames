<?php

/*  ### Note from Pearse ###
    
    When moving to another system, be sure to add the following line to 
    php.ini in the working directory. Modify the path so that correctly points
    to the resources folder.
    
    include_path = ".:/home/ubuntu/workspace/v0.4/resources"
    
*/

/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 


/*  ### Custom class includes by Pearse ###
    
    Autoloads classes found in the resources/library/classes when called
*/

function autoload_classes($classname) {
    $file = LIBRARY_PATH . "/classes/{$classname}.class.php";
    if (file_exists($file)) {
        require_once($file);
    } else {
        throw new Exception("The class `$classname` was not found in the " . LIBRARY_PATH . "/classes directory.<br>
                             Please try a different class, or create a new class");
    }
}

spl_autoload_register("autoload_classes");
 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 
$config = array(
    "db" => array(
        "dbname" => "copeapp_games",
        "username" => getenv('C9_USER'),
        "password" => "",
        "host" => getenv('IP'),
        "port" => 3306
    ),
    "urls" => array(
        "baseUrl" => "https://copeapp-percyodi.c9.io/v0.4/"
    ),
    "paths" => array(
        "resources" => "/home/ubuntu/workspace/v0.4/resources/",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>