<?php

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "copeapp";
$dbport = 3306;

try {
    $db = new PDO("mysql:host=$servername;dbname=$database;port=$dbport", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

// //Create connection
// $db = new mysqli($servername, $username, $password, $database, $dbport);

// // Check connection
// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }

?>