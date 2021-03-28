<?php
include_once 'database.php';
session_start();
$sql = "SELECT username FROM worker";

//fetches the patient table data
$worker = $connection->query($sql);

$_SESSION['errorType']= 0;


//defining the data received into variables
$username = $_POST['username'];
$userpass = $_POST['userpass'];
$fullName = $_POST['fullName'];
$phone = $_POST['phone'];

//Duplicate name
while ($row =  $worker->fetch_assoc()) {
    if ($row["username"] == $username){
        //when user is found
        $_SESSION['errorType']= 1;
        $username = $row["username"];
        header("Location:volSignUpPage.php");
        break;
    }
}


$sql = "INSERT INTO Worker(username, userpass, fullName, phone, workerType) 
VALUES ('$username', '$userpass', '$fullName', '$phone', 'Volunteer');";
if ($connection->query($sql) === TRUE) {
    echo "Worker added successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$sql = "SELECT * FROM worker";
$worker = $connection->query($sql);
$_SESSION['username'] = $username;
while ($row =  $worker->fetch_assoc()) {
    if ($row["username"] == $username){
        //update session variable
        $_SESSION["profile"] = $row;
    }
}
    

header("Location:volAddDocPage.php");
?>