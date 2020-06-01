<?php

$testid=$_POST['id'];

$db = new SQLite3 ("./db/testadd.db");
$sql = "SELECT * from testtable WHERE testid = $testid";
$result = $db->query($sql); 
$row = $result->fetchArray();
echo $row['latitude'];
$db->close();
?> 




