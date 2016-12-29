<?php
    include('db.php');
    $conn = new db();
     
    if($conn){
        echo 'Connected!';
    }

    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $fname = $_POST['first'];
        $lname = $_POST['last'];
        $password = $_POST['password'];
        
       if($conn->insertUser($email, $password, $fname, $lname)){
           header('Location: ABAHome.php');
       }
       
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ABASports</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="abasports.css">
          
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="scripts/jquery.js"></script>
        <script src="scripts/getResultsScript.js"></script>
    </head>
    
    <body>
        <div id="loaderDiv">
            <div class="container">
                <form class="form-signin" method="POST">
                    <h2 align="center">Sign Up</h2>
                    <label for="inputEmail" class="sr-only">Email Address:</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <input type="text" name="first" id="firstName" class="form-control" placeholder="First Name" required autofocus>
                    <input type="text" name="last" id="lastName" class="form-control" placeholder="Last Name" required autofocus>
                    <label for="inputPassword" class="sr-only">Password: </label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    </br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
                    </br>
                    <button class="btn btn-lg btn-primary btn-block" id="logButton" type="button">Log In</button>
                </form> 
            </div> <!-- /container -->
        </div> <!-- /loaderDiv -->    
    </body>

</html>