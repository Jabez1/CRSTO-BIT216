<?php
include_once 'database.php';
session_start();

$username = $_POST['username'];
$userpass = $_POST['userpass'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

$sql = "SELECT * FROM worker";
$_SESSION['volInfo']= [];

$sql = "UPDATE worker         
        SET username = '$username', userpass = '$userpass', fullName = '$fullname', phone = '$phone' 
        WHERE username = '{$_SESSION['username']}'";


if ($connection->query($sql) === TRUE) {
    echo "Edited successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}


header("Location:volunteerPage.php");
?>