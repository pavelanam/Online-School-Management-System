<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/admin_sidebar.php"; ?>

<fieldset>
    <legend><b>Generate Student Report</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td align="right">Generate By</td>
				<td>:</td>
				<td>
					<select name="glist" onchange="getSelectedData(this.value)">
						<option value="1" >Highest Result In First Term</option>
						<option value="2" >Highest Result In Second Term</option>
						<option value="3" >Highest Result In Final Term</option>
					</select>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
		</table>
	</form>
	<center><div id="generatedreport">Select Generate By First!</div></center>
</fieldset>


<script>
		window.onload=getSelectedData(1);
		
		function getSelectedData(i)
		{		
			var x=i;
			var xhttp = new XMLHttpRequest();
	  
			xhttp.open("GET", "../database/generatestudentreport.php?id="+x, true);
			xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) 
				{
			     document.getElementById("generatedreport").innerHTML = this.responseText;
			    }
			};
		}
</script>


