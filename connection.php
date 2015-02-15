<?php
ini_set('display_errors', 'On');
include 'storedInfo.php';

$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "iqbald-db", $myPassword, "iqbald-db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Connection worked! <br>";
}
/*
if (!$mysqli->query("DROP TABLE IF EXISTS videos") ||
    !$mysqli->query("CREATE TABLE videos(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, name CHAR(255), category CHAR(255), length INT, rented TINYINT(1))") /*||
    !$mysqli->query("INSERT INTO videos( name, category, length, rented) VALUES ( 'caddyshack', 'comedy', 125, TRUE)")*//*) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
/*
if (!($stmt = $mysqli->prepare("SELECT name, category, length, rented FROM videos"))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$stmt->execute()) {
    echo "Execute failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

$out_id = NULL;
$out_name = NULL;
$out_category = NULL;
$out_length = NULL;
$out_rented = NULL;
if (!$stmt->bind_result( $out_name, $out_category, $out_length, $out_rented)) {
    echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;

}

while ($stmt->fetch()) {
    printf("id = %s (%s), name = %s (%s), category = %s (%s), length = %s (%s), rented  %s (%s)\n", $out_id, gettype($out_id), $out_name, gettype($out_name), $out_category, gettype($out_category),$out_length, gettype($out_length), $out_rented, gettype($out_rented));
}
*/
?>
