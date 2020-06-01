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
session_start();
if(isset($_SESSION['AdminStatus']))
{
    echo "Välkommen </br>";
        echo $_SESSION['UserName'];
}
else
{
header("Location: index.php");
}
?>
<div class = "Publicera">
<form id="delete" name="delete" method="POST">
    
            <h2>Skriv in användar-id för att radera användare?</h2>
<p>
            <input type="number" id="number" name="number"></input>
            <a class = "submit" name = "submit" href="javascript:void(0)">Radera konto</a>
</p>
</form>
</div>
<div class = "Publicera">
<form id="sea" name="sea" method="POST">
<h3>Sök efter specifikt inlägg</h3>
<input type="text" name = "search_input" id ="search_input">
<a class = "search" name = "search" href="javascript:void(0)">Sök bland användare</a>
</form>
<br>
</div>


<form id="pri" name="pri" method="POST">
<h3>Se alla inlägg</h3>
<a class = "prin" name = "prin" href="javascript:void(0)">visa användare</a>
</form>


<div class = "Publicera">
<div class="post_listing"></div>
</div>

<script type="text/javascript">
$(document).ready(function(){


$(".submit").click(function(){ // Klick för att spara och visa forum


  //stop submit event 
$deletevar = $('#number').val(); //Sparar

      deleteUser($deletevar);
    listUser();
    eraseText();

});
  $(".search").click(function(){ //Klick för att söka och vida sökresultat

  //stop submit event 
$searchvar = $('#search_input').val(); 

    listSearch($searchvar);

});
$(".prin").click(function(){ 
  listUser();
});
});
function deleteUser($deletevar)
{ 
    $.ajax({ 

type: 'POST',

url: 'Admin_process_user.php', 

data:{'number' :$deletevar}, 

success: function() { 

    }});
}
function listUser()
{ 


  $.ajax({

    url: 'User_list.php', //Skapa en till för post

    success: function(res){ 

      $('.post_listing').html(res);  
    }}); 
}
function listSearch($searchvar)
{


  $.ajax({

    type: 'POST',

    url: 'AdminSearch.php', 
    
    data:{'search' :$searchvar}, 

    success: function(res){ 

      $('.post_listing').html(res); 

    }}); 
}
function eraseText() {
    document.getElementById("textarea1").value = "";
}
</script>

