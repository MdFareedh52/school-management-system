<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "school1";

 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }

  $sql = "SELECT COUNT(*) AS Count FROM event_approval";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo $row['Count'];
  $conn->close();
?>