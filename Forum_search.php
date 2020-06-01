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
        $row = (object) $row; ?>
        ID:  <?php echo $row->PostID."</br>"; ?>

        Inlägg: <?php echo $row->Message."</br>"; ?>

        Författare: <?php echo $row->UserName."</br>";

        echo '<p>---------</p>';
    }
}
?>