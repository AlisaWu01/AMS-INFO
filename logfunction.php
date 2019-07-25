<?php

	if(!isset($_SESSION)){
		session_start();
	}

//include_once 'header.php';
include 'login1.php';

//checks if submit button is clicked
if(isset($_POST['submit'])||isset($_POST['admin'])){
	include_once 'dbh.php';
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
}

	if(empty($uid) || empty($pwd)){
		//header("Location: ../login.php?login=empty");
		//exit function after
		echo'please fill in both fields';
		
		exit();
	}else{
		//check if username exists in db
		//selects any username in db 
		$sql = "SELECT*FROM professional WHERE username='$uid'";
		$result = mysqli_query($conn,$sql);
		//nr of rows w/ above parameteres
		$resultCheck = mysqli_num_rows($result);
		//printf($resultCheck);
		if($resultCheck < 1){
			echo "user nonexistent";
			exit();
		}else{
			$row = mysqli_fetch_assoc($result);
			if(isset($_POST['submit'])){
				if($uid===$row['Username']&&$pwd===$row['password']){
					//if($row['form_of_profession']!="Admin"){
						$_SESSION['u_uid'] = $row['Username'];
						$_SESSION['u_pwd'] = $row['password'];
						
						header("Location:login1.php");
					//}
					echo "you are logged in!!!";
					//printf($_SESSION['u_uid'] . $_SESSION['u_pwd']);
				}if($uid===$row['Username']&&$pwd===$row['password']&&$row['form_of_profession']=="Admin"){
					//$_SESSION['u_uid'] = $row['username'];
					//$_SESSION['u_pwd'] = $row['password'];
					$_SESSION['u_adm'] = $row['form_of_profession'];
					//include'test.php';
					header("Location:addform.php");
					//echo "Access denied!";
				}if($uid===$row['Username']&&$pwd===$row['password']&&$row['form_of_profession']=="Doctor"){
					$_SESSION['u_doc'] = $row['form_of_profession'];
					
				}if($uid===$row['Username']&&$pwd===$row['password']&&$row['form_of_profession']=="Policy maker"){
					$_SESSION['u_pol'] = $row['form_of_profession'];
					
				}else{
					//echo "login unsuccessful :(";
				}
			}
		}
	}
	
?>