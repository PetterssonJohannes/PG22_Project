<?php
include "db.php";
session_start();
$db = new SQLite3('./db/user.db'); //DB instansieringsmetod; 
$results = $db->query('SELECT * FROM User ORDER BY UserID DESC'); //Kolla till tablenames
while ($row = $results->fetchArray()) 
    {
        echo '<div id="ForumDisplay">'.'<div class="ForumUserInfo2">'."UserName: " .$row['UserName'].'<br>'."User-ID: ".$row['UserID'].'</div>'.'</div>';          
        
        echo '<hr class="solid">';
        
    }
?>