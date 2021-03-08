<?php 
session_start();

//Checks if Session's 'user' is set
if (isset($_SESSION['user'])) {
    session_destroy();
    unset($_SESSION['loginFail']);
//removes the session data
}
header("Location:loginPage.php");

?>