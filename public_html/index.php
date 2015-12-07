<?php

require_once("rconfig.php");

try {
    $config['smarty']->display('user/login.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
