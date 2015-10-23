<?php
include_once("connect.php");

$tableData = array();

if ($result = $db->query("SELECT fname, lname, copename FROM scout")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $tableData[] = $row;
    }
}

foreach($tableData as $row) {
    echo "<p class='scoutname'><b>" 
        . $row['copename'] 
        . "</b> -> " 
        . $row['fname'] 
        . " " 
        . $row['lname'] 
        . "</p>\n";
    echo "<hr>";
}

print_r($tableData);

?>