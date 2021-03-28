<?php
include_once 'database.php';
session_start();

//takes data from the post form
$tripID =  $_POST['tripID'];  

print_r($_SESSION['profile']['username']);


$dateToday = date("Y-m-d");
$username = $_SESSION['profile']['username'];


$sql= "SELECT username, tripID FROM Application";
$applications = $connection->query($sql);
while ($row =  $applications->fetch_assoc()) {
    if ($row["username"] == $username && $row["tripID"] == $tripID){
        //when duplicate application is found
        $_SESSION['Application']= 1;
        echo "problem";
        break;
    }   
}

if(!isset($_SESSION['Application'])){
    $sql = "INSERT INTO Application(applicationDate, username, tripID) 
    VALUES ('$dateToday', '$username', '$tripID');";
    
    if ($connection->query($sql) === TRUE) {
        echo "Applied successfuly";
    } else {
        echo "\nError: " . $sql . "<br>" . $connection->error;
    }
}



header("Location:volTripPage.php")
?>