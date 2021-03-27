<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage Application </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="assignment.css">
</head>
<header>
</header>
<nav class="navbar justify-content-end p-0">
    <a href="newTrip.php">Organize Trip </a>
    <a href="Logout.php">Log Out </a>
    </nav>
    <body>
    <main>
    <h1 class="text-center p-3"> Manage Application</h1>

    

    <div>
             <table class="table" id="CRSTOList">
                    <thead>
                        <tr>
                            <th> Trip ID </th>
                            <th> Application ID </th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
                    <?php
					 session_start();
                        foreach ($_SESSION['applicationArray'] as $index => $arrayRow) {
                            echo '<tr>';
                            echo '<td>'. $arrayRow['tripID'] .'</td>';
                            echo '<td>'. $arrayRow['applicationID'] .'</td>';
                            echo '</tr>';
                     }
                        if(!isset($_SESSION['applicationArray'])){
                            header("Location:manageAppCheck.php");
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
