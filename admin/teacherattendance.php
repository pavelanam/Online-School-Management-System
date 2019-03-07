<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>
<?php
	if(isset($_POST['submit']))
	{
		$date = $_POST['date'];
		$teacher = $_POST['tcombo'];
	}
?>		
<script>
	function checkdate()
	{
		var date = document.getElementById("date").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200) 
			{
			    document.getElementById("pera").innerHTML=this.responseText;				
			}
		};	
		xhttp.open("GET", "../database/checkinsertupdateteacherattendance.php?date="+date, true);
		xhttp.send();			
	}
	
	function insertupdatepa(i,j,k)
	{
		var id = i;
		var present = j;
		var name = k;
		var date = document.getElementById("date").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) 
			{
			    document.getElementById(id).innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "../database/insertupdateteacherattendance.php?date="+date+"&id="+id+"&name="+name+"&present="+present, true);
		xhttp.send();
	}
</script>

<fieldset>
    <legend><b>Teacher attendance</b></legend>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Date</td>
				<td>:</td>
				<td> 
					<input type="date" name="date" id="date" onblur="checkdate()"/>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Teachers</td>
				<td>:</td>
				<td>
					<div id="pera">Select Date First!</div>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
		</table>
</fieldset>




		
			
			
			
