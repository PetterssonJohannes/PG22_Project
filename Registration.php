<!DOCTYPE html>
<html lang = "sv">
    <head>
        <script scr = "js/js.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    </head>

    <body>
        <div>
            <form name = "registerForm" onsubmit = "return *Valid()*" action = *.php* method = "POST">
            <h2>Registrera dig</h2>
            <label>Användarnamn</label><br>
            <input type = "text" name = "username" value = "Eller använda Value?"><br><br>
            <label>Lösenord</label><br>
            <input type = "text" name = "password"><br><br>
            <label>Email</label> <br>
            <input type = "text" name = "email"><br><br>
            <label>Jag har läst och godkänner <a href="termsofservice.php">Systemkarriärs användarvillkor</a>  </label>
            <input type = "checkbox" name = checkboxRules value = "Yes" ><br><br>
            <input type = "submit" name = "register" value = "Registrera">
        </div>
    </body>
</html>