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
<div class="Fullbox">
  <br>
<h2>Välkommen <?php echo $_SESSION['UserName'] ?> </h2>

  <div class = "Publicera Katinfobox">
    
    <form id="comment" name="comment" method="POST">
    
            <h2>Skriv en kommentar?</h2>
      
            <textarea id="textarea1" class="textarea1" name="textarea1"></textarea>
            <a class = "submit VanligBtns button" name = "submit" href="javascript:void(0)">Publicera</a>    
    </form>
  </div>
  <br>
  <div class = "Publicera annonsbox">
    <form id="sea" name="sea" method="POST">
      <h2>Sök efter ett inlägg nedan</h2>
      <input type="text" name = "search_input" id ="search_input">
      <a class = "search VanligBtns button" name = "search" href="javascript:void(0)">Sök i forum</a>
    </form>
    <br>
  </div>
</div>
<br><br>
<div class = "Publicera ForumWindow">
<form id="pri" class="infobox" name="pri" method="POST">
<h3>Se tidigare publikationer</h3>
<a class = "prin VanligBtns button" name = "prin" href="javascript:void(0)">Visa kommentarer</a>
</form>
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

