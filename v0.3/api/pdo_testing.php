<?php

include_once("connect.php");

try {
    $stmt = $db->prepare("SELECT gameid, title, description, createdby, instructions, discussion, icon FROM game JOIN games_types USING (gameid) JOIN game_type USING (typeid) WHERE keyword = :keyword GROUP BY gameid");
    $stmt->execute(array('keyword' => 'communication'));
    
    
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
    // while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     print_r($row);
    // }
    
    print_r($data);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>