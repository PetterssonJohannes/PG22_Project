<?php 
?>
<!DOCTYPE html>
<html>
<title>Systemvetarkarriär</title>
    <head>
        <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8"/>   
        <link rel="stylesheet" type ="text/css" href ="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
        include_once "_views/_rubrik.php";
        include_once "_views/_LogRegBtn.php";
        echo password_hash('Johannes', PASSWORD_BCRYPT);
    ?>
    <div class="TwoBtns">
        <div>
            <form id="FirOfTwoBtns" action="Careers.php">
            <input class="WideBtns" type="submit" value="Se samtliga karriärsvägar"></form>
        </div> 
        <div>
            <form id="SecOfTwoBtns" action="Compass.php">
            <input class="WideBtns" type="submit" value="Karriärskompassen"></form>
        </div>    
    </div>
    
    </body>
</html>
