<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>



<?php
if(isset($_POST["submit"]))
{
if ($_POST["Name"]!=""  &&  $_POST["Email"]!="" &&   $_POST["fname"]!="" &&  $_POST["mname"]!="" &&   $_POST["address"]!="" &&   $_POST["gender"]!="" &&  $_POST["date"]!="" &&  $_POST["image"]!="")

		$name = $_POST["Name"];
		$email = $_POST["Email"];
		$fathername =$_POST["fname"];
		$mothername=$_POST["mname"];
			$address=$_POST["gender"];
			$gender=$_POST["gender"];
			 $image=$_POST["image"];
			  $dob  =$_POST["date"];
		
$sql ="UPDATE teacher SET name='".$_POST["Name"]."', email='".$_POST["Email"]."', fathername='".$_POST["fname"]."', mothername='".$_POST["mname"]."', address='".$_POST["address"]."', gender='".$_POST["gender"]."', image='".$_POST["image"]."',  dob='".$_POST["date"]."'  where id='".$_SESSION["id"]."'";
$sql1 ="UPDATE alldata SET  email='".$_POST["Email"]."' where id='".$_SESSION["id"]."'";		

	   echo $sql;
	   
	   	if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)){
			
			header("Location:profile.php");
		}else{
			echo "<br/> SQL Error".mysqli_error($conn);
		}

		mysqli_close($conn);
		
	
}else 
		echo "<b> Please Select All Fields <b>";

?>