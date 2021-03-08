<?php
include_once 'database.php';
session_start();

//Get test table
$sql = "SELECT * FROM test";

//this line is to clear testArray whenever this php file is called
$_SESSION['testArray']= [];
$result = $connection->query($sql);

//this adds the sql table to an Array
while($test = $result->fetch_assoc()) {
    if($test['patientID']== $_SESSION["info"]['patientID']){
        $_SESSION['testArray'][] = $test;
    }
    
}

//This will immediately go to Patient History page
header("Location:CTPHistory.php");
?>