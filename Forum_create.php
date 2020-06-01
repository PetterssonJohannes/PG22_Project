<?php 
    include "db.php"; //Ny post från Calle
    session_start();
    Go_post();
function Go_post() 
{
    if(!empty($_POST['message']))
    {
        $UserName =$_SESSION['UserName'];
        $Message = $_POST['message'];
        Save_post($UserName, $Message); 
    }
    else
    {
        echo "Skriv något du vill posta";   //? > <h2>Skriv något du vill posta</2>; <?php //VAr kommer detta ut?? alt echo. 
    }
    
}
function Go_print() //Ny post från Calle //VÄnta förmodligen ta bort
{
    include "db.php"; 
    Print_Comments();
}
?>