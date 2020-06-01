<!DOCTYPE html>
<html>
    <head>
        <title>Johannes forum</title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
        <div>

        <p>Click the button to get your coordinates.</p>

        <button onclick="getLocation()">Try It</button>

        <p id="demo"></p>
         

        <script>
            var x = document.getElementById("demo");

            function getLocation(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(showPosition);
                }
                else{
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position){
                x.innerHTML = "Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude;
            }
        </script>

            <!-- Sätta två sessionsvariabler till latitude och longitude
            alt slå ihop och använda en variabel

            använda på saveAdd.php

            spara till databasen-->
            


            <form action="saveAdd.php" method="POST">

                <textarea id="demo" name="message" placeholder="Beskrivning av jobbet"></textarea><br>

                <input type="text" id="latitude" name="latitude" placeholder="Latitude..."><br><br>

                <input type="text" id="longitude" name="longitude" placeholder="Longitude..."><br><br>
                
                <input type="submit" value="Skapa ">
            </form>

   </body>
</html>
