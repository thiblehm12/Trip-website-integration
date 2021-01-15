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

$sql = "SELECT OrderTour_ID, Order_ID, Tour_ID, NumberOfPeople FROM Order_Tour";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo '<table>';
	echo '<tr>';
          echo '<th>OrderTour_ID</th>';
          echo '<th>Order_ID</th>';
          echo '<th>Tour_ID</th>';
          echo '<th>NumberOfPeople</th>';

	echo '</tr>';
  while($row = mysqli_fetch_assoc($result)) {
   	      echo '<tr>';
   	      echo "<td>". $row["OrderTour_ID"]."</td>";
   	      echo "<td>". $row["Order_ID"]."</td>";
   	      echo "<td>". $row["Tour_ID"]."</td>";
          echo "<td>". $row["NumberOfPeople"]."</td>";
  
  	echo '</tr>';

  }
  echo '<table>';
 } 
