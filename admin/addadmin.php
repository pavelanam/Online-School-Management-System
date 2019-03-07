<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>

<?php
	include "../database/conn.php";
	if(isset($_POST['submit']))
	{
		if($_POST['name']=="" || $_POST['email']=="" || $_POST['password']=="" || $_POST['confirmPassword']=="")
			echo "Any Field Cannot Be Empty!";
		else
		{
			if($_POST['password']==$_POST['confirmPassword'])
			{
				$sql = "select * from admin where email='".$_POST['email']."'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)==0){
					$sql1 = "insert into alldata values ('','".$_POST['password']."','".$_POST['email']."','a','a')";
		
					if(mysqli_query($conn, $sql1)){
						$sql2 = "select * from alldata where email='".$_POST['email']."'";
	
						$result2 = mysqli_query($conn, $sql2);
						if(mysqli_num_rows($result2)==1){
		
							while($row=mysqli_fetch_assoc($result2)){
								$id=$row['id'];
								$sql3 = "insert into admin values('".$id."','".$_POST['name']."','".$_POST['password']."','".$_POST['email']."','a')";
								if(mysqli_query($conn, $sql3))
									echo "Admin Add Successfull And Id Is :".$id;
								else
									"<br/> SQL Error".mysqli_error($conn);
							}
						}
					}
					else
						echo "Insert into Alldata Failed!";
				}
				else
					echo "Email Already Exist!";
			}
			else
				echo "Password and Confirm Password Does Not Match!";
			
			
		}
		
	}

?>

<fieldset>
    <legend><b>Add Admin</b></legend>
	<form action="#" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
	</form>
</fieldset>




