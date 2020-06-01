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
$stmt = $db->prepare("SELECT * FROM User WHERE UserName LIKE :search ORDER BY UserID DESC");
$stmt->bindValue(':search',"%".$Search."%", SQLITE3_TEXT);
$result = $stmt->execute();
while($row = $result->fetchArray())
{
    $row = (object) $row; ?>
    ID:  <?php echo '<div class = "divComment">'.$row->UserID."</br>"; ?>

    Användarnamn: <?php echo $row->UserName."</br>".'</div>';

    echo '<p>---------</p>';
}
}
?>