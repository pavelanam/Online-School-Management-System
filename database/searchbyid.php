<?php include "conn.php"; ?>
<?php
	if(!isset($_GET['id']))
		$id=19;
	else
		$id=$_GET['id']:
	$sql = "select * from student where id=".$id."";
	$result = mysqli_query($conn, $sql);
	
if(mysqli_num_rows($result)>0){?>

<div id="modifybyid">
<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="5" align="CENTER">User Info</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Status</td><td>Type</td><td>Action</td>
		</tr>
	<?php while($row=mysqli_fetch_assoc($result)){?>
		
		<tr>
		<td><?php echo $row['id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['status'];?></td><td>Student</td>
		<td>
		<?php
			if($row['status']=="p")
			{
				echo "<input type='button' name='' value='ApproveById' onclick='doapprovebyid(".$row['id'].",1)'/><input type='button' name='' value='RejectedById' onclick='dorejectbyid(".$row['id'].",1)'/>";
			}
			else if($row['status']=="a")
			{
				echo "<input type='button' name='' value='PendingById' onclick='dopendingbyid(".$row['id'].",1)'/><input type='button' name='' value='RejectedById' onclick='dorejectbyid(".$row['id'].",1)'/>";
			}
			else if($row['status']=="r")
			{
				echo "<input type='button' name='' value='PendingById' onclick='dopendingbyid(".$row['id'].",1)'/><input type='button' name='' value='ApproveById' onclick='doapprovebyid(".$row['id'].",1)'/>";
			}
		
		
		?></td>
		</tr>
<?php
}
?>
	</table>			
</center>
</div>
<?php
}else{
	
	$sql = "select * from teacher where id=".$id;
	$result = mysqli_query($conn, $sql);
	
if(mysqli_num_rows($result)>0){?>

<div id="modifybyid">
<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="5" align="CENTER">User Info</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Status</td><td>Type</td><td>Action</td>
		</tr>
	<?php while($row=mysqli_fetch_assoc($result)){?>
		
		<tr>
		<td><?php echo $row['id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['status'];?></td><td>Teacher</td>
		<td>
		<?php
			if($row['status']=="p")
			{
				echo "<input type='button' name='' value='ApproveById' onclick='doapprovebyid(".$row['id'].",2)'/><input type='button' name='' value='RejectedById' onclick='dorejectbyid(".$row['id'].",2)'/>";
			}
			else if($row['status']=="a")
			{
				echo "<input type='button' name='' value='PendingById' onclick='dopendingbyid(".$row['id'].",2)'/><input type='button' name='' value='RejectedById' onclick='dorejectbyid(".$row['id'].",2)'/>";
			}
			else if($row['status']=="r")
			{
				echo "<input type='button' name='' value='PendingById' onclick='dopendingbyid(".$row['id'].",2)'/><input type='button' name='' value='ApproveById' onclick='doapprovebyid(".$row['id'].",2)'/>";
			}
		
		
		?></td>
		</tr>
<?php
}
?>
	</table>			
</center>
</div>
<?php
}else
	echo "<center><b>No Result Found!</b></center>";
}
mysqli_close($conn);
?>

<script>

	function doapprovebyid(i,j){
		var x=i;
		var t=j;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/approvebyid.php?id="+x+"&type="+t, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("modifybyid").innerHTML = this.responseText;
			    }
			};
	}
	
	function dopendingbyid(i,j){
		var x=i;
		var t=j;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/pendingbyid.php?id="+x+"&type="+t, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("modifybyid").innerHTML = this.responseText;
			    }
			};
	}
	
	function dorejectbyid(i,j){
		var x=i;
		var t=j;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/rejectbyid.php?id="+x+"&type="+t, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("modifybyid").innerHTML = this.responseText;
			    }
			};
	}
	
	function searching(){
		var h = document.getElementById("idvalue").value;
		
		var xhttp = new XMLHttpRequest();
		
		xhttp.open("GET", "../database/searchbyid.php?id="+h, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("modifybyid").innerHTML = this.responseText;
			    }
			};
	}
	
</script>


