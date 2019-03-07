<?php include "conn.php"; ?>
<?php
	
	$sub=$_GET['sub'];
	$class=$_GET['class'];
	$stdid=$_GET['stdid'];
	$sql = "select * from result where class='".$class."' and studentid='".$stdid."' and subject='".$sub."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){
		
		while($row=mysqli_fetch_assoc($result)){
			echo "First Term Mark: <b>".$row['firstterm']."</b><br/>Second Term Mark: <b>".$row['secondterm']."</b><br/>Final Term Mark: <b>".$row['finalterm']."</b><br/><br/>";
		}
		
	}else{
		echo "First Term Mark: <b>Not given yet!</b><br/>Second Term Mark: <b>Not given yet!</b><br/>Final Term Mark: <b>Not given yet!</b><br/><br/>";
	}

	mysqli_close($conn);

	
?>