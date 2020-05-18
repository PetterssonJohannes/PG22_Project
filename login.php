<!DOCTYPE html>
<html lang = "sv">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src = "js/js.js"></script>    
        <link rel="stylesheet" type="text/css" href="css/style.css">    
    </head>
    
    <body>
    <div class="header">
            <div name="Rubrik" class="rubrik">
                <h1>Systemvetarkarriär</h1>
            </div>       
    
            
        
            
        </div>
        <div id="space">
            
        </div>
        <br>
    <div class="infobox">
    <br>
        <form name = "loginForm" onsubmit = "return ValidateLogin()" action ="validateLogin.php" method = "POST">
        <label>Namn</label>
        <input type = "text" name = "username" placeholder="Ditt namn..." required>
        <br><br>
        Lösenord
        <input type = "text" name = "password" placeholder="Ditt lösenord..." required>
        <br><br>
        <input type = "submit" name = "Login" value = "Login"/>
        </form>
        </div>
    </body>
    
</html>
<?php 
//include "db.php";
/*ValidateLogin($_POST["username"],$_POST["password"]); */
/* fixa metod som kollar i databasen om det är tomt eller inte*/
?>