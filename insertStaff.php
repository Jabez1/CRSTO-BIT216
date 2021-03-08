<?php
include_once 'database.php';
session_start();

$workerID = $_POST['workerID'];
$userName = $_POST['username'];
$password = $_POST['userpass'];
$fullname = $_POST['fullname'];
$position = $_POST['position'];
$phone = $_POST['phone'];
$datejoined = $_POST['datejoined'];

$sql = "SELECT * FROM worker";
$_SESSION['workerArray']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["workerArray"][] = $row;
}

$sql = "INSERT INTO worker (workerID, username, userpass, fullname, position, phone, datejoined) VALUES ('$workerID', '$userName', '$password', '$fullname', '$position', '$phone', '$datejoined');";
if ($connection->query($sql) === TRUE) {
    echo "Added successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

header("Location:staffPage.php");

?>