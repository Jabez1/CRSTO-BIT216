<?php
include_once 'database.php';
session_start();
$username = $_SESSION[profile][username];
$sql = "SELECT a.tripID, a.applicationID, a.status, a.remarks FROM application a
        JOIN Trip t 
        ON a.tripID = t.tripID
        WHERE t.username = '$username' ";
$_SESSION['appList']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["appList"][] = $row;
}



header("Location:manageApp.php")
?>

