<?php
function CreateTable(){
    $db = new SQLite3('./db/user.db');
    $db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
}
function RegisterUser($username, $email $password){
$db = new SQLite3('./db/user.db')
$db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
$stmt->prepare("INSERT INTO TABLE User(UserName, UserPassword, UserEmail) VALUES (:username, :email, :hashedPassword)");
$hashedPass = password_hash($password);
$stmt->bindParam( ':username', $username, SQLITE3_TEXT);
$stmt->bindParam( ':email', $email, SQLITE3_TEXT);
$stmt->bindParam( ':hashedPassword', $hashedPass, SQLITE3_TEXT);
if($db->execute($stmt)){
    $db->close();
    return true;
}
else{
    $db->close();
    return false;
}
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


function ValidateLogin($Email){
    {
        //måste fixa db så fältet uhashed finns
        $db = new SQLite3('./db/user.db');
        $fetch = "SELECT UHashed FROM User WHERE UEmail = 'test@'";
        $results = $db->query($fetch);
        while ($row = $results->fetchArray())
        {
            return $controll =  $row["UHashed"];
        }
    
    }
}
?>
