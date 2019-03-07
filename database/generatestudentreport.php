<?php include "conn.php"; ?>
<?php
	
	
	$id = $_GET["id"];
	
	if($id=="1"){
	$sql = "select studentid, firstterm from result where firstterm = (select max(firstterm) from result)";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['studentid'];
			$firstterm=$row['firstterm'];
			$sql1="select * from student where id=".$id;
			$result1 = mysqli_query($conn, $sql1);
			
			if(mysqli_num_rows($result1)>0){
				while($row=mysqli_fetch_assoc($result1)){?>
					<img src="<?php echo $row['image'];?>" /><br/>
					Name : <font color="red"><b><?php echo $row['name'];?></b></font> <br/>
					Email : <font color="red"><b><?php echo $row['email'];?></b></font> <br/>
					Gender : <font color="red"><b><?php echo $row['gender'];?></b></font> <br/>
					Address : <font color="red"><b><?php echo $row['address'];?></b></font> <br/>
					Date of Birth : <font color="red"><b><?php echo $row['dob'];?></b></font> <br/>
					Mark Obtained In FirstTerm : <font color="red"><b><?php echo $firstterm;?></b></font> <br/><hr/>
	<?php } ?>
	
	<?php
	}}}else
	{
		echo "Not Found!";
	}

	mysqli_close($conn);
	}
	else if($id=="2"){
	$sql = "select studentid, secondterm from result where secondterm = (select max(secondterm) from result)";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['studentid'];
			$firstterm=$row['secondterm'];
			$sql1="select * from student where id=".$id;
			$result1 = mysqli_query($conn, $sql1);
			
			if(mysqli_num_rows($result1)>0){
				while($row=mysqli_fetch_assoc($result1)){?>
					<img src="<?php echo $row['image'];?>" /><br/>
					Name : <font color="red"><b><?php echo $row['name'];?></b></font> <br/>
					Email : <font color="red"><b><?php echo $row['email'];?></b></font> <br/>
					Gender : <font color="red"><b><?php echo $row['gender'];?></b></font> <br/>
					Address : <font color="red"><b><?php echo $row['address'];?></b></font> <br/>
					Date of Birth : <font color="red"><b><?php echo $row['dob'];?></b></font> <br/>
					Mark Obtained In SecondTerm : <font color="red"><b><?php echo $firstterm;?></b></font> <br/><hr/>
	<?php } ?>
	
	<?php
	}}}else
	{
		echo "Not Found!";
	}

	mysqli_close($conn);
	}
	else if($id=="3"){
	$sql = "select studentid, finalterm from result where finalterm = (select max(finalterm) from result)";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['studentid'];
			$firstterm=$row['finalterm'];
			$sql1="select * from student where id=".$id;
			$result1 = mysqli_query($conn, $sql1);
			
			if(mysqli_num_rows($result1)>0){
				while($row=mysqli_fetch_assoc($result1)){?>
					<img src="<?php echo $row['image'];?>" /><br/>
					Name : <font color="red"><b><?php echo $row['name'];?></b></font> <br/>
					Email : <font color="red"><b><?php echo $row['email'];?></b></font> <br/>
					Gender : <font color="red"><b><?php echo $row['gender'];?></b></font> <br/>
					Address : <font color="red"><b><?php echo $row['address'];?></b></font> <br/>
					Date of Birth : <font color="red"><b><?php echo $row['dob'];?></b></font> <br/>
					Mark Obtained In FinalTerm : <font color="red"><b><?php echo $firstterm;?></b></font> <br/><hr/>
	<?php } ?>
	
	<?php
	}}}else
	{
		echo "Not Found!";
	}

	mysqli_close($conn);
	}
	?>