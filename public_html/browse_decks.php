<?php

require_once("config.php");

if(!isset($_GET['userid'])) {
    $_GET['userid'] = "any";
} elseif ($_GET['userid'] != $_SESSION['userid']) {
    $config['smarty']->assign('copename', User::getCopenameFromId($_GET['userid']));
}
if(!isset($_GET['search']) or $_GET['search'] == "") {
    $_GET['search'] = null;
}
if(!isset($_GET['limit'])) {
    $_GET['limit'] = 100;
}
if(!isset($_GET['offset'])) {
    $_GET['offset'] = 0;
}

try {
    $decks = Deck::getDecks($_GET['userid'], $_GET['search'], $_GET['limit'], $_GET['offset']);
    $config['smarty']->assign('decks', $decks);
    $config['smarty']->display('deck/browse_decks.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>