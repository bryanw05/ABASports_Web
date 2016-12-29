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
                <form class="form-signin" action="ABAHome.php" method="POST">
                    <label for="inputEmail" class="sr-only">Email Address:</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password:</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox">
                        <label><input type="checkbox" value="remember-me">Remember me</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                    </br>
                    <button class="btn btn-lg btn-primary btn-block" id="signButton" type="button">Sign Up</button>    
                </form> 
            </div> <!-- /container -->
        </div> <!-- /loaderDiv -->    
    </body>

</html>