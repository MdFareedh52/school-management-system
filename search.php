<?php
	require 'db_conn.php';
	if(ISSET($_POST['search'])){
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
				<th> class </th>
				<th> Email </th>
				<th>date of birth  </th>
				<th> gender </th>
				<th> fathername </th>
				<th>mother name  </th>
				<th>address  </th>
				<th> city </th>
				<th>state  </th>
				<th> zip </th>
				<th> contact </th>
			</tr>
		</thead>
		<tbody>
			<?php
				$keyword = $_POST['keyword'];
				$query = $conn->prepare("SELECT * FROM `student_insert` WHERE `Name` LIKE '%$keyword%' or `Class` LIKE '%$keyword%' or `Age` LIKE '%$keyword%'");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['Name']?></td>
				<td><?php echo $row['Age']?></td>
				<td><?php echo $row['Class']?></td>
				<td><?php echo $row['Email']?></td>
			</tr>
 
 
			<?php
				}
			?>
		</tbody>
	</table>
<?php		
	}else{
?>
	<table class="table table-bordered">
		<thead class="alert-info">
			<tr>
				<th>Name</th>
				<th>Class</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $conn->prepare("SELECT * FROM `student_insert`");
				$query->execute();
				while($row = $query->fetch()){
			?>
			<tr>
				<td><?php echo $row['Name']?></td>
				<td><?php echo $row['Class']?></td>
				<td><?php echo $row['Age']?></td>
			</tr>
 
 
			<?php
				}
			?>
		</tbody>
	</table>
<?php
	}
?>