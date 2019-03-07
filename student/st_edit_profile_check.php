<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>

<?php

	//error_reporting(0);
	
	if(isset($_POST['submit'])){
	$filename = $_FILES['myfile']['name'];
	
	$fileUploadPath = "image/".$filename;
	

	if (file_exists($fileUploadPath)) {
		$fileUploadPath = "image/".$filename."_1";
		$filename = $filename."_1";
	}
	
	if(move_uploaded_file($_FILES['myfile']['tmp_name'], $fileUploadPath)){
		//echo "Upload Success";
	}else{
		echo "Upload error";
	}
	
	}
	
?>

<?php
if(isset($_POST["submit"]))
{
if ($_POST["Name"]!=""  &&  $_POST["Email"]!="" &&   $_POST["fname"]!="" &&  $_POST["mname"]!="" &&   $_POST["address"]!="" &&   $_POST["gender"]!="" &&  $_POST["date"]!="" &&  $_POST["myfile"]!="")

		$name = $_POST["Name"];
		$email = $_POST["Email"];
		$fathername =$_POST["fname"];
		$mothername=$_POST["mname"];
			$address=$_POST["gender"];
			$gender=$_POST["gender"];
			  $dob  =$_POST["date"];
		
$sql ="UPDATE student SET name='".$_POST["Name"]."', email='".$_POST["Email"]."', fathername='".$_POST["fname"]."', mothername='".$_POST["mname"]."', address='".$_POST["address"]."', gender='".$_POST["gender"]."', image='".$_POST["image"]."',  dob='".$_POST["date"]."'  where id='".$_SESSION["id"]."'";
$sql1 ="UPDATE alldata SET  email='".$_POST["Email"]."' where id='".$_SESSION["id"]."'";		

	   echo $sql;
	   
	   	if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)){
			
			header("Location:profile.php");
		}else{
			echo "<br/> SQL Error".mysqli_error($conn);
		}

		mysqli_close($conn);
		
	
}else 
		echo "<b> Please Selects All Field <b>";

?>