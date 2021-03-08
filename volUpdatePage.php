<!DOCTYPE html>
<?php 
include_once 'database.php';
session_start();

$sql = "SELECT * FROM Document Where username = '{$_SESSION['username']}'"

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
<h1>Update Profile Details</h1>
    <div id="container" class="container bg-light">
        <div class="d-flex justify-content-md-between p-4 col-12 col-sm-10">
            <div class="d-flex justify-content align-items-center p-4 col-12 col-sm-12 col-md-7">
                
                <form  class="form-group col-12 col-md-6 col-lg-12" action="volUpdate.php" method="post">
                   <label for="username"> Username </label>
                   <input type="text" name="username" id="username" class="form-control" value="<?php echo $_SESSION['profile']['username']; ?>">

                   <label for="userpass"> Password </label>
                   <input type="text" name="userpass" id="userpass" class="form-control">

                   <label for="fullname"> Full Name </label>
                   <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $_SESSION['profile']['fullName']; ?>">

                   <label for="phone"> Phone Number </label>
                   <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $_SESSION['profile']['phone']; ?>">

                   <br>
                   <input type="submit" value="Submit" class="btn col-12">
                   </form>
                   <div class="table-responsive p-0 bg-custom col-12 ">
             <table class="table" id="CRSTOList">
                    <thead>
                        <tr>
                            <th> Document ID </th>
                            <th> Document Type </th>
							<th> Expiry Date </th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
					<?php
                     if(isset($_SESSION['docArray'])){
                        foreach ($_SESSION['docArray'] as $index => $arrayRow) {
                            echo '<tr>';
                            echo '<td>'. $arrayRow['documentID'] .'</td>';
                            echo '<td>'. $arrayRow['documentType'] .'</td>';
                            echo '<td>'. $arrayRow['expiryDate'] .'</td>';
                            echo '</tr>';
                     }
                     }
                        ?>
                    </tbody>
                    
                </table>
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