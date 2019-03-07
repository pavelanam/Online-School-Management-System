<?php include "conn.php"; ?>
<?php

	$id = $_GET['id'];
	$view = $_GET['view'];
	$sql = "UPDATE teacher SET status='r' where id=".$id;
	$sql1 = "UPDATE alldata SET status='r' where id=".$id;
	
	if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
	{?>
		<?php include "allteachers.php"; ?><?php
	}
?>