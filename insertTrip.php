<?php
include_once 'database.php';
session_start();

$TripID = $_POST['tripID'];
$Description = $_POST['description'];
$TripDate = $_POST['tripDate'];
$Location = $_POST['location'];
$NumVolunteers = $_POST['numVolunteers'];
$Username = $_POST['username'];



$sql = "INSERT INTO trip (tripID, description, tripDate, location, numVolunteers, username) VALUES ($TripID, '$Description', '$TripDate', '$Location', '$NumVolunteers', '$Username');";
if ($connection->query($sql) === TRUE) {
    echo "Created successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$sql = "SELECT * FROM trip";
$_SESSION['tripArray']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["tripArray"][] = $row;
}

//header("Location:newTrip.php");

?>