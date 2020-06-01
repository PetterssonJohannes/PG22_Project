const mymap = L.map('mapid').setView([59.859735, 17.620386], 13);      //Startkartan

const attribution = '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors';

const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

const tiles = L.tileLayer(tileUrl, {attribution});

tiles.addTo(mymap);

var id = 68;    //Vilket id man vill ha platsen för.

$(function(){
    setInterval(function(){
        $.ajax({
            url:"getadd.php",
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