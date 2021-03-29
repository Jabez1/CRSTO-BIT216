<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Apply for a Trip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="assignment.css" rel="stylesheet" type="text/css"/>
</head>
<?php
session_start();
if(isset($_SESSION['appError'])){
    if($_SESSION['appError']==1){
        echo '<script> alert("You have already applied for that trip"); </script>';
       
    }
    elseif($_SESSION['appError']==0){
        echo '<script> alert("Application submitted successfully!"); </script>';
    }
}

?>

<body>

<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="volPage.php">Profile Page</a> 
    <a href="volTripPage.php">Apply For a Trip</a> 
    <a href="volAppPage.php">View Applications</a>
    <a href="Logout.php">Log Out </a> 
</nav>
<script type="text/javascript" src="selectTable.js"></script>


<main>
<div class="container p-2">
    <div class="d-flex flex-column align-items-center">
    <h1 class="p-3">Apply for a Trip</h1>

    <div class="d-flex flex-column bg-light p-5 col-10">
        <div class="table-responsive p-0 bg-custom">
        <table class="table" id="tripList">
                <thead>
                    <tr>
                        <th>Trip ID</th>
                        <th>Trip Description</th>
                        <th>Trip Date</th>
                        <th>Location</th>
                        <th>Capacity</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                <?php

                    if(!isset($_SESSION['tripList'])){
                        header("Location:volTripTable.php");
                    }
                    else{
                        //the page wouldnt show the alert because it kept refreshing 
                        //and would reset the alert if put elsewhere
                        unset($_SESSION['appError']);
                    }
                    foreach ($_SESSION['tripList'] as $index => $arrayRow) {
                        echo '<tr>';
                        echo '<td>'. $arrayRow['tripID'] .'</td>';
                        echo '<td>'. $arrayRow['description'] .'</td>';
                        echo '<td>'. $arrayRow['tripDate'] .'</td>';
                        echo '<td>'. $arrayRow['location'] .'</td>';
                        echo '<td>'. $arrayRow['numVolunteers'] .'</td>';
                        echo '</tr>';
                    }
                    unset($_SESSION['tripList']);
                    
                ?>

                </tbody>
        </table>
        
    </div>
    <script>
    selectTable("tripList", "tripForm");
    </script>
    <br>
    <form class="d-flex flex-column" form action="volTripApply.php" method="post" >
        <div class="form-group">
            <label>Selected Trip ID: </label>
            <input type="text" name= "tripID" class="form-control" id="tripForm" required readonly></input>
        </div>  

        <br>
        <input type="submit" class="btn w-50 align-self-center" value="Apply">

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