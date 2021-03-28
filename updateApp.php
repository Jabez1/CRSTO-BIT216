<?php
include_once 'database.php';
session_start();
$status = $_POST['status'];
$remarks = $_POST['remarks'];
$appid = $_POST['appid'];
$_SESSION['appInfo']= [];
$sql = "UPDATE application SET status= '$status', remarks= '$remarks'
        WHERE applicationid = $appid";
if ($connection->query($sql) === TRUE) {
    echo "Updated successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
header("Location:manageApp.php")
?>