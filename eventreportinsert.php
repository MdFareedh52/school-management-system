<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "school1");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$eventtitle = $_REQUEST['eventtitle'];
		$eventdate = $_REQUEST['date'];
		$publishdate = $_REQUEST['publish'];
		$Discription = $_REQUEST['discription'];
		$chiefguest = $_REQUEST['guest'];
		$place = $_REQUEST['place'];
		$approval = $_REQUEST['approval'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO eventreport VALUES (0,'$eventtitle','$eventdate','$publishdate',
			'$Discription','$chiefguest','$place','$approval')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$eventtitle\n $Discription\n "
				. "$chiefguest\n");
		} else{
			echo "data not inserted $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
