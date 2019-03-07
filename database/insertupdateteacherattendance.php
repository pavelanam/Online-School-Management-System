<?php include "conn.php"; ?>
<?php
	
	$date = $_GET['date'];
	$id = $_GET['id'];
	$name = $_GET['name'];
	$present = $_GET['present'];
	
	$sql1 = "select * from teacherattendance where date='".$date."' and teacherid='".$id."'";
	//echo $sql1;
	
	$result = mysqli_query($conn, $sql1);
	
	if(mysqli_num_rows($result)>0){
		
		$sql2 = "UPDATE teacherattendance SET present='".$present."' where teacherid='".$id."' and date='".$date."'";
		//echo $sql2;
		
		if(mysqli_query($conn, $sql2))
			echo "Update Done";
		else
			echo "Update Failed";
		
	}
	else
	{
		$sql = "insert into teacherattendance values ('','".$date."','".$id."','".$name."','".$present."')";
		//echo $sql;
		
		if(mysqli_query($conn, $sql))
			echo "Insert Done";
		else
			echo "Insert Failed";
	}
	
	

	mysqli_close($conn);
?>