<?php
include "db.php";
session_start();
$db = new SQLite3('./db/user.db'); //DB instansieringsmetod; 
$results = $db->query('SELECT * FROM PostQ1 ORDER BY PostID DESC'); //Kolla till tablenames
while ($row = $results->fetchArray()) 
    {
        $row = (object) $row; ?>
        ID:  <?php echo '<div class = "divComment">'.$row->PostID."</br>"; ?>

        Inlägg: <?php echo $row->Message."</br>"; ?>

        Författare: <?php echo $row->UserName."</br>".'</div>';

        echo '<p>---------</p>';
    }
?>