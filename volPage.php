<!DOCTYPE html>
<?php 
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

<main>
    <div id="container" class="container bg-light">
    <div class="row">
        <div class="p-4 col-12 col-lg-5">
            <div class="d-flex flex-column align-items-center p-4">
                <h1>Profile Details</h1>
                <div id="picFrame">
                    <img src="Images/picture.jpg" onError="this.onerror=null;this.src='Images/defaultPfp.jpg';" />
                </div>    
                <label class="align-self-start" id= "name">Full Name: <?php echo $_SESSION['profile']['fullName']; ?></label>
                <label class="align-self-start" id="id">Username:  <?php echo $_SESSION['profile']['username']; ?></label>
                <label class="align-self-start" id="status">Phone Number:  <?php echo $_SESSION['profile']['phone']; ?></label>
                <br>
                <a class="btn button" href="volUpdate.php">Manage Profile</a>
                <!-- documents use case <a class="btn button" href="manageDocuments.php">Manage Documents</a>-->
            </div>
        </div>
        <div class="table-responsive p-4 bg-light col-lg-7">
            <div class="p-4">
                <table class="table" id="CRSTOList">
                        <thead>
                            <tr>
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
                                echo '<td>'. $arrayRow['docType'] .'</td>';
                                echo '<td>'. $arrayRow['expiryDate'] .'</td>';
                                echo '<td><img src="Images/'. $arrayRow['imgFile'] .'" id="doc" ></td>';
                                echo '</tr>';
                        }
                        
                            ?>
                        </tbody>
                        
                </table>
                <br>
                
            </div>
        </div>
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