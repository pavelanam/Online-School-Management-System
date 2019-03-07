<?php include "include/Header1.php"; ?>
<?php include "database/conn.php"; ?>
<?php
	if(strlen($_REQUEST["Name"])==0)
	{
		echo "First name can't be empty!"."<br/>";
	}
	else
	{
		if(strlen($_REQUEST["Email"])==0)
		{
			echo "Email can't be empty!"."<br/>";
		}
		else
		{
			$a=strpos($_REQUEST["Email"],"@");
			if($a==0)
			{
				echo "Email is not valid!"."<br/>";
			}
			else
			{
				$b=strrpos($_REQUEST["Email"],".");
				if($a>$b)
				{
					echo "Email is not valid!"."<br/>";
				} 
				else
				{
								
					if(strlen($_REQUEST["Password"])==0)
					{
						echo "Password can't be empty!"."<br/>";
					}			
					else
					{
						if(strlen($_REQUEST["Password"])!=6)
						{
							echo "Password must contains 6 char!"."<br/>";	
						}
						else
						{
							if(strlen($_REQUEST["re_Password"])==0)
							{
								echo "Confirm password can't be empty!"."<br/>";
							}
							else
							{
								$a=strcmp($_REQUEST["Password"],$_REQUEST["re_Password"]);
								if($a!=0)
								{
									echo "Password & Confirm password did not match!"."<br/>";
								}
								else
								{ 
									if(isset($_POST['submit']))
									{
										$filename = $_FILES['myfile']['name'];
										$fileUploadPath = "image/".$filename;
										if (file_exists($fileUploadPath)) 
										{
											$fileUploadPath = "image/".$filename."_1";
											$filename = $filename."_1";
										}
										if(move_uploaded_file($_FILES['myfile']['tmp_name'], $fileUploadPath))
										{
											//echo "Upload Success";
										}
										else
										{
											echo "Upload error";
										}
									}
									if ($_POST["Name"]!="" || $_POST["Password"]!="" || $_POST["Email"]!="" || $_POST["fname"]!="" || $_POST["mname"]!="" || $_POST["address"]!="" ||  $_POST["radiobutton"]!="" || $_POST["date"]!="" || $_POST["myfile"]!="")
									{
										$name=$_POST["Name"];
										$password=$_POST["Password"];
										$email=$_POST["Email"];
										$father_name =$_POST["fname"];
										$mother_name=$_POST["mname"];
										$address=$_POST["address"];
								    	$gender=$_POST["radiobutton"];
										$dob=$_POST["date"];
		
										$sql1 = "insert into alldata values('','".$password."','".$email."','p', 't')";
	    
										if(mysqli_query($conn, $sql1))
										{
											$sql = "select * from alldata where email='".$email."'";
											$result = mysqli_query($conn, $sql);
											if(mysqli_num_rows($result)==1)
											{
												while($row=mysqli_fetch_assoc($result))
												{
													$id=$row['id'];
													$sql = "insert into teacher values('".$id."','".$name."','".$password."','".$email."','".$father_name."','".$mother_name."','".$address."','".$gender."','".$dob."','".$filename."','p')";
													if(mysqli_query($conn, $sql))
														echo "Registration Successfull, Your Id Is :".$id;
													else
														"<br/> SQL Error".mysqli_error($conn);					
												}
											}
											else
											{
												echo "<br/> SQL1 Error".mysqli_error($conn);
											}

											mysqli_close($conn);
										}
									}
									else
										echo "<b class=error> Please Selects All Field <b>";
								}	
							}
						}					
					}	  
				}		
			}	  				
		}	
	}
?>