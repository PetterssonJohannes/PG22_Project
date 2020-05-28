<!DOCTYPE html>
<html>
<title>Systemvetarkarriär_inloggad</title>
    <head>
        <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8"/>   
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <?php
            include_once "_views/_rubrik.php";
            include_once "_views/_LogRegBtn.php";
        ?>
        <br><br><br>
        <div class="infobox">
            <h2>Välkommer till karriärkompassen</h2>
            <h2>*information om karriärkompassen*</h2>
        </div>
        <br>
        <div class="infobox">
            <form onsubmit="return Metod()" action="*resultat*" name="compassForm" method="POST">
                <h2>Frågor:</h2>

                <form name="q1">
                    <label>Hur viktigt är det med ... ?</label><br>
                    <input type="radio" name="radio" value="1"/>1
                    <input type="radio" name="radio" value="2"/>2
                    <input type="radio" name="radio" value="3"/>3
                    <input type="radio" name="radio" value="4"/>4
                    <input type="radio" name="radio" value="5"/>5
                </form>
                <br>
                <form name="q2">
                    <label>Hur viktigt är det med ... ?</label><br>
                    <input type="radio" name="radio" value="1"/>1
                    <input type="radio" name="radio" value="2"/>2
                    <input type="radio" name="radio" value="3"/>3
                    <input type="radio" name="radio" value="4"/>4
                    <input type="radio" name="radio" value="5"/>5
                </form>
                <br>
                <form name="q3">
                    <label>Tycker du om att ... ?</label><br>
                    <input type="radio" name="radio" value="1"/>1
                    <input type="radio" name="radio" value="2"/>2
                    <input type="radio" name="radio" value="3"/>3
                    <input type="radio" name="radio" value="4"/>4
                    <input type="radio" name="radio" value="5"/>5
                </form>
                <br>
                <form name="q4">
                    <label>Tycker du om att ...?</label><br>
                    <input type="radio" name="radio" value="1"/>1
                    <input type="radio" name="radio" value="2"/>2
                    <input type="radio" name="radio" value="3"/>3
                    <input type="radio" name="radio" value="4"/>4
                    <input type="radio" name="radio" value="5"/>5
                </form>
                <br>
                <form name="q5">
                    <label>Vill du tjäna mycket pengar?</label><br>
                    <input type="radio" name="radio" value="1"/>1
                    <input type="radio" name="radio" value="2"/>2
                    <input type="radio" name="radio" value="3"/>3
                    <input type="radio" name="radio" value="4"/>4
                    <input type="radio" name="radio" value="5"/>5
                </form>
                <br>
                <input type="submit" class="VanligBtns" name="question" value="Skicka in">
            </form>
        </div>
    </body>
</html>