<?php
include 'connect.php';

if (!$mysqli->query("DROP TABLE IF EXISTS videos") ||
    !$mysqli->query("CREATE TABLE videos(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name CHAR(255), category CHAR(255), length INT, rented TINYINT(1))") 
{
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

header('Location: VideoStorage.php');
?>
