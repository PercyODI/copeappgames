<?php

// set_include_path(get_include_path() . PATH_SEPARATOR . "/home/ubuntu/workspace/v0.4/resources");

require_once("config.php");

try {
    // $test = new Deck(1);
    // print_r($test);
    
    $replaceArr = array("#icon#" => "icon", "#title#" => "title", "#description#" => "description");
    print_r(array_values($replaceArr));
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>