<?php
require_once("config.php");

header("Content-Type: application/json");

$return['loginSuccess'] = null;

if(!isset($_POST['username']) or !isset($_POST['password'])) {
    $return['loginSuccess'] = 'false';
    echo json_encode($return);
    exit();
}

if($user = User::validateUser($_POST['username'], $_POST['password'])) {
    $return['loginSuccess'] = 'true';
    $_SESSION['userid'] = $user->getUserid();
    $_SESSION['userobj'] = serialize($user);
} else {
    $return['loginSuccess'] = 'false';
}

echo json_encode($return);

?>