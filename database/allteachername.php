<?php include "conn.php"; ?>
<?php
	
	$sql = "select * from teacher where status='a'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<select name = "tcombo">
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
	<?php } ?> </select>
	
	<?php
	}else
	{
		echo "No Approved Teacher Available!";
	}


	mysqli_close($conn);
?>