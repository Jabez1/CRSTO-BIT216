<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Record New Test Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="inputDisplay.js"></script>

</head>
<body>
<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="testGenerate.php"> 
        <?php
        session_start();
        echo"Welcome {$_SESSION['username']}";
        ?>       
    </a>
    <a href="volSignUpPage.php">Sign Up</a>
    <a href="CTUpdateTestResult.php">Update Test Results</a>
    <a href="Logout.php">Log Out </a>
</nav>
<main>
    <div class="container p-2 col-3 col-sm-5 col-md-7">
        <div class="d-flex flex-column align-items-center">

        <h1 class="p-3">Add a Travel/Identification Document</h1>
        <br>
        <form method="POST" action="volAddDoc.php" 
              enctype="multipart/form-data" class="d-flex flex-column bg-light p-5 col-10"> 
              <div class="form-group">


                <label>Document Type: </label>
                <select class="custom-select" name="docType" id="type">
                    <option>PASSPORT</option>
                    <option>CERTIFICATE</option>
                    <option>VISA</option>
                </select>
              </div>  

            <label>Expiry Date </label>
            <input name="expiryDate" class="form-control" type="date" min="2021-03-09">

            <input required type="file" name="img" value="" class= "btn " 
            onchange="document.getElementById('frame').src = window.URL.createObjectURL(this.files[0])"/> 
            <?php
                echo '<a><img id="frame" src="" width="10px" height="10px" /></a>';
            ?>

            <div> 
                <input type="submit" name="upload" class= "btn" value="Upload"/> 
                <a href="volPage.php"  class= "btn button"> Done </a>

            </div> 
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