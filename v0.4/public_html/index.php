<?php

// set_include_path(get_include_path() . PATH_SEPARATOR . "/home/ubuntu/workspace/v0.4/resources");

require_once("config.php");

try {
    $test = new Game;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>