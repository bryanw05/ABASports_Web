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
                <select name="division">
                    <option value=""></option>
                </select>
                <label for="teamName">Team Name:</label>
                <input type="text" name="teamName1" id="teamName1" class="form-control">
                <br />
                <label for="teamName">Team Name:</label>
                <input type="text" name="teamName2" id="teamName2" class="form-control">
                <button class="btn btn-block btn-primary" type="submit" name="addTeam">Add Team(s)</button>
            </form>
        </div>
    </body>
</html>
