<?php

// require_once("../api_header.php");
session_start();
require_once("game_card_class.php");

if(!isset($_GET['gameid']) or !is_numeric((int) $_GET['gameid'])) {
    $_GET['gameid'] = 1;
} else {
    $_GET['gameid'] = (int) $_GET['gameid'];
}

$game = unserialize($_SESSION['gameCards']["{$_GET['gameid']}"]);

echo $game->getFullCardHTML();

?>


