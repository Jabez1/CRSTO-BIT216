<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Record New Test Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="inputDisplay.js"></script>

</head>
<?php 
session_start();
if(isset($_SESSION['errorType'])){
    if($_SESSION['errorType']==1){
        echo '<script>alert("The username is in use");</script>';
        unset($_SESSION['errorType']);
    }
}
?>
<body>
<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="Logout.php">Exit </a>
</nav>
<main>
    <div class="container p-2 col-3 col-sm-5 col-md-7">
        <div class="d-flex flex-column align-items-center">

        
        <h1 class="p-3">Enter Volunteer Details</h1>
        <br>

    <form form action="volSignUp.php" method="post" class="d-flex flex-column bg-light p-5 col-10">
        <div class="form-group">
            <label>Username: </label>
            <input type="text" name= "username" class="form-control" placeholder="Enter Username">   
        </div>

        <div class="form-group">
            <label>Password: </label>
            <input type="password" name= "userpass" class="form-control" placeholder="Enter Password">   
        </div>  

        <div class="form-group">
            <label>Confirm Password: </label>
            <input type="password" name= "userpass2" class="form-control" placeholder="Enter Password">   
        </div>  

        <div class="form-group">
            <label>Full Name: </label>
            <input type="text" name= "fullName" class="form-control" placeholder="Enter Full Name">   
        </div>  
        <div class="form-group">
            <label>Phone Number: </label>
            <input type="text" name= "phone" class="form-control" placeholder="Enter Phone Number">   
        </div>  
        <br>
        <input type="submit" class="btn w-50 align-self-center" placeholder="Enter Comments (If Any)">
        
        
    </form>
        </div>
    </div>

</main>
<footer>
    <p>If there are any issues, contact us at: 012983312
    </p>
    Copyright &copy; 2020
</footer>
</div>
</body>
</html>