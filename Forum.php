<?php
session_start();
if(!isset($_SESSION['UserID'])){
    header("Location: LogOut.php");
}
?>
<?php
        include_once "_views/_rubrik.php";
        
?>
<!DOCTYPE html>
<html lang="sv"> 
<head>
<title> Forum </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
</head>
<?php 
<<<<<<< HEAD

?> 

<br>
<form id="comment" class="infobox" name="comment" method="POST">
=======
session_start();
if(isset($_SESSION['user']))
{
    echo "Välkommen </br>";
        echo $_SESSION['user'];
}
else
{
header("Location: index.php");
}
?>
<div class = "Publicera">
<form id="comment" name="comment" method="POST">
>>>>>>> 0178137bf9bc5c505b0e841a8ad6b58255a833c5
    
            <h2>Skriv en kommentar?</h2>
<p>
            <textarea id="textarea1" name="textarea1"></textarea>
            <a class = "submit" name = "submit" href="javacscript:void(0)">publicera</a>
</p>
</form>
</div>
<div class = "Publicera">
<form id="sea" name="sea" method="POST">
<h3>Sök efter ett inlägg nedan</h3>
<input type="text" name = "search_input" id ="search_input">
<a class = "search" name = "search" href="javacscript:void(0)">Sök i forum</a>
</form>
<br>
</div>


<form id="pri" name="pri" method="POST">
<h3>Se tidigare publikationer</h3>
<a class = "prin" name = "prin" href="javacscript:void(0)">visa kommentarer</a>
</form>


<div class = "Publicera">
<div class="post_listing"></div>
</div>

<script type="text/javascript">
$(document).ready(function(){


$(".submit").click(function(){ // Klick för att spara och visa forum


  //stop submit event 
$textvar = $('#textarea1').val(); //Sparar

      saveComments($textvar);
    listComments();
    eraseText();

});
  $(".search").click(function(){ //Klick för att söka och vida sökresultat

  //stop submit event 
$searchvar = $('#search_input').val(); 

    listSearch($searchvar);

});
$(".prin").click(function(){ 
  listComments();
});
});
function saveComments($textvar)
{ 
    $.ajax({

type: 'POST',

url: 'Forum_create.php', 

data:{'message' :$textvar}, 

success: function() { 

    }});
}
function listComments()
{ 


  $.ajax({

    url: 'Forum_list.php', //Skapa en till för post

    success: function(res){ 

      $('.post_listing').html(res);  
    }}); 
}
function listSearch($searchvar)
{


  $.ajax({

    type: 'POST',

    url: 'Forum_search.php', 
    
    data:{'search' :$searchvar}, 

    success: function(res){ 

      $('.post_listing').html(res); 

    }}); 
}
function eraseText() {
    document.getElementById("textarea1").value = "";
}
</script>

