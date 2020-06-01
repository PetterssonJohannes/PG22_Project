<?php
session_start();
if(!isset($_SESSION['Company'])){
    header("Location: LogOut.php");
}
?>

<!DOCTYPE html>
<html>
<title>Company_page</title>
    <head>
        <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
            <meta charset="utf-8"/>   
        
        <link rel="stylesheet" type ="text/css" href ="css/style.css">
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    </head>  
<<<<<<< HEAD
        
=======

>>>>>>> a860abc36c89be76a16900d8d9a2ad4e72ea853d
    <body>
    <?php
        include_once "_views/_rubrik.php"; 
        include_once "_views/_LoggaUt.php";          
    ?>
    <br><br><br><br><br><br><br><br>


    <body>
        <!--Kartan-->
        <div id="mapid"></div>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>