<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Organize New Trip </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="assignment.css">
</head>

<body>
<header>
</header>
<nav class="navbar justify-content-end p-0">
    <a href="manageApp.php">Manage Application </a>
    <a href="Logout.php">Log Out </a>
    </nav>
<body>
    <main>
    <h1 class="text-center p-3"> Organize New Trip</h1>
    
    <div class="d-flex justify-content-center">
        <div class="d-flex justify-content-between bg-light p-5 flex-column align-content-sm-center flex-sm-row">
            <form  class="form-group col-10 col-md-3 col-lg-5" action="insertTrip.php" method="post">
                    
                        <label for="tripID"> Trip ID </label>
                        <input type="text" name="tripID" id="tripID" class="form-control">

						<label for="description"> Description </label>
                        <input type="text" name="description" id="description" class="form-control">

						<label for="tripDate"> Trip Date </label>
                        <input type="text" name="tripDate" id="tripDate" class="form-control">

						<label for="locatio"> Location </label>
                        <input type="text" name="location" id="location" class="form-control">

                        <label for="numVolunteers"> NumVolunteers </label>
                        <input type="text" name="numVolunteers" id="numVolunteers" class="form-control">

                        <label for="username"> userName </label>
                        <input type="text" name="username" id="username" class="form-control">

                        <br>
                        <input type="submit" value="Submit" class="btn col-8">
                        <input type="reset" value="Reset" class="btn col-3 bg-custom">
						</form>

    <div class="table-responsive p-0 bg-custom col-10 col-md-9 col-lg-6">
             <table class="table" id="CRSTOList">
                    <thead>
                        <tr>
                            <th> Trip ID </th>
                            <th> Description </th>
							<th> Trip Date </th>
							<th> Location </th>
                            <th> NumVolunteers </th>
                            <th> userName </th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
					<?php
					 session_start();
                        foreach ($_SESSION['tripArray'] as $index => $arrayRow) {
                            echo '<tr>';
                            echo '<td>'. $arrayRow['tripID'] .'</td>';
                            echo '<td>'. $arrayRow['description'] .'</td>';
                            echo '<td>'. $arrayRow['tripDate'] .'</td>';
                            echo '<td>'. $arrayRow['location'] .'</td>';
                            echo '<td>'. $arrayRow['numVolunteers'] .'</td>';
                            echo '<td>'. $arrayRow['username'] .'</td>';
                            echo '</tr>';
                     }
                        ?>
                    </tbody>
                    
                </table>
        </div>
    </div>  
</main>
<footer>
    <p>If there are any issues, contact us at: 012983312
    </p>
    Copyright &copy; 2020
    </footer>
</body>

    

</div>

</html>