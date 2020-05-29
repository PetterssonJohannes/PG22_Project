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
        include_once "_views/_LoggaUt.php";          
    ?>
    <br><br><br><br><br><br><br><br>
    
    
    <div class="infobox ValkommenMed">  
    <br> 
        <p>Välkommen "användare"</p>
        
        <div id="kategori_knapp">
            <button onclick="window.location.href='Careers.php'" name="CareersBtn">Se samtliga karriärsvägar</button>
        </div>

        <div id="karriar_knapp">
            <button onclick="window.location.href='Compass.php'" name="CompassBtn">Karriärkompassen</button>
        </div>
    </div>

 
    </body>

</html>
