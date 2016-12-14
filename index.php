<html>
    <head>
        <title>ABASports</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="abasports.css">
    </head>

    <body>
        <div class="img">

            <img src="pictures/abalogo.jpg" width="400" height="400">

        </div>

        

        
    </body>

</html>



<?php

//session_start();

if (isset($_SESSION['myusername'])) {
echo 'Welcome, ';
echo $_SESSION['myusername'];
}
else {
echo '<center>Welcome!';
}

echo '<p><a href="ABALogin.php">Log In</a> | <a href="logout.php" class="">Logout</a></p></center>';

?>



