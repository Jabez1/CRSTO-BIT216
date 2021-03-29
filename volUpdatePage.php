<!DOCTYPE html>
<?php 
include_once 'database.php';
session_start();

?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Testing History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<header>
<img src="Images/logo.png" alt="LOGO" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="volPage.php">Profile Page</a> 
    <a href="volTripPage.php">Apply For a Trip</a> 
    <a href="volAppPage.php">View Applications</a>
    <a href="Logout.php">Log Out </a> 
</nav>
<script type="text/javascript" src="selectTable.js"></script>
<main>
<h1>Update Profile Details</h1>
    <div id="container" class="container bg-light">
        <div class="row">
        <div class="p-4 col-12 col-sm-12 col-lg-5">
            <div class="p-4">
                
                <form  class="form-group" action="volUpdate.php" method="post">
                   <label for="username"> Username </label>
                   <input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['profile']['username']; ?>">

                   <label for="userpass"> Password </label>
                   <input type="text" name="userpass" id="userpass" class="form-control">

                   <label for="fullname"> Full Name </label>
                   <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $_SESSION['profile']['fullName']; ?>">

                   <label for="phone"> Phone Number </label>
                   <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $_SESSION['profile']['phone']; ?>">

                   <br>
                   <div class="row justify-content-around">
                   <input type="submit" value="Submit" class="btn col-5">
                   <a class="btn button col-5" href="volPage.php">Back</a>
                   </div>
                   </form>
            </div>
        </div>    
        <div class="table-responsive p-4 bg-light col-12 col-lg-6">
        <div class="p-4">
             <table class="table" id="docList">
                <thead>
                    <tr>
                        <th> Document ID </th>
                        <th> Document Type </th>
                        <th> Expiry Date </th>
                        <th> Preview </th>
                    </tr>
                </thead>
                <tbody class="text-light">
                <?php
                    if(!isset($_SESSION['docArray'])){
                        header("Location:volUpdate.php");
                    }
                    foreach ($_SESSION['docArray'] as $index => $arrayRow) {
                        echo '<tr>';
                        echo '<td>'. $arrayRow['docID'] .'</td>';
                        echo '<td>'. $arrayRow['docType'] .'</td>';
                        echo '<td>'. $arrayRow['expiryDate'] .'</td>';
                        echo '<td><img src="Images/'. $arrayRow['imgFile'] .'" id="doc" ></td>';
                        echo '</tr>';
                   }
                   unset($_SESSION['docArray']);
                
                    ?>
                </tbody>
                    
            </table>
            <br>
            <form  class="form-group" action="volUpdateDoc.php" method="post">
                   <label for="selDoc"> Selected Document ID </label>
                   <input type="text" name="selDoc" id="docForm" class="form-control" readonly>
                   <div class="row justify-content-around">
                   <input type="submit" onclick="return confirm('Are you sure you want to delete this document?')" value="Delete Selected Document" class="btn col-5">
                        <a class="btn button col-5" href="volAddDoc.php">Add New Document</a>
                    </div>
            </form>

        </div>
        <script>
        selectTable("docList","docForm");
        </script>
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