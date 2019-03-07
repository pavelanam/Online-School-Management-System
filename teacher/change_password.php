<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>




<?php
	if(isset($_POST["submit"]))
	{
		if($_POST["cpass"]=="" || $_POST["npass"]=="" || $_POST["rpass"]=="")
			echo "Field cant be empty!";
		else
		{
			if($_POST["cpass"]==$_SESSION["password"])
			{
				if($_POST["npass"]==$_POST["rpass"])
				{
					$sql = "UPDATE teacher SET password='".$_POST["npass"]."' where id='".$_SESSION["id"]."'";
					$sql1 = "UPDATE alldata SET password='".$_POST["npass"]."' where id='".$_SESSION["id"]."'";
	
					if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1))
					{
						echo "Password Change successfull!";
					}
				}
				else
					echo "New password and Retype password does not match!";
			}
			else
				echo "Current password is not correct!";
		}
	}





?>





<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form action="#" method="POST">
        <table>
            <tr>
                <td><font size="3">Current Password</font></td>
				<td>:</td>
                <td><input type="password" name="cpass" /></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
				<td>:</td>
                <td><input type="password" name="npass" /></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
				<td>:</td>
                <td><input type="password" name="rpass" /></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit"  name="submit" value="Submit" />
    </form>
</fieldset>