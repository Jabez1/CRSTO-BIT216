<?php
include_once 'database.php';
session_start();
$username = $_POST['userName'];
$password = $_POST['ctrPass'];
$_SESSION["loginFail"] = 1;


$sql = "SELECT userName, password, position FROM officer";

$result = $connection->query($sql);

while ( $row =  $result->fetch_assoc() ) {
    
    if ($row["userName"]== $username && $row["password"]==$password) {
        echo "Login Successful";
        $_SESSION["username"] = $username;

        if($row["position"]== "tester"){
            //this Session variable is called here to identify future errors
            $_SESSION["loginFail"] = 0;
            header("Location:CTRecordNewTest.php");
        }
        elseif($row["position"]== "manager"){
            $_SESSION["loginFail"] = 0;
            header("Location:insertRegister.php");
        }
        
    } 
}

$sql = "SELECT * FROM patient";

$result = $connection->query($sql);

while ( $row =  $result->fetch_assoc() ) {
    if ($row["userName"]== $username && $row["password"]==$password) {
        echo "Login Successful";
        //After login the following php file will retrieve the patient's test info
        $_SESSION["user"] = $username;
        $_SESSION["info"] = $row;
        $_SESSION["test"] = $result;
        
        $_SESSION["loginFail"] = 0;
        header("Location:getPatientTest.php");
    } 
}


//loginFail will be set to 0 if Login is successful
if($_SESSION['loginFail']==1){
header("Location:CTIndex.php");
echo "Invalid Login";

}

?>