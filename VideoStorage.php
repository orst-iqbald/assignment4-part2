
<html>
<head><title> Videos HW</title></head>
<body>
  <h1> Video Database </h1>
<?php
include 'connection.php';
//select query
$results = $mysqli->query("SELECT id, name, category, length, rented FROM videos");
// Current  videos table
    echo '<table border="1">';
    echo '<tr>';
    echo '<th> Id# </th>';
    echo '<th> Video Nam </th>';
    echo '<th> Category </th>';
    echo '<th> Length </th>';
    echo '<th> Checked out </th>';
    echo '<th> Available </th>';
    echo '<th> Delete?  </th>'; 
    echo '</tr>';

    while($row = $results->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row ["id"].'</td>';
    echo '<td>'.$row ["name"].'</td>';
    echo '<td>'.$row ["category"].'</td>';
    echo '<td>'.$row ["length"].'</td>';
    echo '<td>';
        if($row["rented"]==1){
    echo '<input type = "checkbox" name="checkout" checked>';}
	 else{
    echo '<input type = "checkbox" name="checkout">';
	}
    echo '</td>';
    echo '<td>';
        if($row["rented"]==0){
    echo '<input type = "checkbox" name="availablet" checked>';}
         else{
    echo '<input type = "checkbox" name="available">';
        }    
    //delete item
    echo '<td> <form method="POST"action="videodelete.php"><input type="hidden" name="id" value='.$row["id"].'></input> <input type="submit" value="Delete" ></form></td>';
}
    echo '</table>';

//category select loop
    $results = $mysqli->query("SELECT DISTINCT category FROM videos");
	echo '<form action="selectcat.php" method="GET">';
        echo 'Select your category  <select name="category">';
        while($row = $results->fetch_assoc()) {
            echo '<option>'.$row ["category"].'</option>';}
        echo '</select>';
	echo '<input type="submit" value="Select"></form>';
    
//delete all data
    echo 'Delete all products';
    echo '<form action="deleteall.php"> <input type="submit" value="Delete All"></form>';


?>



<html>
<h2> Add a Video to the Database </h2>
  <form action ="videoadd.php" method="post">
    <table border="0">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name"><input type="hidden" name="id" value="1"></td>
      </tr>
      <tr>
        <td>Category</td>
        <td><input type="text" name="category"></td>
      </tr>
      <tr>
        <td>Length</td>
        <td><input type="number" name="length"></td>
      </tr>
        <td><input type="submit" value="Add"></td>
      </tr>
    </table>
   </form>
</body>
</html>


