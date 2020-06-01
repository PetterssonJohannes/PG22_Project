<!DOCTYPE html>
<html lang="sv"> 
<head>
<title> Forum </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
</head>
<?php 
session_start();
if(isset($_SESSION['AdminStatus']))
{
    
}
else
{
header("Location: index.php");
}
    include_once "_views/_rubrik.php";
    include_once "_views/_LoggaUt.php"
?>

<body>
    <br><br><br><br><br><br>
<div class="infobox">
<?php
echo "Välkommen </br>";
        echo $_SESSION['UserName'];
?>
</div>
<div class="TwoBtns">
    <div name="redforum_knapp" id="FirOfTwoBtns">
        <button onclick="window.location.href='AdminForum.php'" class="WideBtns" name="redforumBtn">Ta bort inlägg</button>
    </div>

    <div name="redkonto_knapp" id="SecOfTwoBtns">
        <button onclick="window.location.href='AdminUser.php'" class="WideBtns" name="redkotoBtn">Ta bort användarkonton</button>
    </div>
</div>
</body>
</html>
