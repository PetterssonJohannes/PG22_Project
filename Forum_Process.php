<?php
function Go_post() 
{
    include "db.php"; //Ny post från Calle
    if(!empty($_POST['message']))
    {
        $ComName =$_SESSION['user'];
        $Comments = $_POST['message'];
        Save_post($ComName, $Comments); 
    }
    else
    {
    ?> <h2>Skriv något du vill posta</2>; <?php
    }
    
}
function Go_print() //Ny post från Calle
{
    include "db.php"; 
    Print_Comments();
}
?>