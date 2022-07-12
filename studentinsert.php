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

if (isset($_POST['insert'])) {

  $Name=$_POST['name'];
  $Age=$_POST['age'];
  $Class=$_POST['class'];
  $Email=$_POST['email'];
  $DateofBirth=$_POST['dateofbirth'];
  $Gender=$_POST['gender'];
  $Fathername = $_POST['fname'];
  $Mothername = $_POST['mname'];
  $Address=$_POST['address'];
  $City = $_POST['city'];
  $State = $_POST['state'];
  $Zip = $_POST['zip'];
  $Contact=$_POST['contact'];

  $select="INSERT INTO student_insert(id,Name,Age,Class,Email,DateofBirth,Gender,FatherName,MotherName,Address,City,State,Zip,Contact) VALUES(0,'$Name','$Age','$Class','$Email','$DateofBirth','$Gender','$Fathername','$Mothername','$Address','$City','$State','$Zip','$Contact')";
if (mysqli_query($con,$select))
 {
  echo "<br> New record created successfully";
} 
else {
  echo "Error: " . $select. "<br>" . mysqli_error($con);
}
}
?>