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

$sql = "SELECT TourOperator_ID, Language, Country FROM TourOperator";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo '<table>';
	echo '<tr>';
          echo '<th>TourOperator</th>';
          echo '<th>Language</th>';
          echo '<th>Country</th>';


	echo '</tr>';
  while($row = mysqli_fetch_assoc($result)) {
   	      echo '<tr>';
   	      echo "<td>". $row["TourOperator_ID"]."</td>";
   	      echo "<td>". $row["Language"]."</td>";
   	      echo "<td>". $row["Country"]."</td>";
  
  	echo '</tr>';

  }
  echo '<table>';
 } 