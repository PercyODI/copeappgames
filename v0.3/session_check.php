<?php

session_start();

if(isset($_SESSION['instructorid']) and basename($_SERVER['PHP_SELF']) === 'index.php') {
    header("Location: starthere.php");
    exit();
}
elseif(!isset($_SESSION['instructorid']) and basename($_SERVER['PHP_SELF']) != 'index.php') {
    header("Location: index.php");
    exit();
}

?>