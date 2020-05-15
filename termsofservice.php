<?php
?>
<!DOCTYPE html>
<html lang = "sv">
    <head>
        <script scr = "js/js.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <h1>
            <meta charset="utf-8"/>   
        </h1> 
    </head>

    <body>
        <div class="header">
            <div name="Rubrik" class="rubrik">
                <h1>Systemvetarkarriär</h1><br>
            </div>   
        <div>

        <div>
            <h2>Här ska vi ha våra regler</h2>
            <p>§1. You do not talk about Systemkarriär.<p>
            <p>§2. You DO NOT talk about Systemkarriär.<p>
        </div>

        <div>
            <p>Regler inlästa från fil:<p>
        </div>
        <div>
            <?php
                echo file_get_contents( "TEST TEST TEST.txt" );
            ?>
        </div>

    </body>
</html>