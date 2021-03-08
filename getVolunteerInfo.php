<?php
include_once 'database.php';
session_start();

//Get test table
$sql = "SELECT * FROM worker";

//this line is to reinitialize volInfo  whenever this php file is called
//$_SESSION['volInfo']= [];
$result = $connection->query($sql);
/*
while($row = $result->fetch_assoc()) {
    if($row['username']== $_SESSION["username"];){
        $_SESSION['volInfo'] = $test;
    }
}
*/

//This will immediately go to Patient History page
header("Location:volunteerProfile.php");
?>