<?php include "conn.php"; ?>
<?php
	
	$tname=$_GET['tname'];
	if(!isset($_GET['class']))
		$class = "classone";
	else
		$class = $_GET['class'];
	
	$sql = "select * from ".$class." where teachername='".$tname."'";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<select name = "scombo">
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
	<?php } ?> </select>
	
	<?php
	}else
	{
		echo "You are not taking any subject of this class!";
	}


	mysqli_close($conn);
	?>