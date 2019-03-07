<?php include "include/header.php"; ?>
<?php include "database/conn.php"; ?>
<?php
	session_start();
	error_reporting(0);
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
	
	
	
	if(isset($_POST["submit"]))
	{
		if($_POST["email"]=="")
			echo "Email cant be empty!";
		else
		{
			$sql = "select * from alldata where email='".$_POST['email']."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)==1)
			{		
				while($row=mysqli_fetch_assoc($result))
				{
					$id = $row['id'];
					$password = $row['password'];
					$to = $_POST["email"];
					$subject = "Your UserId And Password";
					$txt = "Recently You Have Requested For UserId and Password, Here It Is - UserId : ".$id." Password : ".$password;
	
					$headers = "MIME-Verson: 1.0" . "\r\n";
					$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers = "From: pavelanam@gmail.com" . "\r\n";
	
					if(mail($to,$subject,$txt,$headers))
						echo "Your UserId and Password Successfully Sent To ".$to;
					else
						echo "Send Fail";
				}
			}
			else
			{
				echo "No Such Registered Email Address Found!";
			}
		mysqli_close($conn);			
		}
	}
?>

<fieldset>
    <legend><b>Forgot Password</b></legend>
    <form action="#" method="POST">
        <table>
            <tr>
                <td>Email</td>
				<td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
</fieldset>