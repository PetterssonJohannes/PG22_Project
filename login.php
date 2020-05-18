<!DOCTYPE html>
<html lang = "sv">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src = "js/js.js"></script>        
    </head>
   
    <body>
        <form name = "loginForm" onsubmit = "return ValidateLogin()" action ="validateLogin.php" method = "POST">
        <input type = "text" name = "username">
        <br><br>
        <input type = "text" name = "password">
        <br><br>
        <input type = "submit" name = "Login" value = "Login"/>
        </form>
    </body>
    
</html>
<?php 
//include "db.php";
/*ValidateLogin($_POST["username"],$_POST["password"]); */
/* fixa metod som kollar i databasen om det är tomt eller inte*/
?>