<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>
<?php
	
	if(isset($_POST['submit']))
	{
		$message = $_POST['message'];
		$subject = $_POST['subject'];
		$teacherid = $_POST['tcombo'];
		
		if($subject=="" || $message=="" || $teacherid=="")
		{
			echo "Subject, Message Or Teacher cant be empty!";
		}
		else
		{
			$sql = "insert into teachernotice values('','".$teacherid."','".$subject."','".$message."')";
			if(mysqli_query($conn, $sql))
			{
				echo "<br/> Notice Send Successfull!";
			}
			else
			{
				echo "<br/> SQL Error".mysqli_error($conn);
			}
			mysqli_close($conn);
		}
	}
?>

<fieldset>
    <legend><b>Send Notice To Teacher</b></legend>
	<form action="#" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Teacher</td>
				<td>:</td>
				<td>
					<?php include "../database/allteachernameidcombo.php"; ?>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Subject</td>
				<td>:</td>
				<td><input name="subject" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Message</td>
				<td>:</td>
				<td> <textarea name="message"></textarea></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Send">
	</form>
</fieldset>
