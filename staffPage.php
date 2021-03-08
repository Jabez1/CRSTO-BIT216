
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Record New Staff </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="assignment.css">
</head>

<body>
<header>
</header>
<nav class="navbar justify-content-end p-0">
    <a> 
        <?php
        session_start();
        echo"Welcome {$_SESSION['username']}";
        ?>       
    </a>
    <a href="Logout.php">Log Out </a>
    </nav>
<body>
    <main>
    <h1 class="text-center p-3"> Record New Staff</h1>
    
    <div class="d-flex justify-content-center">
        <div class="d-flex justify-content-between bg-light p-5 flex-column align-content-sm-center flex-sm-row">
            <form  class="form-group col-10 col-md-3 col-lg-5" action="insertStaff.php" method="post">
                    
                        <label for="username"> UserName </label>
                        <input type="text" name="username" id="username" class="form-control">

						<label for="userpass"> Password </label>
                        <input type="text" name="userpass" id="userpass" class="form-control">

						<label for="fullName"> FullName </label>
                        <input type="text" name="fullName" id="fullName" class="form-control">

						<label for="phone"> Phone </label>
                        <input type="text" name="phone" id="phone" class="form-control">

                        <label for="workerType"> WorkerType </label>
                        <input type="text" name="workerType" id="workerType" class="form-control">

                        <label for="position"> Position </label>
                        <input type="text" name="position" id="position" class="form-control">
                        
                        <label for="dateJoined"> Datejoined </label>
                        <input type="text" name="dateJoined" id="dateJoined" class="form-control">

                        <br>
                        <input type="submit" value="Submit" class="btn col-8">
                        <input type="reset" value="Reset" class="btn col-3 bg-custom">
						</form>

    <div class="table-responsive p-0 bg-custom col-10 col-md-9 col-lg-6">
             <table class="table" id="CRSTOList">
                    <thead>
                        <tr>
                            <th> UserName </th>
                            <th> Password </th>
							<th> FullName </th>
							<th> Phone </th>
                            <th> WorkerType </th>
                            <th> Position </th>
                            <th> Date Joined </th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
					<?php
					 session_start();
                        foreach ($_SESSION['workerArray'] as $index => $arrayRow) {
                            echo '<tr>';
                            echo '<td>'. $arrayRow['username'] .'</td>';
                            echo '<td>'. $arrayRow['userpass'] .'</td>';
                            echo '<td>'. $arrayRow['fullName'] .'</td>';
                            echo '<td>'. $arrayRow['phone'] .'</td>';
                            echo '<td>'. $arrayRow['workerType'] .'</td>';
                            echo '<td>'. $arrayRow['position'] .'</td>';
                            echo '<td>'. $arrayRow['dateJoined'] .'</td>';
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
      