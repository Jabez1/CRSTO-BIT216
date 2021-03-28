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
        $_SESSION['appError']= 1;
        echo $_SESSION['appError'];

        echo "problem";
        header("Location:volTripPage.php");
        break;
    }   
}

if(!isset($_SESSION['appError'])){
    $sql = "INSERT INTO Application(applicationDate, username, tripID) 
    VALUES ('$dateToday', '$username', '$tripID');";
    
    if ($connection->query($sql) === TRUE) {
        echo "Applied successfuly";
        $_SESSION['appError']= 0;
    } else {
        echo "\nError: " . $sql . "<br>" . $connection->error;
    }
}



header("Location:volTripPage.php")
?>