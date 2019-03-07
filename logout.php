<?php

	session_start();
	session_destroy();
	setcookie("id", "", time() - (86400 * 30), "/");
	setcookie("type", "", time() - (86400 * 30), "/");
	header("Location:login.php");

?>