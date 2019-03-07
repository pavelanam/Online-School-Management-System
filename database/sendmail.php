
<?php
	$id = $_GET['id'];
	$password = $_GET['password'];
	$to = $_GET['to'];
	$subject = "Your UserId And Password";
	$txt = "Recently You Request For UserId and Password, Here It Is - UserId : ".$id." Password : ".$password;
	
	$headers = "MIME-Verson: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers = "From: nazmul.biral@gmail.com" . "\r\n";
	
	if(mail($to,$subject,$txt,$headers))
		echo "Your UserId and Password Successfully Sent To ".$to;
	else
		echo "Send Fail";
	
?>