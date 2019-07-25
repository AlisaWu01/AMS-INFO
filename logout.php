<?php
	if(isset($_POST['submit'])){
		session_start();
		//logs us out
		session_unset();
		session_destroy();
		header("Location:login1.php");
		exit();
		
	}
?>