<?php include "../database/conn.php"; ?>
<?php
	session_start();	
	if(isset($_COOKIE['id']) && isset($_COOKIE['type']))
	{
		$_SESSION['id']=$_COOKIE['id'];
		$_SESSION['type']=$_COOKIE['type'];
	}	
	if(isset($_SESSION['id']) && isset($_SESSION['type']))
	{
		$qid = $_SESSION['id'];
		if($_SESSION['type']=="s")
		{
			$sql = "select * from student where id='".$qid."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{				
					$_SESSION["name"]=$row['name'];
					$_SESSION["password"]=$row['password'];
					$_SESSION["class"]=$row['class'];
					$_SESSION["email"]=$row['email'];
					$_SESSION["fathername"]=$row['fathername'];
					$_SESSION["mothername"]=$row['mothername'];
					$_SESSION["address"]=$row['address'];
					$_SESSION["gender"]=$row['gender'];
					$_SESSION["dob"]=$row['dob'];
					$_SESSION["image"]=$row['image'];
					$_SESSION["status"]=$row['status'];					
				}	
			}
			else
				header("Location:../login.php");
		}		
		else if($_SESSION['type']=="t")
		{
			$sql = "select * from teacher where id='".$qid."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{				
					$_SESSION["name"]=$row['name'];
					$_SESSION["password"]=$row['password'];
					$_SESSION["email"]=$row['email'];
					$_SESSION["fathername"]=$row['fathername'];
					$_SESSION["mothername"]=$row['mothername'];
					$_SESSION["address"]=$row['address'];
					$_SESSION["gender"]=$row['gender'];
					$_SESSION["dob"]=$row['dob'];
					$_SESSION["image"]=$row['image'];
					$_SESSION["status"]=$row['status'];	
				}	
			}
			else
				header("Location:../login.php");
		}		
		else if($_SESSION['type']=="a")
		{
			$sql = "select * from admin where id='".$qid."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$_SESSION["adminId"]=$row['id'];
					$_SESSION["name"]=$row['name'];
					$_SESSION["password"]=$row['password'];
					$_SESSION["email"]=$row['email'];
					$_SESSION["status"]=$row['status'];	
				}	
			}
			else
				header("Location:../login.php");
		}
		mysqli_close($conn);
	}
	else
		header("Location:../login.php");
?>


<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<table width="80%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">  
			<table width="100%">
                <tr>
                    <td>
                        <a href="../Home.php">
                            <img height="55" src="../image/home.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as&nbsp;<i class="fa fa-user-o"></i>&nbsp;<a href="<?php if($_SESSION["type"]=="a") {echo "Admin_panel.php";} else {  } ?>" ><?php echo $_SESSION["name"]; ?></a>&nbsp;|
                        <a href="../logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                    </td>
                </tr>
			</table>
        </td>
    </tr>
    <tr>