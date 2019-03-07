<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>
			<h1>Notice From Admin</h1>
			
<?php
	
	
	$teacherid =$_SESSION['id'];

	
	$sql = "select * from teachernotice where teacherid='".$teacherid."'";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<ul>
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<li><input type="button" value="<?php echo $row['subject'];?>" onclick="shownotice('<?php echo $row['notice'];?>')" /></li>
	<?php } ?> </ul>
	
	<?php
	}else
	{
		echo "You Have No Notice!";
	}


	mysqli_close($conn);
	?>
			
		<script>

		function shownotice(i){
			var x=i;
			alert(x);
		}
		</script>
