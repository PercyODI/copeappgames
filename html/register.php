<?php

require_once("config.php");

try {
    $config['smarty']->display('user/register.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>