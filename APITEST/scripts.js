const mymap = L.map('mapid').setView([59.859735, 17.620386], 13);      //Startkartan

const attribution = '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors';

const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

const tiles = L.tileLayer(tileUrl, {attribution});

tiles.addTo(mymap);

var marker = L.marker([59.85, 17.62]).addTo(mymap).bindPopup("Här ligger företag: ");

mymap.on("click", function(e){
    $lat = e.latlng.lat;
    $lng = e.latlng.lng;
    $.ajax({
      type: "POST",
      url: "saveAdd.php",
      data:{'lat':$lat, 'lng':$lng},
      success: function() {
        var mp = new L.Marker([e.latlng.lat, e.latlng.lng]).addTo(mymap);
      }
    })
});
