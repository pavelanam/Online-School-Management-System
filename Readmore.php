<!DOCTYPE html>
<html lang="en-US">
	<head>
		<link rel="stylesheet" type="text/css" href="css/Home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>  
			a:link 
			{
				color: blue;
				background-color: transparent;
				text-decoration: none;
			}
		</style>
	</head>
	<body bgcolor="#FFFFF0">
		<div class="header">
			<img src="home.png"/>
			<h3><i>ORANGE<br>INTERNATIONAL<br>SCHOOL<br>BANGLADESH</i></h3>
			<div class="HL"style="float:right">
				<i class="fa fa-home"></i>
				<a href="Home.php" >Home&nbsp;&nbsp;</a>
				<i class="fa fa-user"></i>
				<a href="Login.php">Login</a>
			</div>
		</div>
		<div class="navbar">
			<nav class="desk">
			<ul>
				<li><a href="#">About&nbsp;<i class="fa fa-chevron-down"></i></a></li>
				<li><a href="#">Academics&nbsp;<i class="fa fa-chevron-down"></i></a></li> 
				<li><a href="#">Admision&nbsp;<i class="fa fa-chevron-down"></i></a></li>
				<li><a href="#">Administration&nbsp;<i class="fa fa-chevron-down"></i></a></li>
				<li><a href="#">Faculties&nbsp;<i class="fa fa-chevron-down"></i></a></li>
				<li><a href="#">Offices&nbsp;<i class="fa fa-chevron-down"></i></a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			</nav>
		</div>
		<div class="contentsection template clear">
			<div class="maincontent template clear">		
				<div class="samepost clear">
					<h4>Post Title Here</h4><hr/>
					<img src="notice.png" height="100" alt="Post image"/>
								
					<p>
						<?php 
							include "database/conn.php";  
							$sql = "select News from dashboard order by id desc";
							$result = mysqli_query($conn, $sql);
							$json_array=array();
				
							if(mysqli_num_rows($result)>0)
							{
								while($row=mysqli_fetch_assoc($result))
								{
									$json_array[]=$row['News'];
								}
								echo json_encode($json_array)."<br/><br/>";
							}
						?>
					</p>
					
				</div>
				
			</div>
			<div class="sidebar">
				<div class="sameSidebar clear">
					<h2>Sidebar New header</h2>
					<p>New sidebar will be here.Some text will be here.
					New sidebar will be here.Some text will be here.</p>
				</div>		
				<div class="sameSidebar clear">
				<h2>Sidebar New header</h2>
				<p>New sidebar will be here.Some text will be here.
				 New sidebar will be here.Some text will be here.</p>
				</div>			
				<div class="sameSidebar clear">
				<h2>Sidebar New header</h2>
				<p>New sidebar will be here.Some text will be here.
				 New sidebar will be here.Some text will be here.</p>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>Copyright 2018</p>	
		</div>
	</body>
</html>
