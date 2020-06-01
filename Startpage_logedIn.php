<?php
session_start();
if(isset($_SESSION['UserID'])){
}
else
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<title>Systemvetarkarriär_inloggad</title>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        
            <meta charset="utf-8"/>   
        
        <link rel="stylesheet" type ="text/css" href ="css/style.css">
        
    </head>
    <body>
    <?php
        include_once "_views/_Rubrik.php"; 
        include_once "_views/_LoggaUt.php";          
    ?>
    <br><br><br><br><br><br><br><br>
    
    
    <div class="infobox2 ValkommenMed3">  
    <br> 
        <p>Välkommen <?php echo $_SESSION['UserName']; ?></p>
        
        <div id="kategori_knapp" class="VanligBtns">
            <button onclick="window.location.href='Careers.php'" name="CareersBtn">Se samtliga karriärsvägar</button>
        </div>

        <div id="karriar_knapp" class="VanligBtns">
            <button onclick="window.location.href='Compass.php'" name="CompassBtn">Karriärkompassen</button>
        </div>

        <div id="forum_knapp" class="VanligBtns">
            <button onclick="window.location.href='forum.php'" name="CompassBtn">Karriärsforum</button>
        </div>
    </div>
    <br>
        <?php
        if(isset($_SESSION['Company']))
        {
            include_once "_views/_CompanyBtn.php";
        }
        if(isset($_SESSION['AdminStatus']))
        {
            include_once "_views/_AdminBtn.php";
        }
        ?>
    
    <br>
        <div id="mapid"></div>
        <br>
        <form>
        <div class="ForumWindow">
        <h3>Hitta företag här, sök på företagsnamn</h3>
            <input type="text" id="companyname"></input>
            <a id="companysearch" class="VanligBtn button" name="companysearch" href="javascript:void(0)">Visa företag</a> 
        <br>
        </form>
        <script type="text/javascript" src="js/printscripts.js"></script>
        </div>
    <br>
    </body>

</html>
