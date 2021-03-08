<?php
include_once 'database.php';
session_start();
$username = $_POST['username'];
$password = $_POST['userpass'];
$_SESSION["loginFail"] = 1;


$sql = "SELECT * FROM worker";

$result = $connection->query($sql);

while ( $row =  $result->fetch_assoc() ) {
    //checks from worker table
    if ($row["username"]== $username && $row["userpass"]==$password) {
        echo "Login Successful";
        //sets session variable username
        $_SESSION["username"] = $username;
        $_SESSION["profile"] = $row;
        //check workerType
        if($row["workerType"]== "Volunteer"){
            header("Location:volunteerProfile.php");
        }
        else{
            if($row["workerType"]!= "Manager"){
                //this Session variable is called here to identify future errors
                $_SESSION["loginFail"] = 0;
                header("Location:staffPage.php");
            }
            elseif($row["position"]== "manager"){
                $_SESSION["loginFail"] = 0;
                //header("Location:managerPage.php");
            }  
        } 
}
}

//loginFail will be set to 0 if Login is successful
if($_SESSION['loginFail']==1){
//header("Location:loginPage.php");
echo "Invalid Login";

}

?>