<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>

  <?php

if ($_POST["class"]!="" && $_POST["scombo"]!="" && $_POST["stcombo"]!="" && $_POST["f_term"]!="" && $_POST["s_term"]!=""&& $_POST["t_term"]!="")
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
		
		$studentid=$_POST["stcombo"];
		$firstterm=$_POST["f_term"];
		$secondterm=$_POST["s_term"];
		$finalterm=$_POST["t_term"];
		
		$sql1 = "select * from result where class='".$class."' and subject='".$subject."' and studentid='".$studentid."'";
		$result = mysqli_query($conn, $sql1);
	
		if(mysqli_num_rows($result)==1){
		
			$sql2 = "UPDATE result SET firstterm='".$firstterm."', secondterm='".$secondterm."', finalterm='".$finalterm."' where class='".$class."' and subject='".$subject."' and studentid='".$studentid."'";
			//echo $sql2;
		
			if(mysqli_query($conn, $sql2))
				echo "Result Update Successfull!";
			else
				echo "Result Update Failed";
		
		}
		else
		{
			$sql = "insert into result values('','".$class."','".$subject."','".$studentid."','".$firstterm."','".$secondterm."','".$finalterm."')";
			//echo "$sql";
			if(mysqli_query($conn, $sql)){
				echo "<br/>Result Insert Successfull!";
			}else{
				echo "<br/> SQL Error".mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	 
	}
		else
		
		echo "<b> Please Selects All Field <b>";
		
	
	
    ?>




	
	

	
	


