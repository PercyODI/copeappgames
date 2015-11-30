<?php
require_once("config.php");

header("Content-Type: application/json");

$return = array();
if(empty($_POST['name']) or empty($_POST['description'])) {
    $return['status'] = 'error';
    $return['message'] = 'Missing Fields';
    echo json_encode($return);
    exit();
}

// check for correct user
if(isset($_SESSION['userid']) != $_POST['userid']) {
    $return['status'] = 'error';
    $return['message'] = 'Users can only edit their own decks';
    echo json_encode($return);
    exit();
}

$newDeck = Deck::editDeck($_POST);
if ($newDeck['status'] == 'success') {
    $return['status'] = 'success';
    $return['relocate'] = "browse_decks.php?userid=" . $_POST['userid'];
} else {
    $return['status'] = $newUser['status'];
    $return['message'] = $newUser['message'];
}

echo json_encode($return);

?>