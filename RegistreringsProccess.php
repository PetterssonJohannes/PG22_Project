<?php
include "db.php";
$UserName = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$trimUName = trim($_POST["username"]);
$trimpassw = trim($_POST["password"]);
$trimemail = trim($_POST["email"]);
$atpos = stripos($_POST["email"], "@");
$dotpos = strripos($_POST["email"], ".");
$lastindex = (strlen($_POST["email"])-1);
$passwCount = strlen($password);

if($trimUName == "" || $trimpassw == "" || $trimemail == "" || $atpos == -1 || $dotpos == -1 || $atpos <2 || $dotpos < $atpos || $lastindex - $dotpos < 2 || $dotpos - $atpos < 2 || $dotpos == $lastindex)
{           
    //$ermsg = "Please fill out the form in a correct way!";
    //function_alert($ermsg);
    header('Location: ./Registration.php');        
}
else
{
    if(ExistingEMail($email))
    {
        if(ExistingUName($UserName))
        {
            if(RegisterUser($UserName,$email,$password,$_POST['companyCheck'])){
                echo "<script type='text/javascript'>alert('Registreringen lyckades!'); window.location.href='login.php';</script>";
            }

        }
        else
        {
            $ermsg = "The User name already exist. Please try another one!";
            echo "<script type='text/javascript'>alert('$ermsg'); window.location.href='Registration.php';</script>";
        }    
    }
    else
    {
        $ermsg = "The E-mail address already exist. Please try another one!";
        echo "<script type='text/javascript'>alert('$ermsg'); window.location.href='Registration.php';</script>";
    }             
}
?>