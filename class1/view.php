
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
					<a class="btn btn-info float-right" href="class1.php">Back</a>
					<button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span><img src="../img/printer.png" style="height:25px;width: 25px;"> Print</button>
					<script>
						function myFunction() {
 					    window.print();
								}
					</script>
				</h2>
			</div>

			<div class="card-body" style="background-color:#212529;">
				<div class="card bg-dark text-center mb-3">
					<h4 class="m-0 py-3" style="color:white;"><strong>Date</strong>: <?php echo $dt; ?></h4>
				</div>
				<form action="" method="post">
					<table class="table table-dark table-hover table-striped table-bordered">
						<tr>
							<th width="25%" style="font-weight:900; color: #FFD700;">Id</th>
							<th width="25%" style="font-weight:900; color: #FFD700;">Student Name</th>
							<th width="25%" style="font-weight:900; color: #FFD700;">Student Roll</th>
							<th width="25%" style="font-weight:900; color: #FFD700;">Attendance</th>
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