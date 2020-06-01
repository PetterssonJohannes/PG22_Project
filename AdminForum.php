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
if(isset($_SESSION['AdminStatus']))
{
}
else
{
header("Location: index.php");
}
  include_once "_views/_rubrik.php";
  include_once "_views/_LoggaUt.php";
?>
<br><br><br><br><br><br>
<div class="Fullbox2">
  <br>
  <h2>Välkommen <?php echo $_SESSION['UserName'] ?> </h2>
  
  <div class = "Publicera Katinfobox">
    <form id="delete" name="delete" method="POST">
      <h2>Skriv in forum-id för att radera inlägg?</h2>
      <input type="number" id="number" name="number"></input>
        <a class = "submit VanligBtns button" name = "submit" href="javascript:void(0)">Radera inlägg</a>
    </form>
  </div>
  <div class = "Publicera annonsbox">
    <form id="sea" name="sea" method="POST">
      <h2>Sök efter specifikt inlägg</h2>
      <input type="text" name = "search_input" id ="search_input">
      <a class = "search VanligBtns button" name = "search" href="javascript:void(0)">Sök i forum</a>
    </form>
    <br>
  </div>
</div>
<br>
<div class="ForumWindow">
  <form id="pri" class="infobox" name="pri" method="POST">
    <h2>Se alla inlägg</h2>
    <a class = "prin VanligBtns button" name = "prin" href="javascript:void(0)">Visa kommentarer</a>
  </form>
  <div class="post_listing"></div>

</div>

<script type="text/javascript">
$(document).ready(function(){


$(".submit").click(function(){ // Klick för att spara och visa forum


  //stop submit event 
$deletevar = $('#number').val(); //Sparar

      deleteComments($deletevar);
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
function deleteComments($deletevar)
{ 
    $.ajax({ 

type: 'POST',

url: 'Admin_process.php', 

data:{'number' :$deletevar}, 

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

