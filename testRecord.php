<?php
include_once 'database.php';
session_start();
$sql = "SELECT * FROM patient";

//fetches the patient table data
$patients = $connection->query($sql);
//fetch assoc can't be used twice on the same variable
$patients2 = $connection->query($sql);
//this tells the php in RecordNewTest.php if there are issues
$_SESSION['errorType']= 3;

//defining the data received into variables
$username = $_POST['username'];
$password = $_POST['password'];
$fullName = $_POST['fullName'];
$symptoms = $_POST['symptoms'];
$type = $_POST['type'];
$comments = $_POST['comments'];
//PatientID always starts with 1
$patientID=1001;
//TestID always starts with 9
$testID = 9001;
$nameCheck=0;
//This is assuming only returnees do not need to log in, only new users will have to log in
if($type == "Returnee"){
    while ($row =  $patients->fetch_assoc()) {
        if ($row["userName"] == $username){
            //when user is found and patientID is defined
            $patientID = $row["patientID"];
            $nameCheck=1;
            break;
        }
    }
    //if userName doesn't exist
    if($nameCheck==0){
        $_SESSION['errorType']= 1;
        header("Location:CTRecordNewTest.php");
    }    
}
else{
    if($password == null){
        $_SESSION['errorType']= 4;
        header("Location:CTRecordNewTest.php");
    }
    while ($row =  $patients->fetch_assoc()) {
        if ($row["userName"] == $username){
            //userName exists
            $_SESSION['errorType']= 2;
            header("Location:CTRecordNewTest.php");
        }
    }
    //this patientID is auto-generated here
    while ($row =  $patients2->fetch_assoc()){
        if($patientID == $row['patientID']){
            $patientID++; 
        }
        else{
            break;
        }
    }
    //if patient is not returnee and the new username not used, the new patient will be added into database
    $sql = "INSERT INTO patient (patientID, userName, password, fullName, type, comments) 
    VALUES ($patientID, '$username', '$password', '$fullName', '$type', '$comments');";
    if ($connection->query($sql) === TRUE) {
        echo "Patient added successfuly";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
}


//set TestID and TestDate
date_default_timezone_set("Asia/Singapore");
$testDate = date("Y-m-d");
//This code helps find testId numbers that arent being used in ascending order.
$sql = "SELECT testID FROM test";
$testIDcheck = $connection->query($sql);
while ($row =  $testIDcheck->fetch_assoc()){
    if($testID == $row['testID']){
        $testID++;
    }
    else{
        break;
    }
}


//Finally the code to add the Test obj into the database
//Result and resultDate columns are ignored 
$sql = "INSERT INTO test (testID, testDate, status, patientID, symptoms) VALUES ($testID, '$testDate', 'Pending', $patientID, '$symptoms');";
if ($connection->query($sql) === TRUE) {
    echo "Test added successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

header("Location:CTRecordNewTest.php");
?>