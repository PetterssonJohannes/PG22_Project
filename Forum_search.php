<?php
    include "db.php"; 
    if(!empty($_POST['search']))
    {
        $Search = $_POST['search'];
        Print_search($Search);
    }
    else
    {
    echo "Skriv något du vill söka efter";
    }
function Print_search($Search)
{
$db = new SQLite3('./db/user.db');
$stmt = $db->prepare("SELECT * FROM PostQ1 WHERE Message LIKE :search ORDER BY PostID DESC");
$stmt->bindValue(':search',"%".$Search."%", SQLITE3_TEXT);
$result = $stmt->execute();
while($row = $result->fetchArray())
    {
        echo '<div id="ForumDisplay">'.'<div id="ForumUserInfoBox">'.'<div class="ForumUserInfo">'.$row['UserName'].'<br>'.$row['PostID'].'</div>'.'</div>'.'<div id="ForumMessageBox">'.'<div class="ForumUserMessage">'.$row['Message'].'</div>'.'</div>'.'</div>';          
        
        echo '<hr class="solid">';  
    }
}
?>