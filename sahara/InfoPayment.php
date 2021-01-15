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

$sql = "SELECT InfoPayment_ID, Order_ID, MethodOfPayment, ShipName, ShipAddress, ShipCity, ShipRegion, ShipPostalCode, ShipCountry FROM InfoPayment";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo '<table>';
	echo '<tr>';
          echo '<th>InfoPayment_ID</th>';
          echo '<th>Order_ID</th>';
          echo '<th>MethodOfPayment</th>';
          echo '<th>ShipName</th>';
          echo '<th>ShipAddress</th>';
          echo '<th>ShipCity</th>';
          echo '<th>ShipRegion</th>';
          echo '<th>ShipPostalCode</th>';
          echo '<th>ShipCountry</th>';

	echo '</tr>';
  while($row = mysqli_fetch_assoc($result)) {
   	      echo '<tr>';
   	      echo "<td>". $row["InfoPayment_ID"]."</td>";
   	      echo "<td>". $row["Order_ID"]."</td>";
   	      echo "<td>". $row["MethodOfPayment"]."</td>";
   	      echo "<td>". $row["ShipName"]."</td>";
   	      echo "<td>". $row["ShipAddress"]."</td>";
   	      echo "<td>". $row["ShipCity"]."</td>";
   	      echo "<td>". $row["ShipRegion"]."</td>";
   	      echo "<td>". $row["ShipPostalCode"]."</td>";
   	      echo "<td>". $row["ShipCountry"]."</td>";


  	echo '</tr>';

 }
  echo '<table>';
 } 