<?php

require_once("config.php");

try {
    $config['smarty']->display('user/login.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>