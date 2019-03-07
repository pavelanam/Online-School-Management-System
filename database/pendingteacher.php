<?php include "conn.php"; ?>
<?php

	$id = $_GET['id'];
	$view = $_GET['view'];
	$sql = "UPDATE teacher SET status='p' where id=".$id;
	$sql1 = "UPDATE alldata SET status='p' where id=".$id;
	
	if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
	{?>
		<?php include "Teachers_Info.php"; ?><?php
	}
?>