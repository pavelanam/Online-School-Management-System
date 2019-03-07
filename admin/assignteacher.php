<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>
<?php include "../database/conn.php"; ?>
<?php
	//error_reporting(0);
	if(isset($_POST['submit']))
	{
		$class = $_POST['combo'];
		$subject = $_POST['scombo'];
		$teacher = $_POST['tcombo'];
	
		if($subject=="" || $teacher=="")
		{
			echo "Select Subject Or Teacher First!";
		}
	else
	{
		if($class==1)
			$sql = "UPDATE classone SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==2)
			$sql = "UPDATE classtwo SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==3)
			$sql = "UPDATE classthree SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==4)
			$sql = "UPDATE classfour SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==5)
			$sql = "UPDATE classfive SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==6)
			$sql = "UPDATE classsix SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==7)
			$sql = "UPDATE classseven SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==8)
			$sql = "UPDATE classeight SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==9)
			$sql = "UPDATE classnine SET teachername='".$teacher."' where subject='".$subject."'";
		else if($class==10)
			$sql = "UPDATE classten SET teachername='".$teacher."' where subject='".$subject."'";
	
		if(mysqli_query($conn, $sql)){
			echo "<br/> Teacher assign Successfull!";
		}else{
			echo "<br/> SQL Error".mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	}


?>



<fieldset>
    <legend><b>Assign Teacher To Subject</b></legend>
	<form action="#" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Class</td>
				<td>:</td>
				<td>
					<select name = "combo">
					<option value="1" onclick="updatesubject('classone')" >1</option>
					<option value="2" onclick="updatesubject('classtwo')" >2</option>
					<option value="3" onclick="updatesubject('classthree')" >3</option>
					<option value="4" onclick="updatesubject('classfour')" >4</option>
					<option value="5" onclick="updatesubject('classfive')" >5</option>
					<option value="6" onclick="updatesubject('classsix')" >6</option>
					<option value="7" onclick="updatesubject('classseven')" >7</option>
					<option value="8" onclick="updatesubject('classeight')" >8</option>
					<option value="9" onclick="updatesubject('classnine')" >9</option>
					<option value="10" onclick="updatesubject('classten')" >10</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Subject Name</td>
				<td>:</td>
				<td id="subject"><?php include "../database/subjectbyclass.php"; ?></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Teacher Name</td>
				<td>:</td>
				<td><?php include "../database/allteachername.php"; ?></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
	</form>
</fieldset>


<script>
	
	function updatesubject(i)
	{
		var x=i;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/subjectbyclass.php?class="+x, true);
		xhttp.send();

		xhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) 
			{
			    document.getElementById("subject").innerHTML = this.responseText;
			}
		};		
	}

</script>