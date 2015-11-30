<?php

require_once("config.php");

try {
    $deck = new Deck((int)$_GET['deckid']);
    
    $config['smarty']->assign('deck', $deck);
    $config['smarty']->display('deck/edit_deck.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>