<?php include "conn.php"; ?>
<?php
if(!isset($view))
	$view=1;
if(isset($_GET['view']))
{
	if($_GET['view']=="1")
		$sql = "select * from teacher";
	else if($_GET['view']=="2")
		$sql = "select * from teacher where status='a'";
	else if($_GET['view']=="3")
		$sql = "select * from teacher where status='p'";
	else if($_GET['view']=="4")
		$sql = "select * from teacher where status='r'";
}
else
{
	if($view=="1")
		$sql = "select * from teacher";
	else if($view=="2")
		$sql = "select * from teacher where status='a'";
	else if($view=="3")
		$sql = "select * from teacher where status='p'";
	else if($view=="4")
		$sql = "select * from teacher where status='r'";
}
$result = mysqli_query($conn, $sql);
	
if(mysqli_num_rows($result)>0){?>
<div id="teacher">
<center>
	View : <select name = "combo">
				<option value="1" onclick='refresh(1)' <?php if(isset($_GET['view']) && $_GET['view']== "1"){ echo "selected"; }?> >All</option>
				<option value="2" onclick='refresh(2)' <?php if(isset($_GET['view']) && $_GET['view']== "2"){ echo "selected"; }?> >Approved</option>
				<option value="3" onclick='refresh(3)' <?php if(isset($_GET['view']) && $_GET['view']== "3"){ echo "selected"; }?> >Pending</option>
				<option value="4" onclick='refresh(4)' <?php if(isset($_GET['view']) && $_GET['view']== "4"){ echo "selected"; }?> >Rejected</option>
			</select><br/><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Teachers Info</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Status</td><td>Action</td>
		</tr>
	<?php while($row=mysqli_fetch_assoc($result)){?>
		
		<tr>
		<td><?php echo $row['id'];?></td><td><?php echo $row['name'];?></td><td><?php echo $row['status'];?></td>
		<td>
		<?php
			if($row['status']=="p")
			{
				echo "<input type='button' name='' value='Approve' onclick='doapprove(".$row['id'].",";
				if(isset($_GET['view']) && $_GET['view']== "1"){ echo "1"; }
				else if(isset($_GET['view']) && $_GET['view']== "2"){ echo "2"; }
				else if(isset($_GET['view']) && $_GET['view']== "3"){ echo "3"; }
				else if(isset($_GET['view']) && $_GET['view']== "4"){ echo "4"; }
				else echo "1";
				echo ")'/><input type='button' name='' value='Reject' onclick='doreject(".$row['id'].",";
				if(isset($_GET['view']) && $_GET['view']== "1"){ echo "1"; }
				else if(isset($_GET['view']) && $_GET['view']== "2"){ echo "2"; }
				else if(isset($_GET['view']) && $_GET['view']== "3"){ echo "3"; }
				else if(isset($_GET['view']) && $_GET['view']== "4"){ echo "4"; }
				else echo "1";
				echo ")'/>";
			}
			else if($row['status']=="a")
			{
				echo "<input type='button' name='' value='Pending' onclick='dopending(".$row['id'].",";
				if(isset($_GET['view']) && $_GET['view']== "1"){ echo "1"; }
				else if(isset($_GET['view']) && $_GET['view']== "2"){ echo "2"; }
				else if(isset($_GET['view']) && $_GET['view']== "3"){ echo "3"; }
				else if(isset($_GET['view']) && $_GET['view']== "4"){ echo "4"; }
				else echo "1";
				echo ")'/><input type='button' name='' value='Reject' onclick='doreject(".$row['id'].",";
				if(isset($_GET['view']) && $_GET['view']== "1"){ echo "1"; }
				else if(isset($_GET['view']) && $_GET['view']== "2"){ echo "2"; }
				else if(isset($_GET['view']) && $_GET['view']== "3"){ echo "3"; }
				else if(isset($_GET['view']) && $_GET['view']== "4"){ echo "4"; }
				else echo "1";
				echo ")'/>";
			}
			else if($row['status']=="r")
			{
				echo "<input type='button' name='' value='Approve' onclick='doapprove(".$row['id'].",";
				if(isset($_GET['view']) && $_GET['view']== "1"){ echo "1"; }
				else if(isset($_GET['view']) && $_GET['view']== "2"){ echo "2"; }
				else if(isset($_GET['view']) && $_GET['view']== "3"){ echo "3"; }
				else if(isset($_GET['view']) && $_GET['view']== "4"){ echo "4"; }
				else echo "1";
				echo ")'/><input type='button' name='' value='Pending' onclick='dopending(".$row['id'].",";
				if(isset($_GET['view']) && $_GET['view']== "1"){ echo "1"; }
				else if(isset($_GET['view']) && $_GET['view']== "2"){ echo "2"; }
				else if(isset($_GET['view']) && $_GET['view']== "3"){ echo "3"; }
				else if(isset($_GET['view']) && $_GET['view']== "4"){ echo "4"; }
				else echo "1";
				echo ")'/>";
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
}

else
{?>
	<center>View : <select name = "combo">
				<option value="1" onclick='refresh(1)' <?php if(isset($_GET['view']) && $_GET['view']== "1"){ echo "selected"; }?> >All</option>
				<option value="2" onclick='refresh(2)' <?php if(isset($_GET['view']) && $_GET['view']== "2"){ echo "selected"; }?> >Approved</option>
				<option value="3" onclick='refresh(3)' <?php if(isset($_GET['view']) && $_GET['view']== "3"){ echo "selected"; }?> >Pending</option>
				<option value="4" onclick='refresh(4)' <?php if(isset($_GET['view']) && $_GET['view']== "4"){ echo "selected"; }?> >Rejected</option>
			</select><br/><br/><b>No Result Found!</b></center>
<?php
}
mysqli_close($conn);
?>

<script>
	
	function refresh(i){
		var x=i;
		var xhttp = new XMLHttpRequest();
		
		xhttp.open("GET", "../database/Teachers_Info.php?view="+x, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("teacher").innerHTML = this.responseText;
			    }
			};
	}
	
	function doapprove(i,j){
		var x=i;
		var v=j;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/approveteacher.php?id="+x+"&view="+v, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("teacher").innerHTML = this.responseText;
			    }
			};
	}
	
	function dopending(i,j){
		var x=i;
		var v=j;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/pendingteacher.php?id="+x+"&view="+v, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("teacher").innerHTML = this.responseText;
			    }
			};
	}
	
	function doreject(i,j){
		var x=i;
		var v=j;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/rejectteacher.php?id="+x+"&view="+v, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("teacher").innerHTML = this.responseText;
			    }
			};
	}
	
</script>















