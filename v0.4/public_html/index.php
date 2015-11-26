<?php

require_once("config.php");

try {
    $test = new Game(1);
    
    $test->returnSmartyTemplate($config['smarty'], 'test.tpl');
    // print_r(array_values($replaceArr));
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>