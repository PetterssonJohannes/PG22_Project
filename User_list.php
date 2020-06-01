<?php
include "db.php";
session_start();
$db = new SQLite3('./db/user.db'); //DB instansieringsmetod; 
$results = $db->query('SELECT * FROM User ORDER BY UserID DESC'); //Kolla till tablenames
while ($row = $results->fetchArray()) 
    {
        $row = (object) $row; ?>
        ID:  <?php echo '<div class = "divComment">'.$row->UserID."</br>"; ?>

        Användarnamn: <?php echo $row->UserName."</br>".'</div>';

        echo '<p>---------</p>';
    }
?>