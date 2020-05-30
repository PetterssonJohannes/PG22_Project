<!DOCTYPE html>
<html lang = "sv">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css">    
    </head>
</html>
<?php include "db.php";
if(Login($_POST["username"], $_POST["password"])){
    header("Location: Startpage_logedIn.php");
}
else{
    /* header("Location : startPage.php"); 
    alternativt header("successfulLogin");
    */
    echo '<script>
    alert("Ogiltiga inloggningsuppgifter");
    window.location.href="login.php";
     </script>';
}
?>