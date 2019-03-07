<?php include "conn.php"; ?>
<?php
	
	
	$class = $_GET["class"];
	$sub=$_GET['sub'];
	
	$sql = "select * from studentnotice where class='".$class."' and subject='".$sub."'";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<ul>
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<li><input type="button" value="<?php echo $row['reason'];?>" onclick="shownotice('<?php echo $row['notice'];?>')" /></li>
	<?php } ?> </ul>
	
	<?php
	}else
	{
		echo "You Have No Notice!";
	}


	mysqli_close($conn);
	?>