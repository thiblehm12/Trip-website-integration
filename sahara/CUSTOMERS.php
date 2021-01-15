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

$sql = "SELECT CustomerID, FirstName, LastName, Birthday, Address, City, Region, PostalCode, Country, PhoneNumber FROM CUSTOMERS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo '<table>';
	echo '<tr>';
          echo '<th>CustomerID</th>';
          echo '<th>FirstName</th>';
          echo '<th>LastName</th>';
          echo '<th>Birthday</th>';
          echo '<th>Address</th>';
          echo '<th>City</th>';
          echo '<th>Region</th>';
          echo '<th>PostalCode</th>';
          echo '<th>Country</th>';
          echo '<th>PhoneNumber</th>';

	echo '</tr>';
  while($row = mysqli_fetch_assoc($result)) {
   	      echo '<tr>';
   	      echo "<td>". $row["CustomerID"]."</td>";
   	      echo "<td>". $row["FirstName"]."</td>";
   	      echo "<td>". $row["LastName"]."</td>";
   	      echo "<td>". $row["Birthday"]."</td>";
   	      echo "<td>". $row["Address"]."</td>";
   	      echo "<td>". $row["City"]."</td>";
   	      echo "<td>". $row["Region"]."</td>";
   	      echo "<td>". $row["PostalCode"]."</td>";
   	      echo "<td>". $row["Country"]."</td>";
   	      echo "<td>". $row["PhoneNumber"]."</td>";
  
  	echo '</tr>';

  }
  echo '<table>';
 } 
