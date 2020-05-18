<?php
function CreateTable(){
    $db = new SQLite3('./db/user.db');
    $db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
}
function RegisterUser(){
    if(isset($_POST['UserName']) && isset($_POST['UserEmail']))
{

    //Fixa så att det förhindrar SQL-injections
    $UserName = $_POST["UserName"];
    $UserPassword=$_POST["UserPassword"];
    $UserEmail=$_POST['UserEmail'];
}
$db->exec("INSERT INTO User(UserName, UserPassword, UserEmail) VALUES('$UserNAme', '$UserPassword', '$UserEmail')");
}

function TestPrint(){
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
}


function ValidateLogin(){

}

?>
