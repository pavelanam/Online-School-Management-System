<?php include "conn.php"; ?>
<?php
	
	$date = $_GET['date'];
	$sql = "select * from teacherattendance where date='".$date."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==0)
	{
		$sql1 = "select * from teacher where status='a'";
		$result1 = mysqli_query($conn, $sql1);
		if(mysqli_num_rows($result1)>0)
		{?>
			<?php while($row=mysqli_fetch_assoc($result1))
			{?>
				<?php echo $row['name'];?> [<?php echo $row['id'];?>] 
				<select name="pa" >
				<option value="p" onclick="insertupdatepa('<?php echo $row['id'];?>','p','<?php echo $row['name'];?>')">Present</option>
				<option value="a" onclick="insertupdatepa('<?php echo $row['id'];?>','a','<?php echo $row['name'];?>')">Absent</option>
				</select>
				<div id="<?php echo $row['id'];?>" ></div>
				<br/><hr/>
			<?php 
			} ?>
	
		<?php
		}else
		{
			echo "No Approved Teacher Available!";
		}
	}else
	{
		while($row=mysqli_fetch_assoc($result)){?>
			<?php echo $row['teachername'];?> [<?php echo $row['teacherid'];?>] 
			<select name="pa" >
			<option value="p" onclick="insertupdatepa('<?php echo $row['teacherid'];?>','p','<?php echo $row['teachername'];?>')" <?php if($row['present']=='p') { echo "selected"; } ?>  >Present</option>
			<option value="a" onclick="insertupdatepa('<?php echo $row['teacherid'];?>','a','<?php echo $row['teachername'];?>')" <?php if($row['present']=='a') { echo "selected"; } ?> >Absent</option>
			</select>
			<div id="<?php echo $row['teacherid'];?>" ></div>
			<br/><hr/>
		<?php } ?>
	
	<?php
	}


	mysqli_close($conn);
?>