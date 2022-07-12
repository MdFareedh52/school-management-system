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
	echo "Database Connected";
}

if (isset($_POST['button'])) {

	$Name=$_POST['name'];
	$Age=$_POST['age'];
	$Class=$_POST['class'];
	$Date_of_Birth=$_POST['date'];
	$Qualification=$_POST['qualification'];
	$Gender=$_POST['gender'];
	$Email=$_POST['email'];
	$Address=$_POST['address'];
	$Contact=$_POST['contact'];
	$City = $_POST['city'];
	$State = $_POST['state'];
  	$Zip = $_POST['zip'];

	$select="INSERT INTO teacher_register(Id,Name,Age,Class,Date_of_Birth,Qualification,Gender,Email,Address,Contact,City,State,Zip) VALUES(0,'$Name','$Age','$Class','$Date_of_Birth','$Qualification','$Gender','$Email','$Address','$Contact','$City','$State','$Zip')";
if (mysqli_query($con,$select))
 {
  echo "<br> New record created successfully";
} 
else {
  echo "Error: " . $select. "<br>" . mysqli_error($con);
}
}
?>