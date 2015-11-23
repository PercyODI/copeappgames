<?php

// Expects a GET call for the number and offset of games
require_once("../api_header.php");
require_once("../connect.php");
require_once("game_card_class.php");

if(!isset($_GET['limit']) or !is_numeric((int) $_GET['limit'])) {
    $_GET['limit'] = 10;
} else {
    $_GET['limit'] = (int) $_GET['limit'];
}

if(!isset($_GET['offset']) or !is_numeric((int) $_GET['offset'])) {
    $_GET['offset'] = 0;
} else {
    $_GET['offset'] = (int) $_GET['offset'];
}

try {
    foreach($db->query("SELECT gameid FROM game LIMIT {$_GET['limit']} OFFSET {$_GET['offset']}") as $gameid) {
        $gameCards["{$gameid[0]}"] = new game_card_class($gameid[0]);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$return = array();;

foreach($gameCards as $gameCard) {
    $return[] = $gameCard->getCardFrontHTML() . "\n";
}

echo json_encode($return);

