﻿<!DOCTYPE html>
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

<body onload="getVolunteerInfo.php">
<header>
<img src="Images/logo.png" alt="LOGO" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="Logout.php">Log Out </a> 
</nav>

<main>
    <div id="container" class="container bg-light">
        <div class="d-flex justify-content-md-between p-4 col-12 col-sm-10">
            <div class="d-flex flex-column align-items-center p-4 col-12 col-sm-12 col-md-7">
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
        
            <!-- 
            <div class="bg-custom table col col-sm-12 col-md-7 p-0" id="applicationTable">
                <table id="patTable" class= "text-light">
                    <thead>
                        <tr>
                            <th> Application ID </th>
                            <th> Application Date </th>
                            <th> Status </th>
                            <th> Review Date </th>
                            <th> Remarks </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION['testArray'] as $index => $arrayRow) {
                            echo '<tr>';
                            echo '<td>'. $arrayRow['testID'] .'</td>';
                            echo '<td>'. $arrayRow['testDate'] .'</td>';
                            if($arrayRow['result'] == null){
                                echo '<td>TBD</td>';
                                echo '<td>TBD</td>';
                            }else{
                                echo '<td>'. $arrayRow['result'] .'</td>';
                                echo '<td>'. $arrayRow['resultDate'] .'</td>';
                            }
                            echo '<td>'. $arrayRow['status'] .'</td>';
                            echo '</tr>';
                        }
                        ?>
                        <tr>
                        </tr>    
                    </tbody>
                </table>
            </div>
                    -->
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