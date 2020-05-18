<?php include "db.php";
if(Login($_POST["username"], $_POST["password"])){
    header("Location: logedIn.php");
}
else{
    /* header("Location : startPage.php"); 
    alternativt header("successfulLogin");
    */
    echo"Username and password does not match";
}
?>