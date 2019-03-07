<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>	
<?php 
	//error_reporting(0);
if ($_POST["class"]!="" || $_POST["scombo"]!="" || $_POST["N_subject"]!="" || $_POST["N_message"]!="" )
{        

if(!isset($_POST['class']))
		$class = "9";
	else
	{
		if($_POST['class']=="classone")
			$class = "1";
		else if($_POST['class']=="classtwo")
			$class = "2";
		else if($_POST['class']=="classthree")
			$class = "3";
		else if($_POST['class']=="classfour")
			$class = "4";
		else if($_POST['class']=="classfive")
			$class = "5";
		else if($_POST['class']=="classsix")
			$class = "6";
		else if($_POST['class']=="classseven")
			$class = "7";
		else if($_POST['class']=="classeight")
			$class = "8";
		else if($_POST['class']=="classnine")
			$class = "9";
		else if($_POST['class']=="classten")
			$class = "10";
	}
	


		
		$subject=$_POST["scombo"];
		$reason=$_POST["N_subject"];
		$notice=$_POST["N_message"];
		
		$sql = "insert into studentnotice values('','".$class."','".$subject."','".$reason."','".$notice."')";
	  //echo "$sql ";
	 if(mysqli_query($conn, $sql)){
			echo "<br/> Notice Sent!";
		}else{
			echo "<br/> SQL Error".mysqli_error($conn);
		}

		mysqli_close($conn);
	 
	}
		else
		
		echo "<b> Please Selects All Field <b>";
		
	
	
    ?>





