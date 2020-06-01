<?php
include "db.php";
session_start();
$db = new SQLite3('db/user.db'); //DB instansieringsmetod; 
$results = $db->query('SELECT * FROM PostQ1 ORDER BY PostID DESC'); //Kolla till tablenames
while ($row = $results->fetchArray()) 
    {
      
        echo '<div id="ForumDisplay">'.'<div id="ForumUserInfoBox">'.'<div class="ForumUserInfo">'.$row['UserName'].'<br>'.$row['PostID'].'</div>'.'</div>'.'<div id="ForumMessageBox">'.'<div class="ForumUserMessage">'.$row['Message'].'</div>'.'</div>'.'</div>';          
        
        echo '<hr class="solid">';  
    }

?>