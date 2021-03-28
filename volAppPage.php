<?php
include_once 'database.php';
session_start();
$sql = "SELECT * FROM test";

//fetches the test table data
$result = $connection->query($sql);

$_SESSION['testArray']= [];
while($test = $result->fetch_assoc()) {
    $_SESSION['testArray'][] = $test;
}
header("Location:CTGenerate.php");
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Generate Test Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
    <script>
        function goBack() {
          window.history.back();
    }
    </script>
</head>

<body onload="generateReport()">

<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 

    <a href="testGenerate.php">Generate Report</a>
    <a onclick="goBack()">Previous Page </a>
    <a href="Logout.php">Log Out </a>
    
</nav>

<main>
    <div class="container d-flex flex-column justify-content-center align-items-center p-4">
    <h1>Test Report</h1>
    <div id="container" class="d-flex flex-column bg-light p-5 col-10">
            <div class="table-responsive p-0 bg-custom">
                <table class="table" id="testList">
                        <thead>
                            <tr>
                                <th>Test ID</th>
                                <th>Test Date</th>
                                <th>Result </th>
                                <th>Result Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-light">
                            <?php
                            session_start();
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