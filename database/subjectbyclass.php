<?php include "conn.php"; ?>
<?php
	if(!isset($_GET['class']))
		$class = "classone";
	else
		$class = $_GET['class'];
	
	if(isset($_SESSION["adminId"])){
		$sql = "select * from ".$class."";
	}
	else{
		session_start();
	$sql = "select * from ".$class." where teachername='".$_SESSION["name"]."'";

	}
	//echo "<pre>";print_r($GLOBALS);echo "</pre>";
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
		echo "Currently No Assigned Subject!";
	}


	mysqli_close($conn);
	?>