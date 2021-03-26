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

//This is assuming only returnees do not need to log in, only new users will have to log in
while ($row =  $worker->fetch_assoc()) {
    if ($row["username"] == $username){
        //when user is found
        $_SESSION['errorType']= 1;
        $username = $row["username"];
        header("Location:volSignUpPage.php");
        break;
    }
}

$_SESSION['username'] = $username;
$sql = "INSERT INTO Worker(username, userpass, fullName, phone, workerType) 
VALUES ('$username', '$userpass', '$fullName', '$phone', 'Volunteer');";
if ($connection->query($sql) === TRUE) {
    echo "Worker added successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

while ($row =  $worker->fetch_assoc()) {
    if ($row["username"] == $username){
        //update session variable
        $_SESSION["profile"] = $row;
    }
}
    

header("Location:volAddDocPage.php");
?>