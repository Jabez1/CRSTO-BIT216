<?php
include_once 'database.php';
session_start();

$userName = $_POST['username'];
$password = $_POST['userpass'];
$fullname = $_POST['fullName'];
$phone = $_POST['phone'];
$workerType = $_POST['workerType'];
$position = $_POST['position'];
$dateJoined = $_POST['dateJoined'];


$sql = "INSERT INTO worker (username, userpass, fullName, phone, workerType, position, dateJoined) VALUES ('$userName', '$password', '$fullname', '$phone', '$workerType', '$position', '$dateJoined');";
if ($connection->query($sql) === TRUE) {
    echo "Added successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$sql = "SELECT * FROM worker";
$_SESSION['workerArray']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["workerArray"][] = $row;
}

header("Location:staffPage.php");

?>