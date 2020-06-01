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
if($_POST['company'] == null)
{
    $company = 0;
}
else 
{
    $company = 1;
}
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
<<<<<<< HEAD
            if(RegisterUser($UserName, $email, $password, $company)){
=======
            if(RegisterUser($UserName,$email,$password,$_POST['companyCheck'])){
>>>>>>> 1c9d9873cac261c010c6ceb64e568326addf1133
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