<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td> <?php echo $_SESSION["name"]; ?></td>
				<td rowspan="7" align="center">
					<img width="128" src="../file/<?php echo $_SESSION["image"]; ?>"/>
                    <br/>
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $_SESSION["email"]; ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Father's Name</td>
				<td>:</td>
				<td><?php echo $_SESSION["fathername"]; ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Mother's Name</td>
				<td>:</td>
				<td><?php echo $_SESSION["mothername"]; ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><?php echo $_SESSION["address"]; ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td> <?php echo $_SESSION["gender"];?> </td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?php echo $_SESSION["dob"]; ?></td>
			</tr>
		</table>	
        <hr/>
        <a href="edit_profile.php">Edit Profile</a>	
	</form>
</fieldset>