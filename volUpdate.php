<?php
include_once 'database.php';
session_start();

$username = $_POST['username'];
$userpass = $_POST['userpass'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

$sql = "SELECT * FROM worker";
$_SESSION['volInfo']= [];

$sql = "UPDATE worker         
        SET username = '$username', userpass = '$userpass', fullName = '$fullname', phone = '$phone' 
        WHERE username = '{$_SESSION['username']}'";


if ($connection->query($sql) === TRUE) {
    echo "Updated successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

//resets username and profile session variables
$sql = "SELECT * FROM worker";

$result = $connection->query($sql);

while ($row =  $result->fetch_assoc() ) {
    if ($row['username']== $username) {
        echo "Updated sucessfully";
        //sets session variable username
        $_SESSION['username'] = $username;
        $_SESSION['profile'] = $row;
    }
}

header("Location:volPage.php");
?>