<?php include "conn.php"; ?>
<?php
	
	$class = $_GET['class'];
	$sql = "select * from student where class='".$class."'";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<select name = "scombo">
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<option value="<?php echo $row['id'];?>" onclick="getgnum('<?php echo $row['id'];?>')"><?php echo $row['name'];?></option>
	<?php } ?> </select>
	
	<?php
	}else
	{
		echo "Currently No Student!";
	}


	mysqli_close($conn);
	?>