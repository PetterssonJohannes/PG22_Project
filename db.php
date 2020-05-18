<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" >
<link rel="stylesheet" type="text/css" href="grafik.css">
<title>Sparade inlägg</title>
</head>
<?php
$db = new SQLite3('./db/user.db');
$db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
/*function Login($username,$password){
    /* 
    Server side confirmation, kolla om lösenordet matchar användarnamnet i databasen.
    
    if($username == "" || $password ==""){
        echo "not good";
        return false;
    }
    else{
        echo "very good";
        return true;
    } 
    
<<<<<<< HEAD
   
=======
    


   

>>>>>>> cf0b4a3c28341be81ff76afbb310ac7b1be71549
    echo $password;
    return true;
}*/




?>
<h1>

<body>
<form method="POST">
<br>
Lägg till namn
<input type="text" name="UserName">
<br> 
Lägg till Lösenord
<input type="text" name="UserPassword">
<br>
Lägg till Email
<input type="text" name="UserEmail">
<br>
<input type="submit" value="save">
</form>
</h1>
<?php
if(isset($_POST['UserName']) && isset($_POST['UserEmail']))
{
    $UserName = $_POST["UserName"];
    $UserPassword=$_POST["UserPassword"];
    $UserEmail=$_POST['UserEmail'];
}
$db->exec("INSERT INTO User(UserName, UserPassword, UserEmail) VALUES('$UserNAme', '$UserPassword', '$UserEmail')");

$results = $db->query('SELECT * FROM User');
while ($row = $results->fetchArray()) 
{
    $row = (object) $row; ?>
 ID:  <?php echo $row->UserID."</br>"; ?>

Namn: <?php echo $row->UserName."</br>"; ?>

Password: <?php echo $row->UserPassword."</br>"; ?>

Email: <?php echo $row->UserEmail."</br>";

    echo '<p>---------</p>';
}
?>
</body>
</html>