
<?php
	include "db_conn.php";
	$id=$_GET['id'];

	$sql="DELETE FROM student_insert WHERE id='$id'";

	if (mysqli_query($conn, $sql)) {

      echo "<script>
$(document).ready(function(){
    alert('Deleted successfuly.');
  });
</script>";

} else {

      echo "Error deleting record: " . mysqli_error($conn);
}

header("location:studentedit.php");

?>


