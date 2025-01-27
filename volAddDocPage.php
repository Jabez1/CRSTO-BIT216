﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Record New Test Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="inputValidate.js"></script>

</head>
<body>
<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a> 
        <?php
        session_start();
        echo"Welcome {$_SESSION['profile']['username']}";
        ?>       
    </a>
    <a href="Logout.php">Log Out </a>
</nav>
<main>
    <div class="container">
    <div class="row">
        <div class="col">

        <h1 class="p-2">Add a Travel/Identification Document</h1>
        <br>
        <form method="POST" action="volAddDoc.php" 
              enctype="multipart/form-data" class="d-flex flex-column bg-light p-5 col-12"> 
              <div class="form-group">
              <div class="d-flex flex-column align-items-center"> 
               

                <img id="frame" src="" width="10px" height="10px"
                onerror="if (this.src != 'Images/AddImage.png') this.src = 'Images/AddImage.png';" >
                 <input required type="file" name="img" value="" accept="image/*" class= "btn p-2" 
                onchange="document.getElementById('frame').src = window.URL.createObjectURL(this.files[0])"/> 


               </div> 

                <label>Document Type: </label>
                <select class="custom-select" name="docType" id="type">
                    <option>PASSPORT</option>
                    <option>CERTIFICATE</option>
                    <option>VISA</option>
                </select>
              </div>  

            <label>Expiry Date </label>
            <?php
            $today = date("Y-m-d");
            echo '<input name="expiryDate" class="form-control" type="date" id="datePicker" min="'. $today .'">';
            ?>
            <br>
            <input type="submit" name="upload" class= "btn col-4 align-self-center" value="Add"/> 
            <div class="row justify-content-end"> 
            <a href="volPage.php"  class= "btn button col-1"> Done </a>
            </div>
            <script>
            //dateValidate('datePicker');
            </script>
        </form> 
        </div>
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