<?php

header('Content-type: application/json');
include_once("../connect.php");

if(isset($_POST['username']) and isset($_POST['password'])) {
    try {
        $stmt = $db->prepare("SELECT * FROM instructor WHERE username = :username AND password = :password");
        $stmt->execute(array("username" => $_POST['username'], "password" => $_POST['password']));
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($data) == 1) {
            $return['success'] = true;
        } else {
            $return['success'] = false;
        }
    } catch(PDOException $e) {
        // echo 'ERROR: ' . $e->getMessage();
        echo json_encode(array('ERROR: ' => $e->getMessage(), "SQL Statement" => $sqlStr));
    }
} else {
    $return['success'] = false;
}

echo json_encode($return);