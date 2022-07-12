<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-md-12">
  <a class="navbar-brand" href="home.php" style="font-size:30px; margin-left: 40px;"><img src="../img/profile.png"> Teacher</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php" style="margin-top:5px;font-size: 20px;margin-left: 700px;">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendence.php" style="margin-top: 5px; font-size: 20px;">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="student.php" style="font-size:20px;margin-top: 5px;">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php" style="font-size:20px;margin-top: 5px;">Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php" style="font-size:20px;margin-top: 5px;">Event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../img/test.png" style="height: 40px;width: 40px;">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="height:60px;width:10px;">
          <a class="dropdown-item" href="logout.php" class="btn btn-secondary"><button class=" btn btn-secondary">Logout</button></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<hr style="color:white;height: 5px;width: 900px;">
<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>
<?php 
	error_reporting(0);
	$cur_date = date('Y-m-d');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($attend);
	}
?>
	<div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>
<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing !</div>
		<div class="card">
			<div class="card-header bg-dark">
				<h2>
					<a class="btn btn-success" href="add.php">Add Student</a>
					<a class="btn btn-info float-right" href="date_view.php">View All</a>
					<a class="btn btn-warning float-right" href="../attendence.php" style="margin-right:5px;">Back</a>
				</h2>
			</div>

			<div class="card-body"  style="background-color:#212529;">
				<div class="card bg-dark text-center mb-3"  style="background-color:#212529;">
					<h4 class="m-0 py-3" style="color:white;"><strong>Date</strong>: <?php echo $cur_date; ?></h4>
				</div>
				<form action="" method="post">
					<table class="table table-striped table-dark table-hover table-bordered">
						<tr>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Id</th>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Student Name</th>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Student Roll</th>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Attendance</th>
						</tr>
<?php 
	$getstudent = $stu->getStudents();
	if ($getstudent) {
		$i = 0;
		while ($value = $getstudent->fetch_assoc()) {
			$i++;
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['roll']; ?></td>
							<td>
								<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present">Present
								<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent">Absent
							</td>
						</tr>
<?php } } ?>

						<tr>
							<td colspan="4" class="text-center">
								<input type="submit" name="submit" class="btn btn-primary px-5" value="Submit">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include "inc/footer.php"; ?>