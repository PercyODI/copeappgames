<?php
require_once("config.php");

header("Content-Type: application/json");

$return = array();

if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['confirmpassword'])) {
        $return['status'] = 'error';
        $return['message'] = 'Missing Fields';
        echo json_encode($return);
        exit();
}

$newUser = User::newUser($_POST);
if ($newUser['status'] == 'success') {
    $return['status'] = 'success';
} else {
    $return['status'] = $newUser['status'];
    $return['message'] = $newUser['message'];
}

echo json_encode($return);

?>