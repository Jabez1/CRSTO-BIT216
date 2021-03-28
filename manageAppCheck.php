<?php
include_once 'database.php';
session_start();
$status = $_POST['status'];
$remarks = $_POST['remarks'];
print_r($status);
$sql = "SELECT * FROM application";
$sql = "UPDATE application SET status= '$status', remarks= '$remarks'
        WHERE applicationid = $appid";
$_SESSION['appList']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["appList"][] = $row;
}


//header("Location:manageApp.php")
?>

