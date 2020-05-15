<?php include "db.php";
if(!Login($_POST["username"], $_POST["password"])){
    header("Location: login.php");
    echo"Username and password does not match";
}
else{
    /* header("Location : startPage.php"); 
    alternativt header("successfulLogin");
    */
    header("Location: index.php");
}
?>