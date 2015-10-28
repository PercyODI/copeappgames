<?php

include_once("../connect.php");

$dataArray = array();

if($_GET['searchText'] === '') {
    if ($result = $db->query("SELECT gameid, title, CONCAT(LEFT(description, 256), IF(LENGTH(description)>250, '...', '')) as description FROM game")) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $dataArray[] = $row;
        }
    }
} else {
    $searchTxt = $_GET['searchText'];
    $searchTextLike = "%" . $searchTxt . "%";
    if ($result = $db->query("  SELECT gameid, title, CONCAT(LEFT(description, 256), IF(LENGTH(description)>250, '...', '')) as description 
                                FROM game
                                WHERE title LIKE '$searchTextLike'
                                OR description LIKE '$searchTextLike'
                                ORDER BY CASE WHEN title LIKE '$searchTxt %' THEN 0
                                              WHEN title LIKE '% $searchTxt %' THEN 1
                                              WHEN title LIKE '$searchTextLike' THEN 2
                                              WHEN game.description LIKE '$searchTextLike' THEN 3
                                              ELSE 4
                                        END, title")) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $dataArray[] = $row;
        }
    }
}
foreach($dataArray as $row) {
    echo "<div class='game' gameid='" . $row['gameid'] . "'>";
    echo "<p class='title'>" . $row['title'] . "</p>\n";
    echo "<p class='description'>" . $row['description'] . "</p>\n";
    echo "</div>";
}

?>