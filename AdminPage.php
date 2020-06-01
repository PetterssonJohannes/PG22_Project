<?php
        include_once "_views/_rubrik.php";
        
?>
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
    echo "Välkommen </br>";
        echo $_SESSION['UserName'];
}
else
{
header("Location: index.php");
}
?>
<body>
<h1> Du har mycket makt, för du är admin - Limpan <h1>

<div id="redforum_knapp">
            <button onclick="window.location.href='AdminForum.php'" name="redforumBtn">ta bort inlägg</button>
        </div>

        <div id="redkonto_knapp">
            <button onclick="window.location.href='AdminUser.php'" name="redkotoBtn">ta bort användarkonton</button>
        </div>

</body>
</html>
