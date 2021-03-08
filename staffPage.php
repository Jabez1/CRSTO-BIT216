
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add New Officer </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="assignment.css">
</head>

<body>
<header>
<img src="Images/logo.png" alt="logo" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="testGenerate.php">Generate Report</a>
    <a href="insertOfficer.php">Manage Officers</a>
    <a href="insertStock.php">Manage Test Kits</a>
    <a href="insertRegister.php">Register Center</a>
    <a href="Logout.php">Log Out </a>
    </nav>
<body onload="fillOfficerTable()">
    <main>
    <h1 class="text-center p-3"> Record New Test Officer</h1>
    
    <div class="d-flex justify-content-center">
        <div class="d-flex justify-content-between bg-light p-5 flex-column align-content-sm-center flex-sm-row">
            <form  class="form-group col-10 col-md-3 col-lg-5" action="insertOfficer.php" method="post">
                   
                        <label for="ctrId"> Worker ID </label>
                        <input type="text" name="ctrId" id="ctrId" class="form-control" >
                    
                        <label for="usern"> UserName </label>
                        <input type="text" name="usern" id="usern" class="form-control">

						<label for="Psw"> Password </label>
                        <input type="text" name="Psw" id="Psw" class="form-control">

						<label for="Ofn"> Officer Name </label>
                        <input type="text" name="Ofn" id="Ofn" class="form-control">

						<label for="Pos"> Position </label>
                        <input type="text" name="Pos" id="Pos" class="form-control">
                        <br>
                        <input type="submit" value="Submit" class="btn col-8">
                        <input type="reset" value="Reset" class="btn col-3 bg-custom">
						</form>

    <div class="table-responsive p-0 bg-custom col-10 col-md-9 col-lg-6">
             <table class="table" id="CTISList">
                    <thead>
                        <tr>
                            <th> Worker ID </th>
                            <th> UserName </th>
							<th>Officer Name</th>
							<th> Position </th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
					<?php
					 session_start();
                        foreach ($_SESSION['officerArray'] as $index => $arrayRow) {
                            echo '<tr>';
							echo '<td>'. $arrayRow['workerID'] .'</td>';
                            echo '<td>'. $arrayRow['userName'] .'</td>';
                            echo '<td>'. $arrayRow['fullName'] .'</td>';
                            echo '<td>'. $arrayRow['position'] .'</td>';
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
      