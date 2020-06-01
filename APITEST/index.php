<!DOCTYPE html>
<html>
    <head>
        <title>Johannes forum</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>  

    <body>
        <!--Kartan-->
        <div id="mapid"></div>
        <script type="text/javascript" src="scripts.js"></script>
   
        <!--Position-->
    <p>Click the button to get your coordinates.</p>

    <button onclick="getLocation()">Try It</button>

    <p id="demo"></p>

    <script>
        var x = document.getElementById("demo");

        function getLocation() {
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
        }
        }

        function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;
        }
    </script>
   </body>
</html>