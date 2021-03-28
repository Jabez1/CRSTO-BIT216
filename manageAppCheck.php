<?php
include_once 'database.php';
session_start();
$status = $_POST['status'];
print_r($status);
$sql = "SELECT * FROM `application`";
$_SESSION['appList']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["appList"][] = $row;
}


//header("Location:manageApp.php")
?>

