<?php

require_once("config.php");

if(isset($_GET['deckid'])) {
    $_GET['deckid'] = (int) $_GET['deckid'];
} else {
    $_GET['deckid'] = 1;
}

try {
    $deck = new Deck($_GET['deckid']);
    $games = $deck->getDeckGames();
    $config['smarty']->assign('deckname', $deck->getName());
    $config['smarty']->assign("userid", $deck->getUserid());
    $config['smarty']->assign('usercopename', $deck->getUsercopename());
    $config['smarty']->assign('games', $games);
    $config['smarty']->display('deck/view_deck.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
