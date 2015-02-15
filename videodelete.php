<?php
include 'connection.php';
$video_id = $_POST["id"];

if (!($stmt = $mysqli->query("DELETE FROM videos WHERE id = '$video_id' LIMIT 1 "))) {
   echo "item delete failed:";
	}
?>
