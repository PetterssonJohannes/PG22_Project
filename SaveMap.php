<?php
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    $coordinates = "$lat".","."$lng";

    session_start();
    $username = $_SESSION['UserName'];

    $db = new SQLite3 ("./db/user.db");

    $sql = "INSERT INTO Marker ('UserName', 'Coordinates') VALUES (:username, :coordinates)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username, SQLITE3_TEXT);
    $stmt->bindParam(':coordinates', $coordinates, SQLITE3_TEXT);
    $stmt->execute();
    $db->close();
?>