<?php
include_once 'database.php';
session_start();
$sql = "SELECT username FROM worker";

//fetches the patient table data
$worker = $connection->query($sql);

//this tells the php in RecordNewTest.php if there are issues
$_SESSION['errorType']= 3;

//defining the data received into variables
$username = $_POST['username'];
$userpass = $_POST['userpass'];
$fullName = $_POST['fullName'];
$phone = $_POST['phone'];

$nameCheck=0;
//This is assuming only returnees do not need to log in, only new users will have to log in
while ($row =  $worker->fetch_assoc()) {
    if ($row["username"] == $username){
        //when user is found
        $username = $row["username"];
        $nameCheck=1;
        $_SESSION['errorType']= 1;
        header("Location:volSignUpPage.php");
        break;
    }
}

if(nameCheck==0){
    $sql = "INSERT INTO Worker(username, userpass, fullName, phone, workerType) 
    VALUES ('$username', '$userpass', '$fullName', '$phone', 'Volunteer');";
    if ($connection->query($sql) === TRUE) {
        echo "Worker added successfuly";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
      
}

//header("Location:volSignUpPage.php");
?>