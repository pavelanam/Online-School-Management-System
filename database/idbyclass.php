<?php include "conn.php"; ?>
<?php
	
	if(!isset($_GET['class']))
		$class = "9";
	else
	{
		if($_GET['class']=="classone")
			$class = "1";
		else if($_GET['class']=="classtwo")
			$class = "2";
		else if($_GET['class']=="classthree")
			$class = "3";
		else if($_GET['class']=="classfour")
			$class = "4";
		else if($_GET['class']=="classfive")
			$class = "5";
		else if($_GET['class']=="classsix")
			$class = "6";
		else if($_GET['class']=="classseven")
			$class = "7";
		else if($_GET['class']=="classeight")
			$class = "8";
		else if($_GET['class']=="classnine")
			$class = "9";
		else if($_GET['class']=="classten")
			$class = "10";
	}
	
	$sql = "select * from student where class=".$class."";
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<select name = "stcombo">
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
	<?php } ?> </select>
	
	<?php
	}else
	{
		echo "Currently No Student!";
	}


	mysqli_close($conn);
	?>