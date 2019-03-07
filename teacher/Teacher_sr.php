<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/complete-user-registration-form-validation.css"/>
	</head>
</html>	
<fieldset>
    <legend><b>SUBJECTS & RESULTS</b></legend>
	<form action="Teacher_sr _check.php" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Class</td>
				<td>:</td>
				<td>
					<select name = "class" id="class" onclick="showsubjectcombo('<?php echo $_SESSION["name"]; ?>')">
					<option value="classone" >1</option>
					<option value="classtwo" >2</option>
					<option value="classthree" >3</option>
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
				<td>Student Id</td>
				<td>:</td>
				<td>
				<div id="sstdid"></div>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>First Term Mark</td>
				<td>:</td>
				<td> <input id="Mark1" name="f_term" type="number" min="0" max="100" onkeyup="computerMark()"</td>
				<td>Total Mark:100 Passing Mark:33</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Second Term Mark</td>
				<td>:</td>
				<td><input id="Mark2" name="s_term"  type="number" min="0" max="100" onkeyup="computerMark()"</td>
				<td>Total Mark:100 Passing Mark:33</td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Final Term Mark</td>
				<td>:</td>
				<td><input id="Mark3" name="t_term" type="number" min="0" max="100" onkeyup="computerMark()"</td>
				<td>Total Mark:100 Passing Mark:33</td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" value="Save">		
	</form>
</fieldset>



<script>

function showsubjectcombo(i){
		var clas = document.getElementById('class').value;
		var tname = i;
		
		var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/allsubjectbyclass.php?class="+clas+"&tname="+tname, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById('subject').innerHTML = this.responseText;

			    }
			};
		
		var xhttp1 = new XMLHttpRequest();
	  
		xhttp1.open("GET", "../database/idbyclass.php?class="+clas, true);
		xhttp1.send();

			xhttp1.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById('sstdid').innerHTML = this.responseText;

			    }
			};
}
function showstid(){
	var clas = document.getElementById('class').value;
		
		
}	

	</script>