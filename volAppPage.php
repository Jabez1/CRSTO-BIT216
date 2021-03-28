<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>View Application Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="volTripPage.php">Apply For a Trip</a> 
    <a href="Logout.php">Log Out </a> 
    
</nav>

<main>
    <div class="container d-flex flex-column justify-content-center align-items-center p-4">
    <h1>Application List</h1>
    <div id="container" class="d-flex flex-column bg-light p-5 col-10">
            <div class="table-responsive p-0 bg-custom">
                <table class="table" id="testList">
                        <thead>
                            <tr>
                                <th>Trip ID</th>
                                <th>Trip Date</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody class="text-light">
                            <?php
                            session_start();
                            if(!isset($_SESSION['appArray'])){
                                header("Location:volAppTable.php");
                            }
                            foreach ($_SESSION['appArray'] as $index => $arrayRow) {
                                echo '<tr>';
                                echo '<td>'. $arrayRow['tripID'] .'</td>';
                                echo '<td>'. $arrayRow['tripDate'] .'</td>';
                                echo '<td>'. $arrayRow['description'] .'</td>';
                                echo '<td>'. $arrayRow['status'] .'</td>';
                                echo '<td>'. $arrayRow['remarks'] .'</td>';
                                echo '</tr>';
                            }
                            unset($_SESSION['appArray']);
                            ?>
                        </tbody>
                </table>
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