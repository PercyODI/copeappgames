<?php

require_once("config.php");

if(isset($_GET['gameid'])) {
    $_GET['gameid'] = (int) $_GET['gameid'];
} else {
    $_GET['gameid'] = 1;
}

try {
    $game = new Game($_GET['gameid']);
    $deckname = Deck::getDeckName($game->getDeckid());
    $config['smarty']->assign('deckname', $deckname);
    $game->displayFullGameSmarty('game/view_full_game.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
