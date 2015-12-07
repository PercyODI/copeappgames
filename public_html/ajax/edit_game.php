<?php
require_once("config.php");

header("Content-Type: application/json");

$return = array();
if(empty($_POST['title']) or empty($_POST['description'])) {
    $return['status'] = 'error';
    $return['message'] = 'Missing Fields';
    echo json_encode($return);
    exit();
}

// check for correct user
if(isset($_SESSION['userid']) != $_POST['userid']) {
    $return['status'] = 'error';
    $return['message'] = 'Users can only edit their own games';
    echo json_encode($return);
    exit();
}

$newGame = Game::editGame($_POST);
if ($newGame['status'] == 'success') {
    $return['status'] = 'success';
    $return['relocate'] = "view_game.php?gameid=" . $_POST['gameid'];
} else {
    $return['status'] = $newGame['status'];
    $return['message'] = $newGame['message'];
}

echo json_encode($return);

?>