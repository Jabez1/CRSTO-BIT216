<?php
include_once 'database.php';
session_start();

$sql = "SELECT * FROM `application`";
$_SESSION['applicationArray']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["applicationArray"][] = $row;
}


?>