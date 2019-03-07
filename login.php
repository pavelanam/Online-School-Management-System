<?php include "include/header.php"; ?>
<?php include "database/conn.php"; ?>
<?php
	session_start();
	if(isset($_COOKIE['id']) && isset($_COOKIE['type']))
	{
		if($_COOKIE["type"]=="a")
			header("Location:admin/Admin_panel.php");
		else if($_COOKIE["type"]=="t")
			header("Location:teacher/Teacher_panel.php");
		else if($_COOKIE["type"]=="s")
			header("Location:student/Student_panel.php");
	}
	else
	{
		if(isset($_SESSION['id']) && isset($_SESSION['type']))
		{
			if($_SESSION["type"]=="a")
				header("Location:admin/Admin_panel.php");
			else if($_SESSION["type"]=="t")
				header("Location:teacher/Teacher_panel.php");
			else if($_SESSION["type"]=="s")
				header("Location:student/Student_panel.php");
		}
	}
	
	
	
	
	
	error_reporting(0);
	if(isset($_POST["submit"]))
	{
		$remeber=$_POST["remember"];
		if($_POST["id"]=="" || $_POST["pass"]=="")
			echo "ID or Password can't be empty!";
		else
		{
			$sql = "select * from alldata where id='".$_POST["id"]."' and password='".$_POST["pass"]."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)==1)
			{		
				while($row=mysqli_fetch_assoc($result))
				{					
					if($row['status']=="a")
					{
						$_SESSION["id"]=$row['id'];
						$_SESSION["type"]=$row['type'];
						if($remember=="on")
						{
							setcookie("id", $_SESSION["id"], time() + (86400 * 30), "/");
							setcookie("type", $_SESSION["type"], time() + (86400 * 30), "/");
						}
						if($_SESSION["type"]=="a")
							header("Location:admin/Admin_panel.php");
						else if($_SESSION["type"]=="t")
							header("Location:teacher/Teacher_panel.php");
						else if($_SESSION["type"]=="s")
							header("Location:student/Student_panel.php");
					}
					else if($row['status']=="p")
						echo "Your Account Is Pending! Contact Administrator For More Details!";
					else if($row['status']=="r")
						echo "Your Account Is Rejected! Contact Administrator For More Details!";
				}
			}
			else
			{
				echo "username or password error!";
			}

		mysqli_close($conn);
			
		}
	}


?>

<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="#" method="POST">
        <table>
            <tr>
                <td>ID</td>
				<td>:</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/>
		<a href="forgotpassword.php">Forgot password?</a>
		<br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</fieldset>
