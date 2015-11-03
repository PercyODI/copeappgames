<?php

// Usage 
// $.getJSON("api/games_api.php", data, function() {...});
// 
// Parameters in data:
// goals: array of string goals
// search: string 

include_once("connect.php");

$allowed_goals = ['communication', 'planning', 'trust', 'teamwork', 'leadership', 'decisionmaking', 'problemsolving', 'selfesteem'];
$sqlWhere = "";
$data = array();



if( isset($_GET['goals']) ) {
    foreach($_GET['goals'] as $getGoal) {
        if( in_array($getGoal, $allowed_goals) ) { 
            if($sqlWhere != "") {
                $sqlWhere .= " and ";
            }
            $sqlWhere .= "keyword = '$getGoal'";
        }
    }
}

if( isset($_GET['search']) ) {
    if( $sqlWhere != "") {
        $sqlWhere = "AND " . $sqlWhere;
    }
    if( $stmt = $db->prepare("SELECT gameid, title, description, createdby, instructions, discussion, icon FROM game JOIN games_types USING (gameid) JOIN game_type USING (typeid) WHERE CONCAT_WS(' ', title, description) LIKE '%?%' $sqlWhere GROUP BY gameid") ) {
        $stmt->bind_param("s", $_GET['search']);
        $stmt->execute();
        $stmt->bind_result($gameid, $title, $description, $createdby, $instructions, $discussion, $icon);
        while( $stmt->fetch() ) {
            $data[] = ['gameid' => $gameid, 'title' => $title, 'description' => $description, 'createdby' => $createdby, 'instructions' => $instructions, 'discussion' => $discussion, 'icon' => $icon];
        }
    }
} 
else {
    if( $sqlWhere != "") {
        $sqlWhere = "WHERE " . $sqlWhere;
    }
    if( $stmt = $db->prepare("SELECT gameid, title, description, createdby, instructions, discussion, icon FROM game JOIN games_types USING (gameid) JOIN game_type USING (typeid) $sqlWhere GROUP BY gameid") ) {
        $stmt->execute();
        $stmt->bind_result($gameid, $title, $description, $createdby, $instructions, $discussion, $icon);
        while( $stmt->fetch() ) {
            $data[] = ['gameid' => $gameid, 'title' => $title, 'description' => $description, 'createdby' => $createdby, 'instructions' => $instructions, 'discussion' => $discussion, 'icon' => $icon];
        }
    }
}

header('Content-Type: application/json');
echo json_encode($data);

?>