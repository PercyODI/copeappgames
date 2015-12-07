<?php
require_once("config.php");

header("Content-Type: application/json");

if(!isset($_POST['gameid']) or !isset($_POST['field']) or !isset($_POST['data'])) {
    $return['status'] = 'error';
    $return['message'] = 'Missing fields';
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

$newGame = Game::updateOneField($_POST['gameid'], $_POST['field'], $_POST['data']);
if ($newGame['status'] == 'success') {
    $return['status'] = 'success';
} else {
    $return['status'] = $newGame['status'];
    $return['message'] = $newGame['message'];
}

echo json_encode($return);

?>