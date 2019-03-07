<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>

<?php
	include "../database/conn.php";
	if(isset($_POST['submit']))
	{
		if($_POST['name']=="")
			echo "Field Cannot Be Empty!";
		else
		{
			$sql1 = "insert into dashboard values ('','".$_POST['name']."')";
			if(mysqli_query($conn, $sql1))
				echo "Notice Upload Successful! ";
			else
				echo "Notice Upload Failed! ";
		}		
	}
?>

<fieldset>
    <legend><b>Upload Notice</b></legend>
		<form action="#" method="POST">
			<br/>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Write Notice :</td>
					<td>:</td>
					<td><textarea name="name" type="text" rows="4" cols="50"> </textarea></td>
					<td></td>
				</tr>					
			</table>
			<hr/>
			<input type="submit" name="submit" value="Submit">
	    </form>
</fieldset>




