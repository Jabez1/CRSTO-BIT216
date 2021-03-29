<?php
include_once 'database.php';
session_start();
$username =$_SESSION['profile']['username'];
$docID = $_POST['selDoc'];


$sql = "DELETE FROM document WHERE docID = '$docID'";


if ($connection->query($sql) === TRUE) {
    echo "Deleted successfuly";
    
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
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