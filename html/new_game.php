<?php

require_once("config.php");

try {
    $types = array();
    $typesDB = Database::runQuery("SELECT * FROM type");
    foreach($typesDB as $type) {
        $types[$type['typeid']] = $type['keyword'];
    }
    $config['smarty']->assign('types', $types);
    $config['smarty']->display('game/new_game.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>