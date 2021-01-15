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

$sql = "SELECT Order_ID, CustomerID, OrderDate, TripDate, Tour_ID, TourOperator_ID, InfoPayment_ID FROM `Order`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo '<table>';
  echo '<tr>';
          echo '<th>Order_ID</th>';
          echo '<th>CustomerID</th>';
          echo '<th>OrderDate</th>';
          echo '<th>TripDate</th>';
          echo '<th>Tour_ID</th>';
          echo '<th>TourOperator_ID</th>';
          echo '<th>InfoPayment_ID</th>';


  echo '</tr>';
  while($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo "<td>". $row["Order_ID"]."</td>";
          echo "<td>". $row["CustomerID"]."</td>";
          echo "<td>". $row["OrderDate"]."</td>";
          echo "<td>". $row["TripDate"]."</td>";
          echo "<td>". $row["Tour_ID"]."</td>";
          echo "<td>". $row["TourOperator_ID"]."</td>";
          echo "<td>". $row["InfoPayment_ID"]."</td>";


    echo '</tr>';

 }
  echo '<table>';
 } 