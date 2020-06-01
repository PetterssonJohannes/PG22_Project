<!DOCTYPE html>
<html>
<title>Systemvetarkarriär_inloggad</title>
<head>
    <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8"/>   
    <link rel="stylesheet" type ="text/css" href ="css/style.css">
</head>
    <body>
    <?php
        include_once "_views/_rubrik.php";
        if(!isset($_SESSION['UserName']))
        {
            include_once "_views/_LoggaUt.php";
        }
        else
        {
            include_once "_views/_LogRegBtn.php";
        }
    ?>     
    <br><br><br><br><br><br>         
    <div>
            <h2 class="subheader">
                <br>
                Nedan står samtliga karriärsvägar</h2>
    </div>
<br><br><br><br>
    <div class="karriarer row">
        <div class="column">
        IT-säkerhet
        <a href="CarrCat/IT-sak.php">
        <div class="karriarer_img" id="IT-sak">
        <p> </p>
        </div>
        </a>
        </div>
        <div class="column">
        Projektutveckling
        <a href="CarrCat/Projektutveckling.php">
        <div class="karriarer_img" id="Projektutveckling">
            <p> </p>
        </div>
        </a>
        </div>
        <div class="column">
        Mjukvaruutveckling
        <a href="CarrCat/Mjukvaruutveckling.php">
        <div class="karriarer_img" id="Mjukvaruutveckling">
        <p> </p>
        </div>
        </a>
        </div>
        <div class="column">
        IT-testning
        <a href="CarrCat/IT-testning.php">
        <div class="karriarer_img" id="IT-testning">
        <p> </p>
        </div>
        </a>
        </div>
    </div>
    
    </body>

</html>