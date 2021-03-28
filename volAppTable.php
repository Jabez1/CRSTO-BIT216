<?php
include_once 'database.php';
session_start();

$username = $_SESSION[profile][username];

$sql = "SELECT t.tripID, t.tripDate, t.description, a.status, a.remarks
        FROM Application a
        JOIN Trip t
        ON a.tripID = t.tripID
        WHERE a.username = '$username'";
$_SESSION['appArray']= [];

$result = $connection->query($sql);
while ( $row =  $result->fetch_assoc() ) {
    $_SESSION["appArray"][] = $row;
}   

header("Location:volAppPage.php");
?>