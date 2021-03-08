<?php

$host = "localhost";
$database = "bit216";
$user = "root";
$pass = "";

$connection = new mysqli ($host, $user, $pass, $database);

// mysqli_connect_errno returns the last error code
if ($connection->connect_errno) {
	die("connection failed; ". $connection->connect_error);
}
?>