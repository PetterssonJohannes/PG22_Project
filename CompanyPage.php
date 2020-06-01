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
        
    </head>
    <body>
    <?php
        include_once "_views/_rubrik.php"; 
        include_once "_views/_LoggaUt.php";          
    ?>
    <br><br><br><br><br><br><br><br>
    
    