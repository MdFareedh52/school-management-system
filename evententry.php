<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school1";

$con=mysqli_connect($servername,$username,$password,$dbname);

if ($con->connect_errno) {

  echo $con->connect_error;
  die();

} else {
 //echo "Database Connected";
}

if (isset($_POST['formad'];)) {

  $EventTitle = $_POST['eventtitle'];
  $EventDate = $_POST['date'];
  $Eventpublish = $_POST['publish'];
  $Discription = $_POST['discription'];
  $Chiefguest = $_POST['chiefguest'];
  $Place = $_POST['place'];
  $Approval = $_POST['approval'];

   $select="INSERT INTO eventreport (id,EventTitle,EventDate,PublishDate,Discription,ChiefGuest,Place,PrincipalApproval) VALUES (0,'$EventTitle','$EventDate','$Eventpublish','$Discription','$Chiefguest','$Place','$Approval')";
   if (mysqli_query($con,$select))
 {
  echo 'inserted sucessfully';
} 
else {
     echo 'databases not connectes';
}
mysqli_close($con);
}
  ?>