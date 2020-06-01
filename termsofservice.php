<!DOCTYPE html>
<html lang = "sv">
    <head>
        <script scr = "js/js.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
      
            <meta charset="utf-8"/>   
        
    </head>

    <body>
    <?php
        include_once "_views/_Rubrik.php"; 
        if(isset($_SESSION['UserName']))
        {
            include_once "_views/_LoggaUt.php";
        }
        else
        {
            include_once "_views/_LogRegBtn.php";
        }          
    ?>
<br><br><br>
        <div class="infobox">
            <div>
                <h2>Här ska vi ha våra regler</h2>
                HUR kommer vi använda er sparade data?
                Vi kommer endast att spara hashad password, användarnamn och email. Email-adressen kommer endast användas om vi behöver kontakta en viss användare av någon av följande anledningar:
                1.Användaren har blivit avstängd på grund av att den brutit mot forumreglerna.
                2. Användaren har svurit på forumet.

                Vi kommer inte att använda kontaktuppgifterna till marknadsföring.
                
                Om användaren vill att vi ska ta bort någon av dess uppgifter kan de kontakta oss via carl.lundin@systembolaget.se

                Forumregler:
                Man får inte skriva svordomar eller taskmörtiga kommentarer till andra användare.
                Om en användare bryter mot formreglerna kommer en admin att ta bort kommentarerna och användaren kan bli avstängd.




                
        </div>
    </body>
</html>