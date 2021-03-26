<?php
include_once 'database.php';
session_start();
$username = $_SESSION['username'];

if(isset($_POST['username'])){
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

}

//resets username and profile session variables
$sql = "SELECT * FROM document";

$result = $connection->query($sql);
$_SESSION["docArray"]=[];
while ($row =  $result->fetch_assoc() ) {
    if ($row['username']== $username) {
        $_SESSION["docArray"][] = $row;
    }
}


header("Location:volUpdatePage.php");
?>