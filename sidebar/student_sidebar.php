<?php
	if($_SESSION["type"]!="s")
		header("Location:../login.php");
?>
<head>
    <style>
		a:link 
		{
			color: green;
			background-color: transparent;
			text-decoration: none;
		}
    </style>
</head>
	<td width="190" valign="top">
		<b>&nbsp;Student Panel</b><hr/>
		<ul>
			<li><a href="Student_panel.php" >Dashboard</a></li>
			<li><a href="sr.php" >Subjects & Results</a></li>
			<li><a href="notes.php" >Notes</a></li>
			<li><a href="notice.php" >Notice</a></li>
		</ul> 
		<b>&nbsp;Personal</b><hr/>
		<ul>
			<li><a href="profile.php" >View Profile</a></li>
			<li><a href="edit_profile.php" >Edit Profile</a></li>
			<li><a href="change_password.php">Change Password</a></li>
		</ul>  
    </td>
    <td valign="top">