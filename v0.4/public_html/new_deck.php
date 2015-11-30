<?php

require_once("config.php");

try {
    $config['smarty']->display('deck/new_deck.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>