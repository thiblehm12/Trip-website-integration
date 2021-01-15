<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Travel DataBase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Tour_ID FROM Tour";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo '<table>';
	echo '<tr>';
          echo '<th>Tour_ID</th>';



	echo '</tr>';
  while($row = mysqli_fetch_assoc($result)) {
   	      echo '<tr>';
   	      echo "<td>". $row["Tour_ID"]."</td>";
  
  	echo '</tr>';

  }
  echo '<table>';
 } 