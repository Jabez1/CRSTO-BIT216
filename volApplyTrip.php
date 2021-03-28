<?php
include_once 'database.php';
session_start();
$sql = "SELECT testID, testDate, result, resultDate, status, patientID FROM test";
$testID=$_SESSION['testFound']['testID'];
//takes data from the post form
$testResult =  $_POST['result'];  

print_r($_SESSION['testFound']['testID']);
print_r($_SESSION['username']);
if($_SESSION['testFound']==[]){
    unset($_SESSION['testFound']);
}
$resultDate = date("Y-m-d");
$sql = "UPDATE test  SET result = '$testResult', resultDate= '$resultDate', status = 'Complete' WHERE testID = $testID;";

if ($connection->query($sql) === TRUE) {
    echo "Test updated successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$sql = "SELECT * FROM test where testID =$testID;"; 
$row = $connection->query($sql);
$_SESSION['testFound']= $row->fetch_assoc();
header("Location:testFind.php")
?>