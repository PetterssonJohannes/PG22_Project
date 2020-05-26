<?php
?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <script type="text/javascript" src="js/js.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <h1>
            <meta charset="utf-8"/>   
        </h1> 
    </head>

    <body>
        <div class="header">
            <div name="Rubrik" class="rubrik">
                <h1>Systemvetarkarriär</h1><br>
            </div>       
        </div>

<br><br><br>
        <div class="infobox">
            <form onsubmit="return ValidateRegistration()" action="RegistreringsProccess.php" name="registerForm" method="POST">
                <h2>Registrera dig</h2>
                <label for="username">Användarnamn</label><br>
                <input type="text" name="username" placeholder="Ditt namn..." required><br><br>
                <label for="password">Lösenord</label><br>
                <input type="text" name="password" placeholder="Ditt lösenord..." required><br><br>
                <label for="email">Email</label> <br>
                <input type="text" name="email" placeholder="Din email..." required><br><br>
                <label for="accept">Jag har läst och godkänner <a href="termsofservice.php" target="_blank">Systemkarriärs användarvillkor</a></label>
                <input type="checkbox" name="accept" required><br><br>
                <input type="submit" name="register" value="Registrera">
            </form>
         


        </div>
    </body>
</html>
