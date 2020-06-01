<?php
    $message = "hej";

    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    $coordinates = "$lat".","."$lng";

    $db = new SQLite3 ("./db/testadd.db");
    $sql = "INSERT INTO testtable ('latitude') VALUES (:coordinates)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':coordinates', $coordinates, SQLITE3_TEXT);
    $stmt->execute();
    $db->close();
?>