<?php
function CreateTable(){
    $db = new SQLite3('./db/user.db');
    $db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
}
function RegisterUser($username, $email, $password){
$db = new SQLite3('./db/user.db');
//$db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
$stmt = $db->prepare("INSERT INTO TABLE User (UserName, UserPassword, UserEmail) VALUES (:username, :email, :hashedPassword)");
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
function ValidateLogin($result, $username, $password)
{
    $hash = '$2y$10$BbImQWr0AX/kpSwz8aZN4ewJcUP.1oPmM8rCGvy7OtMeweLBq7Ni.';
    if(password_verify($password, $result))
    {
        $_SESSION['UserID'] = $result['UserID']; 
        $_SESSION['email'] = $email;
        $_SESSION['UserName'] = $result['UserName']; 
        
        return true;
    }
    else
    {
        $Loginerror = false;
        $ermsg = "Please fill out the form in a correct way!";
        echo "<script type='text/javascript'>alert('$ermsg');</script>"; 
        return false;
    }
}

function Login($username, $password){
    
        $db = new SQLite3('./db/user.db');
        $sql = "SELECT UserPassword FROM User WHERE UserName = ':UserName'";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':UserName', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        if($result != null)
        {
            if(ValidateLogin($result->fetchArray(), $username, $password))
            {
            $db->close();
            return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            $db->close();
            return false;
        }
    
    
}
?>
