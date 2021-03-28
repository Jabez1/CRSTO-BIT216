<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Update New Test Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="assignment.css" rel="stylesheet" type="text/css"/>
</head>


<body>
<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="testGenerate.php">Generate Report</a>
    <a href="CTRecordNewTest.php">Record New Tests</a>
    <a href="CTUpdateTestResult.php">Update Test Results</a>
    <a href="Logout.php">Log Out </a>
</nav>
<script type="text/javascript" src="tripTable.js"></script>


<main>
<div class="container p-2">
    <div class="d-flex flex-column align-items-center">
    <h1 class="p-3">Update Test Results</h1>
    <br>

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
                    session_start();
                    if(!isset($_SESSION['tripList'])){
                        header("Location:volGetTrip.php");
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
    selectTrip();
    </script>
    <br>
    <form class="d-flex flex-column" form action="volApplyTrip.php" method="post" >
        <div class="form-group">
            <label>Selected Trip ID: </label>
            <input type="text" name= "tripID" class="form-control" id="tripForm"></input>
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