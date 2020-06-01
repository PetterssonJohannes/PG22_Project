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
                <div>
                    <?php
                        echo file_get_contents( "TEST TEST TEST.txt" );
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>