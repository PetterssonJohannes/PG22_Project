const mymap = L.map('mapid').setView([59.859735, 17.620386], 13);

const attribution = '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors';

const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

const tiles = L.tileLayer(tileUrl, {attribution});

tiles.addTo(mymap);

/*
var id = 7;  

$(function(){        //Sätta till on(click, ) ???
    setInterval(function(){
        $.ajax({
            url:"GetMarker.php",
            type:"POST",
            data:{'id':id},
            success:function($res){
                var input = $res;
                var input_split = input.split(",");
                var latitude = input_split[0];
                var longitude = input_split[1];
                var marker = L.marker([latitude, longitude]).addTo(mymap);
            }
        })
},1000)
})
*/

$(function() {
    $('#companysearch').on('click', function() {
        var companyname = document.getElementById("companyname").value;
        $.ajax({
            url: 'GetMarker.php',
            type: "POST",
            data: {'id':companyname},
            success:function($res){
                var input = $res;
                var input_split = input.split(",");
                var latitude = input_split[0];
                var longitude = input_split[1];
                var marker = L.marker([latitude, longitude]).addTo(mymap);
            }
        })
    })
})
