<?php
ini_set('display_errors', 'On');

include 'connection.php';

//$id_row;
$result = $mysqli->query("SELECT * FROM videos");
if($result->num_rows){
//    echo "number of rows";
    $id_row = $result->num_rows +1;// don't need this since it's auto increment
}
$result->close();
 // $out_id = $id_row;
  $out_name = $_POST["name"];
  $out_category = $_POST["category"];
  $out_length = $_POST["length"];
//  $out_rented = $_POST["rented"];

if(!$out_name || !$out_category || !$out_length){
  echo "you need to enter in all required details";
  exit;
}
//echo $out_name;
$mysqli->query("INSERT INTO videos(id, name, category, length) VALUES ('NULL', '$out_name', '$out_category', '$out_length')");

echo "Go back to <a href=VideoStorage.php> homepage </a>";
//echo $out_name;
/*
$id_row;
$result = $mysqli->query("SELECT * FROM videos");
if($result->num_rows){
    echo "number of rows";
    $id_row = $result->num_rows;
}

$stmt = $mysqli->prepare("INSERT INTO videos(id, name, category, length, rented) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_result($id_row, $_POST["name"], $_POST["category"], $_POST["length"], $_POST["rented"]);
$stmt->execute(); 

//$stmt->close();

*/
//header('Location: VideoStorage.php');
?>
