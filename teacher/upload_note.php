<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<html>
<body>
<fieldset>
    <legend><b>UPLOAD NOTE</b></legend>
	<form action="upload_note_check.php" method="POST" enctype="multipart/form-data" >
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Class</td>
				<td>:</td>
				<td>
					<select name="class3" id="class3" onclick="showsubjectcombo()" >
					<option value="classone" >1</option>
					<option value="classtwo" >2</option>
					<option value="classthree"  >3</option>
					<option value="classfour" >4</option>
					<option value="classfive" >5</option>
					<option value="classsix" >6</option>
					<option value="classseven" >7</option>
					<option value="classeight" >8</option>
					<option value="classnine" >9</option>
					<option value="classten" >10</option>
					</select>
				</td>
				
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
				<tr>
				<td>Subjects</td>
				<td>:</td>
				<td>
				
				<div id="subject"></div> 
				</td>
				<td></td>
			</tr>		
				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>File</td>
				<td>:</td>
				<td><input type="file" name="myfile"/><br/></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" value="Upload">		
	</form>
</fieldset>




<script> 
window.onload=showsubjectcombo();

function showsubjectcombo(){
		var clas = document.getElementById('class3').value;
		
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/subjectbyclass.php?class= "+clas, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById('subject').innerHTML = this.responseText;

			    }
			};
		}

	</script>
	</body>
</html>