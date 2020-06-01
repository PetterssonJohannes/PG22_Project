<?php

$username=$_POST['id'];

$db = new SQLite3 ("./db/user.db");
$sql = "SELECT * from Marker WHERE UserName = '$username'";
$result = $db->query($sql); 
$row = $result->fetchArray();
echo $row['Coordinates'];
$db->close();
?> 