<?php
ini_set('display_errors', 'On');
echo "hi";
include 'connection.php';
$cat = $_GET["category"];
echo $cat;

$res = $mysqli->query("SELECT * FROM videos WHERE category ='$cat'");

echo "hi";

    echo '<table border="1">';
    echo '<tr>';
    echo '<th> Id# </th>';
    echo '<th> Video Nam </th>';
    echo '<th> Category </th>';
    echo '<th> Length </th>';
    echo '<th> Rented </th>';
    echo '<th> </th>';
    echo '</tr>';

    while($row = $res->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row ["id"].'</td>';
    //$item_id=$row ["id"];
    echo '<td>'.$row ["name"].'</td>';
    echo '<td>'.$row ["category"].'</td>';
    echo '<td>'.$row ["length"].'</td>';
    echo '<td>'.$row ["rented"].'</td>';
	}

?>
