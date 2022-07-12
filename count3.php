<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "db_sams";

 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }

  $sql = "SELECT COUNT(*) AS Count FROM tbl_attendance1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo $row['Count'];
  $conn->close();
?>