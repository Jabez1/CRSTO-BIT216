
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRSTO HOME </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="assignment.css">
    
</head>
<?php
session_start();
if(isset($_SESSION['loginFail'])){
    if($_SESSION['loginFail']==1){
        echo '<script> alert("Invalid login details"); </script>';
    }
}

?>

<body>
    <header>
    <img src="Images/logo.png" alt="logo" id="logo">
    </header>
    <nav class="navbar"> 
    </nav>

    <main class="d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column container justify-content-center bg-light p-5 align-middle w-50">
        <h1 class="text-center">Login</h1>
        <div class="p-3">  

            <form class="form-group" action="loginCheck.php" method="post">
                <label for="userName">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" >
                <label for="userpass"> Password </label>
                <input type="userpass" name="userpass" id="userpass" placeholder="Enter Password" class="form-control" >
                <br>
                <div class= "d-flex justify-content-center">
                    <input type="submit" value="Log in" class="btn">
                </div>
            </form>
        </div>

</main>
</body>
<footer>
    <p>If there are any issues, contact us at: 012983312
    </p>
    Copyright &copy; 2020
</footer>
</div>

</html>
      