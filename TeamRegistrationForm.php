<?php
        include('db.php');
        $conn = new db();
        
        if(isset($_POST['RegisterTeam'])){
            $roster = "";

            $dname = $_POST['division'];
            $team = $_POST['teamName'];
            
            if(strlen(isset($_POST['player1']))){
                $roster .= $_POST['player1'];
            }
            
            if(strlen(isset($_POST['player2']))){
                $roster .= ', ' . $_POST['player2'];
            }
            
            if(strlen(isset($_POST['player3']))){
                $roster .= ', ' . $_POST['player3'];
            }
            
            if(strlen(isset($_POST['player4']))){
                $roster .= ', ' . $_POST['player4'];
            }
            
            if(strlen(isset($_POST['player5']))){
                $roster .= ', ' . $_POST['player5'];
            }
                    
            if($conn->newRegistration($dname, $team, $roster)){
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
    </head>
    <body>
        <div class="container">
            <form class="form-signin" method="POST">
                <label for="division">Division:</label>
                    <input type="text" name="division" id="division" class="form-control">
                <label for="teamName">Team Name:</label>
                <input type="text" name="teamName" id="teamName" class="form-control">
                <label for="player#1">Player #1:</label>
                <input type="text" name="player1" id="player1" class="form-control">
                <label for="player#1">Player #2:</label>
                <input type="text" name="player2" id="player2" class="form-control">    
                <label for="player#1">Player #3:</label>
                <input type="text" name="player3" id="player3" class="form-control">    
                <label for="player#1">Player #4:</label>
                <input type="text" name="player4" id="player4" class="form-control">
                <label for="player#1">Player #5:</label>
                <input type="text" name="player5" id="player5" class="form-control">
                <br />
                <button class="btn btn-block btn-primary" type="submit" name="RegisterTeam">Register Team</button>
            </form>
        </div>
    </body>
</html>
