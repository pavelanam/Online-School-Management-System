<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>


	<?php

	error_reporting(0);
	
	
	$filename = $_FILES['myfile']['name'];
	
	$fileUploadPath = "../file/".$filename;
	

	if (file_exists($fileUploadPath)) {
		$fileUploadPath = "../file/".$filename."_1";
		$filename = $filename."_1";
	}
	
	if(move_uploaded_file($_FILES['myfile']['tmp_name'], $fileUploadPath)){
		//echo "Upload Success";
	}else{
		echo "Upload error";
	}
	

	
?>





<?php 
//error_reporting(0);
if ($_POST["class"]=!"" || $_POST["scombo"]!="" ||  $_POST["myfile"]=!"" )	
{		
	$subject=$_POST["scombo"];
	if(!isset($_POST['class3'])){
		$class = "9"; }
	else
	{
		if($_POST['class3']=="classone")
			$class = "1";
		else if($_POST['class3']=="classtwo")
			$class = "2";
		else if($_POST['class3']=="classthree")
			$class = "3";
		else if($_POST['class3']=="classfour")
			$class = "4";
		else if($_POST['class3']=="classfive")
			$class = "5";
		else if($_POST['class3']=="classsix")
			$class = "6";
		else if($_POST['class3']=="classseven")
			$class = "7";
		else if($_POST['class3']=="classeight")
			$class = "8";
		else if($_POST['class3']=="classnine")
			$class = "9";
		else if($_POST['class3']=="classten")
			$class = "10";
	}
		$sql = "insert into studentnote values('','".$class."','".$subject."','".$filename."')";
		//echo  "$sql";
     
	 if(mysqli_query($conn, $sql)){
			echo "<br/> Notes Uploaded!";
		}else{
			echo "<br/> SQL Error".mysqli_error($conn);
		}

		mysqli_close($conn);
	 
	}
		else
		
		echo "<b> Please Select All Field <b>";
		
	
	
    ?>
	
	
	
	
	
