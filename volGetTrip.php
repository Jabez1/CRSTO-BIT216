<?php
include_once 'database.php';
session_start();
$sql = "SELECT * FROM trip";
$_SESSION['tripList']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["tripList"][] = $row;
}   
header("Location:volTripPage.php");
?>