<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>
<?php 
	// error_reporting(0);
	$dt = $_GET['dt'];
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		 $attend = $_POST['attend'];
		 $attattend = $stu->updateAttendance($dt, $attend);
	}
?>
	<div class="container">
<?php 
	if (isset($attattend)) {
		echo $attattend;
	}
?>
<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing !</div>
		<div class="card">
			<div class="card-header bg-dark">
				<h2>
					<a class="btn btn-success" href="add.php">Add Student</a>
					<a class="btn btn-info float-right" href="date_view.php">Back</a>
				</h2>
			</div>

			<div class="card-body" style="background-color:#212529;">
				<div class="card bg-dark text-center mb-3">
					<h4 class="m-0 py-3"  style="color:white;"><strong>Date</strong>: <?php echo $dt; ?></h4>
				</div>
				<form action="" method="post">
					<table class="table table-striped table-hover table-dark">
						<tr>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Id</th>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Student Name</th>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Student Roll</th>
							<th width="25%" style="color:#FFD700;font-weight: 900;">Attendance</th>
						</tr>
<?php 

	$getstudent = $stu->getAllData($dt);
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
		<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present" <?php if($value['attend'] == "present") {echo "checked";} ?>>Present
		<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent" <?php if($value['attend'] == "absent") {echo "checked";} ?>>Absent
	</td>
</tr>
<?php } } ?>

						<tr>
							<td colspan="4" class="text-center">
								<input type="submit" name="submit" class="btn btn-primary px-5" value="Update">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("inc/footer.php"); ?>