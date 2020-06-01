<?php 
    include "db.php"; 
    session_start();
    Go_post();
function Go_post() 
{
    if(!empty($_POST['number']))
    {
        $delete = $_POST['number'];
        Delete_post($delete); 
    }
    else
    {
        echo "Skriv id för inlägget du vill radera";   
    }
    
}
?>