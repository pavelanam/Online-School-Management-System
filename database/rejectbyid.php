<?php include "conn.php"; ?>
<?php

	$id = $_GET['id'];
	$type = $_GET['type'];
	if($type==1)
		$sql = "UPDATE student SET status='r' where id=".$id;
	else if($type==2)
		$sql = "UPDATE teacher SET status='r' where id=".$id;
	
	if(mysqli_query($conn,$sql))
	{?>
		<?php include "searchbyid.php"; ?><?php
	}
?>