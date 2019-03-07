<?php
	if($_SESSION["type"]!="t")
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
		<b>&nbsp;Teacher Panel</b><hr/>
        <ul>
            <li><a href="Teacher_panel.php">Dashboard</a></li>
            <li><a href="Teacher_sr.php" >Subjects & Results</a></li>
            <li><a href="upload_note.php" >Upload Note</a></li>
			<li><a href="send_notice.php" >Send Notice</a></li>
            <li><a href="notification.php" >Notification</a></li>
        </ul> 
        <b>&nbsp;Personal</b><hr/>
        <ul>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="edit_profile.php">Edit Profile</a></li>
            <li><a href="change_password.php">Change Password</a></li>
        </ul>  
    </td>
    <td valign="top">