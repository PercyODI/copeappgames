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

// Add userid to post for User::newUser
if(!isset($_SESSION['userid'])) {
    $return['status'] = 'error';
    $return['message'] = 'Must Be Logged In To Create Decks';
    echo json_encode($return);
    exit();
}

$_POST['userid'] = $_SESSION['userid'];

$newDeck = Deck::newDeck($_POST);
if ($newDeck['status'] == 'success') {
    $return['status'] = 'success';
    $return['relocate'] = "browse_decks.php?userid=" . $_SESSION['userid'];
} else {
    $return['status'] = $newUser['status'];
    $return['message'] = $newUser['message'];
}

echo json_encode($return);

?>