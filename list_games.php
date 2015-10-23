<?php
include_once("connect.php");

$tableData = array();

if ($result = $db->query("SELECT game.title, game.description FROM game")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $tableData[] = $row;
    }
    
    // $tagSql = "SELECT keyword FROM game_tag INNER JOIN games_tags ON tagid WHERE gameid = " . $row[gameid];
    // if($tagResult = $db->query($tagSql);
    // while($tag = $tagResult->fetch_array()) {
    //     $row['tags'][] = $tag;
    // }
}

foreach($tableData as $row) {
    echo "<p class='title'>" . $row['title'] . "</p>\n";
    echo "<p class='description'>". $row['description'] . "</p>\n";
    echo "<hr>";
}

print_r($tableData);

?>