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
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library') . '/');
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates') . '/');
 


/*  ### Custom class includes by Pearse ###
    
    Autoloads classes found in the resources/library/classes when called
*/

function autoload_classes($classname) {
    $file = LIBRARY_PATH . "classes/{$classname}.class.php";
    if (file_exists($file)) {
        require_once($file);
    } else {
        throw new Exception("The class `$classname` was not found in the " . LIBRARY_PATH . "classes directory.<br>
                             Please try a different class, or create a new class");
    }
}
// define('SMARTY_SPL_AUTOLOAD', 0);
require_once(LIBRARY_PATH . "external/smarty/libs/Smarty.class.php");
spl_autoload_register("autoload_classes");
 
/**
 * Require Smarty class
 */


 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
session_start(); 
 
$config = array(
    "db" => array(
        "dbname" => "copeappgamesdb",
        "username" => "site",
        "password" => "webpass",
        "host" => "localhost",
        "port" => 3306
    ),
    "urls" => array(
        "baseUrl" => "https://copeappgames.cloudapp.net"
    ),
    "paths" => array(
        "resources" => "/var/www/resources/",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    ),
    "smarty" => new Smarty(),
    'fontAwesomeIcons' => array()
);



/**
 * ### Custom Smarty configurations
 */

$config['smarty']->setTemplateDir(TEMPLATES_PATH);
$config['smarty']->setCompileDir(LIBRARY_PATH . 'external/smarty/templates_c');
$config['smarty']->setCacheDir(LIBRARY_PATH . 'external/smarty/cache');
$config['smarty']->setConfigDir(LIBRARY_PATH . 'external/smarty/configs');
$config['smarty']->setForceCompile(true); // Remove for deployment
 
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

<<<<<<< HEAD
<!--FROM C9-->
=======
<!-- FROM SERVER -->
>>>>>>> 0d34529221832b63f9f798eddcd1bfee9832c564
