<?php
        include_once "_views/_rubrik.php";
        
?>
<meta charset="utf-8"/>   
        <link rel="stylesheet" type ="text/css" href ="css/style.css">
<?php 
session_start();
/*//if(isset($_SESSION['user']))
{
    echo "Välkommen </br>";
        echo $_SESSION['user'];
}
else
{
header("Location: index.php");
}*/
?> 

<br>
<form id="comment" class="infobox" name="comment" method="POST">
    
            <h2>Skriv en kommentar?</h2>

            <textarea class="textarea1" name="textarea1"></textarea>
            <br>
            <input type="submit" class="VanligBtns" name="submit" value ="Submit">
            <div id="result"></div>

</form>
</body>
</html>
<?php
include "Forum_Process.php";
Go_Post();
?>