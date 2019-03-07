<?php include "../include/headerL.php"; ?>
<?php include "../sidebar/teacher_sidebar.php"; ?>
 <?php include "../database/conn.php"; ?>
 
<fieldset>
    <legend><b>Gurdian's Contact Information </b></legend>
	<form>
		<br/>
	
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				
				<td> Class: &nbsp
					<select name = "class"  id="class"  >
					<option value="1" onclick="showsubjectcombo(1)" >1</option>
					<option value="2" onclick="showsubjectcombo(2)">2</option>
					<option value="3" onclick="showsubjectcombo(3)">3</option>
					<option value="4" onclick="showsubjectcombo(4)">4</option>
					<option value="5" onclick="showsubjectcombo(5)">5</option>
					<option value="6" onclick="showsubjectcombo(6)">6</option>
					<option value="7" onclick="showsubjectcombo(7)">7</option>
					<option value="8" onclick="showsubjectcombo(8)">8</option>
					<option value="9" onclick="showsubjectcombo(9)">9</option>
					<option value="10" onclick="showsubjectcombo(10)">10</option>
					</select>
				</td>
				</tr>
				
				<tr>
				
				<td> Name:<div id="subject"></div>
									
				</td>
				</tr>		
				<tr>
				
				<td> Gurdian Number:<div id="gnum"></div>
									
				</td>
				</tr>
		
		</table>
		</form>
</fieldset>








<script>

function showsubjectcombo(i){
	 var x=i;
		
	var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/stnamebyclass.php?class="+x, true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById('subject').innerHTML = this.responseText;

			    }
			};
}

function getgnum(i,j){
	 var x=i;
	 var y=j;
	window.alert(x);
	var xhttp = new XMLHttpRequest();
	  
		xhttp.open("GET", "../database/gnumbyclassid.php?id=71&class=9", true);
		xhttp.send();

			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     document.getElementById('gnum').innerHTML = this.responseText;

			    }
			};
}

	
	
	</script>
	
















