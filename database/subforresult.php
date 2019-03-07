<?php include "conn.php"; ?>
<?php
	
	if($_SESSION["class"]==1)
		$class = "classone";
	else if($_SESSION["class"]==2)
		$class = "classtwo";
	else if($_SESSION["class"]==3)
		$class = "classthree";
	else if($_SESSION["class"]==4)
		$class = "classfour";
	else if($_SESSION["class"]==5)
		$class = "classfive";
	else if($_SESSION["class"]==6)
		$class = "classsix";
	else if($_SESSION["class"]==7)
		$class = "classseven";
	else if($_SESSION["class"]==8)
		$class = "classeight";
	else if($_SESSION["class"]==9)
		$class = "classnine";
	else if($_SESSION["class"]==10)
		$class = "classten";
	
	$sql = "select * from ".$class;
	//echo $sql;
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){?>
	
		<select name = "subject" id="subject" onclick="getSelectedData(<?php echo $_SESSION["class"]; ?>,<?php echo $_SESSION["id"]; ?>)">
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
	<?php } ?> </select>
	
	<?php
	}else
	{
		echo "You Have No Subject!";
	}


	mysqli_close($conn);
	?>