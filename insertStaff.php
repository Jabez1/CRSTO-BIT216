<?php
include_once 'database.php';
session_start();

$workerID = $_POST['ctrId'];
$userName = $_POST['usern'];
$password = $_POST['Psw'];
$fullname = $_POST['Ofn'];
$position = $_POST['Pos'];

$sql = "SELECT * FROM officer";
$_SESSION['officerArray']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["officerArray"][] = $row;
}

$sql = "INSERT INTO officer (workerID, userName, password, fullname, position) VALUES ($workerID, '$userName', '$password', '$fullname', '$position');";
if ($connection->query($sql) === TRUE) {
    echo "Added successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

header("Location:CTOfficer.php");

?>