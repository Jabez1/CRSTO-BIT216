<?php
include_once 'database.php';
session_start();
 
$documentType = $_POST['docType'];
$expiryDate = $_POST['expiryDate'];
$username = $_SESSION['profile']['username'];


if (isset($_POST['upload'])) { 
    $temp = $_FILES["img"]["tmp_name"];
    $filename = $_FILES["img"]["name"]; 
    $imgFolder = "Images/".$filename;

    // Get all the submitted data from the form 
    $sql = "INSERT INTO document (documentType, expiryDate, imgFile, username) VALUES ('$documentType', '$expiryDate', '$filename', '$username')"; 
    if ($connection->query($sql) === TRUE) {
        echo "Image added to database";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    if (move_uploaded_file($temp, $imgFolder))  { 
        echo "Image uploaded successfully"; 
    }else{ 
        echo "Failed to upload image, Error:".$_FILES['img']['error']; 
    } 
}
header("Location:volAddDocPage.php");
?>