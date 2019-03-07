<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="Kazi Akhtarul Anam"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="pavelanam@gmail.com">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Father's Name</td>
				<td>:</td>
				<td><input name="fName" type="text" value="Kazi Abdul Halim"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Mother's Name</td>
				<td>:</td>
				<td><input name="mName" type="text" value="Parvin Halim"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><input name="address" type="text" value="Dhaka"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input name="file" type="file"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio" checked="checked">Male
					<input name="gender" type="radio">Female
					<input name="gender" type="radio">Other
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date of Birth</td>
				<td valign="top">:</td>
				<td>
					<input name="dob" type="text" value="22/07/1995">
					<br/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">		
	</form>
</fieldset>
