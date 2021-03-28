<?php
include_once 'database.php';
session_start();

//takes data from the post form
$tripID =  $_POST['tripID'];  

print_r($_SESSION['profile']['username']);


$dateToday = date("Y-m-d");
$username = $_SESSION['profile']['username'];

$sql = "INSERT INTO Application(applicationDate, username, tripID) 
VALUES ('$dateToday', '$username', '$tripID');";

if ($connection->query($sql) === TRUE) {
    echo "Applied successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}


header("Location:volTripPage.php")
?>