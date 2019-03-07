<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/complete-user-registration-form-validation.css"/>
	</head>
	<script>
	function Submit1(){
	document.getElementById("Registerform").reset();}
		function Submit(){
		var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
		var nameRegex = /^[A-Z a-z]*$/;
		var mobileRegex = /^[0-9]*$/;
		var fname = document.Registerform.Name.value,
		Email = document.Registerform.Email.value,
        father_name = document.Registerform.fname.value,
			mother_name = document.Registerform.mname.value,
			address = document.Registerform.address.value,
		gender = document.Registerform.gender.value;			
			image = document.Registerform.image.value;
			 date= document.Registerform.date.value;
			if( fname == "" )
	   {
		 document.Registerform.Name.focus() ;
		 document.getElementById("errorBox").innerHTML = "enter the full name";
		 return false;
	   } 
	   
	   else if(!nameRegex.test(fname)){
			document.Registerform.Name.focus();
			document.getElementById("errorBox").innerHTML = "Enter only alfabets";
			return false;
		 }
			if(Email == "")
		 {
			 document.Registerform.Email.focus();
			 document.getElementById("errorBox").innerHTML = "enter the Email";
			 return false;
		 }else if(!emailRegex.test(Email)){
			document.Registerform.Email.focus();
			document.getElementById("errorBox").innerHTML = "enter the valid Email";
			return false;
		 }
		 
			
		 	if( father_name == "" )
	   {
		 document.Registerform.fname.focus() ;
		 document.getElementById("errorBox").innerHTML = "enter the full name";
		 return false;
	   } 
	   
	   else if(!nameRegex.test(father_name)){
			document.Registerform.fname.focus();
			document.getElementById("errorBox").innerHTML = "Enter only alfabets";
			return false;
		 }	
		 	if( mother_name == "" )
	   {
		 document.Registerform.mname.focus() ;
		 document.getElementById("errorBox").innerHTML = "enter the full name";
		 return false;
	   } 
	   
	   else if(!nameRegex.test(mother_name)){
			document.Registerform.mname.focus();
			document.getElementById("errorBox").innerHTML = "Enter only alfabets";
			return false;
		 }
       
       
		 
		 	if( address == "" )
	   {
		 document.Registerform.address.focus() ;
		 document.getElementById("errorBox").innerHTML = "enter the full address";
		 return false;
	   } 
	   
	   else if(!nameRegex.test(address)){
			document.Registerform.address.focus();
			document.getElementById("errorBox").innerHTML = "Enter only alfabets";
			return false;
		 }   
		 
	   
	    if (image == "") {
			document.Registerform.image.focus();
			document.getElementById("errorBox").innerHTML = "select your image";
			return false;
		 }
		  
		if(document.Registerform.gender[0].checked == false && document.Registerform.gender[1].checked == false){
			document.Registerform.gender.value;
					document.getElementById("errorBox").innerHTML = "select your gender";
				 return false;
				}
		
		 if (date == "") {
			document.Registerform.date.focus();
			document.getElementById("errorBox").innerHTML = "select your Date of Birth";
			return false;
		 }
		 
	 
			if(fname != '' &&  father_name != '' && mother_name != ''  && Email != '' && address != ''  && image != '' && gender != '' && date != ''){
				alert( "Are you Sure to Update Profile? ");
				}
			  
	}
	</script>	
	
	
	
	

	
<fieldset>
 <legend> <h1 class="form_title">Edit Profile</h1></legend> 
  <div id="container">
	  <div id="container_body">
	 <form name="Registerform" action="edit_profile_chek_tr.php" method="POST" >
		<div id="errorBox"></div>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td> <div id="comman"><input type="text" name="Name" value="<?php echo $_SESSION["name"]; ?>" placeholder="Full Name"  class="input_text">   </div>      
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					 <div id="comman">
					<input type="text" name="Email" value="<?php echo $_SESSION["email"]; ?>"  placeholder="Example@gmail.com" class="input_text">
					</div>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Father's Name</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="fname" value="<?php echo $_SESSION["fathername"]; ?>" placeholder="Full Name"  class="input_text">        
		  </div></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Mother's Name</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="mname" value="<?php echo $_SESSION["mothername"]; ?>" placeholder="Full Name"  class="input_text">        
		  </div></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Present Address</td>
				<td>:</td>
				<td> <div id="comman">
			<input type="text" name="address" value="<?php echo $_SESSION["address"]; ?>"  placeholder="Only Characters Value" class="input_text">
		  </div></td>
				<td></td>
			</tr>		
					
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input name="image" type="file"></td>
				<td></td>
			</tr>	
		<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
					<legend>Gender</legend> 
					<div id="radio_button">
		         <input name="gender" type="radio" value="male" <?php if($_SESSION["gender"]=="male") echo "checked"; ?>>Male
					<input name="gender" type="radio" value="female" <?php if($_SESSION["gender"]=="female") echo "checked"; ?>>Female
					<input name="gender" type="radio" value="other" <?php if($_SESSION["gender"]=="other") echo "checked"; ?>>Other
			  			
			
		  </div>
		 	</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			</fieldset>
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>
					<input name="date" type="text" value="<?php echo $_SESSION["dob"]; ?>">
					<br/>
					<font size="2"><i>(yyyy/mm/dd)</i></font>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
	<div>
			<input type="submit" name="submit" value="Reset" id="reSet" onClick="return Submit1();">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Update Profile" id="sign_user1" onClick="return Submit();">
		  </div>
		  <br>		
	</form>
		</div>
	  </div>
</fieldset>