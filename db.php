<?php
function CreateTable(){
    $db = new SQLite3('./db/user.db');
    $db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
}
function RegisterUser($username, $email, $password){
$db = new SQLite3('./db/user.db');
//$db->exec('CREATE TABLE IF NOT EXISTS User(UserID integer, UserName varchar(100), UserPassword varchar(100), UserEmail varchar(100))');
$stmt = $db->prepare("INSERT INTO User (UserName, UserPassword, UserEmail) VALUES (:username,:hashedPassword, :email)");
$hashedPass = password_hash($password, PASSWORD_DEFAULT);
$stmt->bindParam( ':username', $username, SQLITE3_TEXT);
$stmt->bindParam( ':email', $email, SQLITE3_TEXT);
$stmt->bindParam( ':hashedPassword', $hashedPass, SQLITE3_TEXT);
if($stmt->execute()){
    $db->close();
    return true;
}
else{
    $db->close();
    return false;
}
}
function ValidateLogin($result, $password)
{
    if(password_verify($password, $result['UserPassword']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function Login($username, $password){
        $db = new SQLite3('./db/user.db');
        $sql = "SELECT * FROM User WHERE UserName = :username";
        $stmt = $db->prepare($sql);
        $stmt->bindParam( ':username', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        $resArr = $result->fetchArray();
        if($resArr != false)
        {
            if(ValidateLogin($resArr, $password))
            {
                session_start();
                $_SESSION['UserID'] = $resArr['UserID']; 
                $_SESSION['UserName'] = $resArr['UserName']; 
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

function Save_post($UserName, $Message) //Ny post från Calle
{
    $db = new SQLite3('./db/user.db');
    $db->exec('CREATE TABLE IF NOT EXISTS PostQ1(PostID integer, UserName varchar(500), Message varchar(255))'); //behöövs detta
    $sql = "INSERT INTO 'PostQ1'('UserName', 'Message') VALUES (:UserName, :Message)";
    $stmt = $db->prepare($sql); 
    $stmt->bindParam(':Message', $Message, SQLITE3_TEXT);
    $stmt->bindParam(':UserName', $UserName, SQLITE3_TEXT);
    if($stmt->execute())
    {
        $db->close();
        return true;
    }
    else
    {
        $db->close();
        return false;
    }
}
function Print_Comments() //Ny post från calle Förmodligen ta bort.... 
{
        $db = new SQLite3('./db/user.db');
        $results = $db->query('SELECT * FROM forum');
        while ($row = $results->fetchArray()) 
            {
                $row = (object) $row; ?>
                ID:  <?php echo $row->CommentsID."</br>"; ?>

                Inlägg: <?php echo $row->Comments."</br>"; ?>

                Författare: <?php echo $row->ComName."</br>";

                echo '<p>---------</p>';
            }
}



function ExistingEMail($email){
    $db = new SQLite3('./db/user.db');
    $stmt = $db->prepare("SELECT * FROM User WHERE :email = UserEmail");
    $stmt->bindParam(':email',$email, SQLITE3_TEXT);
    $result = $stmt->execute();

    if($result->fetchArray() == false){
        $db->close();
        return true;
    }
    else{
        $db->close();
        return false;
    } 
}
function ExistingUName($username){
    $db = new SQLite3('./db/user.db');
    $stmt = $db->prepare("SELECT * FROM User WHERE :username = UserName");
    $stmt->bindParam(':username',$username, SQLITE3_TEXT);
    $result = $stmt->execute();

    if($result->fetchArray() == false){
        $db->close();
        return true;
    }
    else{
        $db->close();
        return false;
    } 
}
?>
