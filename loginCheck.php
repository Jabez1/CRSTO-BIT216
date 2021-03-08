<?php
include_once 'database.php';
session_start();
$username = $_POST['username'];
$password = $_POST['userpass'];
$_SESSION['loginFail'] = 1;


$sql = "SELECT * FROM worker";

$result = $connection->query($sql);

while ( $row =  $result->fetch_assoc() ) {
    //checks from worker table
    if ($row['username']== $username && $row["userpass"]==$password) {
        echo "Login Successful";
        //sets session variable username
        $_SESSION['username'] = $username;
        $_SESSION['profile'] = $row;
        //check workerType
        if($row['workerType']== "Volunteer"){
            $_SESSION["loginFail"] = 0;
            header("Location:volPage.php");
        }
        else{
            if($row['workerType']== "Staff"){
                //this Session variable is called here to identify future errors
                $_SESSION["loginFail"] = 0;
                header("Location:newTrip.php");
            }
            elseif($row['position']== "Manager"){
                $_SESSION['loginFail'] = 0;
                header("Location:staffPage.php");
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