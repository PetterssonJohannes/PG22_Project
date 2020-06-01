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
session_start();
if(isset($_SESSION['UserName']))
{
}
else
{
header("Location: index.php");
}
include_once "_views/_rubrik.php";
include_once "_views/_LoggaUt.php";
?>
<br><br><br><br><br><br><br>
<div class = "Publicera infobox">
<form id="comment" name="comment" method="POST">
    Välkommen <?php echo $_SESSION['UserName'] ?>
            <h2>Skriv en kommentar?</h2>
<p>
            <textarea id="textarea1" name="textarea1"></textarea>
            <a class = "submit VanligBtns button" name = "submit" href="javascript:void(0)">Publicera</a>
</p>
</form>
</div>
<br>
<div class = "Publicera infobox">
<form id="sea" name="sea" method="POST">
<h3>Sök efter ett inlägg nedan</h3>
<input type="text" name = "search_input" id ="search_input">
<a class = "search VanligBtns button" name = "search" href="javascript:void(0)">Sök i forum</a>
</form>
<br>
</div>
<br>

<form id="pri" class="infobox" name="pri" method="POST">
<h3>Se tidigare publikationer</h3>
<a class = "prin VanligBtns button" name = "prin" href="javascript:void(0)">Visa kommentarer</a>
</form>
<br>

<div class = "Publicera">
<div class="post_listing ForumWindow"></div>
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

