<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>

	<div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>
		<div class="card">
			<div class="card-header bg-dark">
				<h2>
					<a class="btn btn-success" href="add.php">Add Student</a>
					<a class="btn btn-info float-right" href="index.php">Take Addendance</a>
					<a class="btn btn-primary float-right" href="index.php" style="margin-right:5px;">Back</a>
				</h2>
			</div>

			<div class="card-body" style="background-color:#212529;">
				<form action="" method="post">
					<table class="table table-dark table-hover table-striped">
						<tr>
							<th width="30%" style="color:#FFD700;font-weight: 900;">Id</th>
							<th width="50%" style="color:#FFD700;font-weight: 900;">Attendance Date</th>
							<th width="20%" style="color:#FFD700;font-weight: 900;">Action</th>
						</tr>
<?php 
	$getdate = $stu->getDateList();
	if ($getdate) {
		$i = 0;
		while ($value = $getdate->fetch_assoc()) {
			$i++;
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['att_time']; ?></td>
							<td>
							<a class="btn btn-primary" href="student_view.php?dt=<?php echo $value['att_time']; ?>">View</a>
							</td>
						</tr>
<?php } } ?>
					</table>
				</form>
			</div>
		</div>
	</div>
<?php include("inc/footer.php"); ?>