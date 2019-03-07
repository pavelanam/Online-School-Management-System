<?php include "conn.php"; ?>
<?php
	
	
	$class = $_GET["class"];
	$sub=$_GET['sub'];
	
	$sql = "select * from studentnote where class='".$class."' and subject='".$sub."'";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<ul>
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<li><a href="../file/<?php echo $row['file'];?>" ><?php echo $row['file'];?></a></li>
	<?php } ?> </ul>
	
	<?php
	}else
	{
		echo "You Have No Note!";
	}


	mysqli_close($conn);
	?>