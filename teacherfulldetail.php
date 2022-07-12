<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="school1";

$con=mysqli_connect($servername,$username,$password,$dbname);

if ($con->connect_errno) {

    echo $con->connect_error;
    die();

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

    $select="INSERT INTO teacher_register(Id,Name,Age,Class,Date_of_Birth,Qualification,Gender,Email,Address,Contact) VALUES(0,'$Name','$Age','$Class','$Date_of_Birth','$Qualification','$Gender','$Email','$Address','$Contact')";


if (mysqli_query($con,$select))
 {
    header("location:teacher.php");
  echo "<br> New record created successfully";
  
} 
else {
  echo "Error: " . $select. "<br>" . mysqli_error($con);
  
}

}

 $select_query = "SELECT * FROM teacher_register ";
 $selectt_result = mysqli_query($con, $select_query);




?>
<div class="table-responsive">
     <table class="table table-dark table-bordered"  id="table">
      <tr>
        <th>Id</th>
       <th>NAME</th>
       <th>AGE</th>
       <th>CLASS</th>
        <th>CONTACT</th>
         <th>EDIT</th>
          <th>DELETE</th>

      </tr>
      <tbody>
      <?php
        while($row = mysqli_fetch_assoc($selectt_result)) {
          $fun=$row['Id'];
          $gan=$row['Name'];
         echo  "<tr style='border:1px solid black'>
          <td>".$row['Id'] ."</td>
          <td>".$row['Name'] ."</td>
          <td>".$row['Age'] ."</td>
          <td>".$row['Class'] ."</td>
          <td>".$row['Contact'] ."</td>

          <td><a href='teacheredit.php?id=$fun'><button type='button' class='btn btn-primary'>Edit</button></a></td>

          <td><a href='det.php?id=$fun;'><button type='button' class='btn btn-success' >Delete</button></a></td>

            
            
            
       </td>";   
         
        }
      ?>
      
    </tbody>
     </table>
<script>
          $(document) .ready(function(){
                $('#table') .DataTable();
          });
      </script>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
  include('db_conn.php');
  $id=$_GET['Id'];
  $query=mysqli_query($conn,"select * from `teacher_register` WHERE Id='$id' ");
  $row=mysqli_fetch_array($query);

  //UPDATE DATA.......
 if (isset($_POST['update'])) {
   
  $Name=$_POST['name'];
  $Age=$_POST['age'];
  $Class=$_POST['class'];
  $Date_of_Birth=$_POST['date'];
  $Qualification=$_POST['qualification'];
  $Gender=$_POST['gender'];
  $Email=$_POST['email'];
  $Address=$_POST['address'];
  $Contact=$_POST['contact'];
 
  
  $sql="UPDATE `teacher_register` SET Name='$Name',Age='$Age',Class='$Class',Date_of_Birth='$Date_of_Birth',Qualification='$Qualification',Gender='$Gender',Email='$Email',Address='$Address',Contact='$Contact' WHERE Id='$id'";


  if (mysqli_query($conn, $sql)) {
     
    echo "<script>
$(document).ready(function(){
    alert('Update successfuly.');
  });
</script>";

    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<h1 style="color:rgb(129, 99, 71)">Edit Teacher Form.</h1>
<br>


<form action="" method="post" class="row g-3" id="user_form" style="padding-bottom:20px;border:2px solid green;background-color:black">

 <div class="col-md-6">
    <label for="inputEmail4"  class="form-label" style="color:orange">Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo $row['Name']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" style="color:orange">Age</label>
    <input type="number" class="form-control"  name="age" value="<?php echo $row['Age']; ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label" style="color:orange">class</label>
    <input type="text" class="form-control"  name="class"  value="<?php echo $row['Class']; ?>">
  </div>

  <div class="col-6">
    <label for="inputAddress1" class="form-label" style="color:orange">Date of Birth</label>
    <input type="date" class="form-control"  name="date" value="<?php echo $row['Date_of_Birth']; ?>">
  </div>

  <div class="col-7">
    <label for="inputAddress2" class="form-label" style="color:orange">Qualification</label>
    <input type="text" class="form-control"  name="qualification"  value="<?php echo $row['Qualification']; ?>">
  </div>

  <div class="col-4">
    <label for="inputAddress3" class="form-label" style="color:orange">Gender</label>
       <select id="inputState" class="form-select" name="gender" value="<?php echo $row['Gender']; ?>">
         <option selected>Select</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
      </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label" style="color:orange">Email</label>
    <input type="Email" class="form-control"  name="email" value="<?php echo $row['Email']; ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" style="color:orange">Address</label>
    <input type="text" class="form-control"  name="address" value="<?php echo $row['Address']; ?>">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label" style="color:orange">Contact</label>
    <input type="text" class="form-control"  name="contact" value="<?php echo $row['Contact']; ?>" >
  </div>
  
  <div class="col-12">
    <br>
    
    <input type="submit" class="btn btn-success" id="btn-add" name="update" value="update">
    <a href="teacherlist.php"><button type="button" class="btn btn-danger">Back</button></a>
  
  </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>