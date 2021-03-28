<?php
include_once 'database.php';
session_start();
$status = $_POST['status'];
$remarks = $_POST['remarks'];
$sql = "UPDATE application SET status= '$status', remarks= '$remarks'
        WHERE applicationid = $appid";
?>