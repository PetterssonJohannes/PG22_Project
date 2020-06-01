<!DOCTYPE html>
<html lang = "sv">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src = "js/js.js"></script>    
        <link rel="stylesheet" type="text/css" href="css/style.css">    
    </head>

    
    <body>
    <?php
        include_once "_views/_rubrik.php";
        
    ?>
    <br><br><br><br><br>
    <div class="infobox">
    
        <form name = "loginForm" onsubmit = "return ValidateLogin()" action ="validateLogin.php" method = "POST">
        <h2> Logga in </h2>
        <label>Namn</label>
        <input type = "text" name = "username" placeholder="Ditt namn..." required>
        <br><br>
        Lösenord
        <input type = "password" name = "password" placeholder="Ditt lösenord..." required>
        <br><br>
        <input type = "submit" class="VanligBtns" name = "Login" value = "Login"/>
        </form>
        </div>
    </body>
    
</html>