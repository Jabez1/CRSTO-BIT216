<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage Application </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="assignment.css">
</head>
<body>
<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="newTrip.php">Organize Trip</a>
    <a href="Logout.php">Log Out </a>
</nav>
<script type="text/javascript" src="appTable.js"></script>


<main>
<div class="container p-2">
    <div class="d-flex flex-column align-items-center">
    <h1 class="p-3">Manage Application</h1>
    <br>

    <div class="d-flex flex-column bg-light p-5 col-10">
        <div class="table-responsive p-0 bg-custom">
        <table class="table" id="appTable">
                <thead>
                    <tr>
                        <th>Trip ID</th>
                        <th>Application ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                <?php
                    session_start();
                    if(!isset($_SESSION['appList'])){
                        header("Location:manageAppCheck.php");
                    }
                    foreach ($_SESSION['appList'] as $index => $arrayRow) {
                        echo '<tr>';
                        echo '<td>'. $arrayRow['tripID'] .'</td>';
                        echo '<td>'. $arrayRow['applicationID'] .'</td>';
                        echo '<td>'. $arrayRow['status'] .'</td>';
                        echo '</tr>';
                    }
                    unset($_SESSION['appList']);
                ?>

                </tbody>
        </table>
        
    </div>
    <script>
    selectApp();
    </script>
    <br>
    <form class="d-flex flex-column" form action="updateApp.php" method="post" >
        <div class="d-flex justify-content-center align-items-center">
        <input type="radio" id="ACCEPTED" name ="status" value="ACCEPTED">
        <label for="ACCEPTED" class="align-self-center">ACCEPTED</label>
        </div>
        <br>
        <div class="d-flex justify-content-center align-items-center">
        <input type="radio" id="REJECTED"  name ="status" value="REJECTED">
        <label for="REJECTED" class="align-self-center">REJECTED</label>
        </div>
        <div>
            <label for="remarks"> Remarks </label>
            <input type="text" name="remarks" id="remarks" class="form-control">
            <label for="appid"> Appid </label>
            <input type="text" name="appid" id="appForm" class="form-control">
        </div>
        <input type="submit" class="btn w-50 align-self-center" value="SAVE">
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
