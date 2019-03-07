<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/student_sidebar.php"; ?>
<fieldset>
    <legend><b>NOTES</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td align="right">Subject</td>
				<td>:</td>
				<td>
					<?php include "../database/subforresult.php"; ?>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
		</table>
	</form>
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr><td colspan="4" align="center" id="sbname"><h3></h3></td></tr>
		<tr>
			<td></td>
			<td id="result">
			</td>
			<td></td>
			<td></td>
		</tr>		
		<tr><td colspan="4"><hr/></td></tr>
		<tr><td colspan="4" align="center" id="result1"><h3></h3></td></tr>
	</table>
</fieldset>


<script>
		
		function getSelectedData(i,j){
		
		var x=i;
		var w=j;
		var sub = document.getElementById('subject').value;
		document.getElementById("sbname").innerHTML = sub;
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/notebysubclass.php?sub="+sub+"&class="+x, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("result").innerHTML = this.responseText;

			    }
			};
		}

	</script>