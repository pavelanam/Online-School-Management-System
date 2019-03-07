<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>
<?php
	if(isset($_POST['submit']))
	{
	$class = $_POST['combo'];
	$subject = $_POST['sname'];
	
	if($subject=="")
	{
		echo "Subject cant be empty!";
	}
	else
	{
		if($class==1)
			$sql = "insert into classone values('','".$subject."','')";
		else if($class==2)
			$sql = "insert into classtwo values('','".$subject."','')";
		else if($class==3)
			$sql = "insert into classthree values('','".$subject."','')";
		else if($class==4)
			$sql = "insert into classfour values('','".$subject."','')";
		else if($class==5)
			$sql = "insert into classfive values('','".$subject."','')";
		else if($class==6)
			$sql = "insert into classsix values('','".$subject."','')";
		else if($class==7)
			$sql = "insert into classseven values('','".$subject."','')";
		else if($class==8)
			$sql = "insert into classeight values('','".$subject."','')";
		else if($class==9)
			$sql = "insert into classnine values('','".$subject."','')";
		else if($class==10)
			$sql = "insert into classten values('','".$subject."','')";
	
		if(mysqli_query($conn, $sql)){
			echo "<br/> Subject Add Successfull!";
		}else{
			echo "<br/> SQL Error".mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	}


?>



<fieldset>
    <legend><b>Add New Subject</b></legend>
	<form action="#" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Class</td>
				<td>:</td>
				<td>
					<select name = "combo">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Subject Name</td>
				<td>:</td>
				<td><input name="sname" type="text"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
	</form>
</fieldset>
