
<?php
	if(!isset($_SESSION)){
		session_start();
	}

function newUser(){
	include_once 'dbh.php';
	$newUsername = mysqli_real_escape_string($conn,$_POST['nuid']);
	$newPassword = mysqli_real_escape_string($conn,$_POST['npwd']);
	$isAdmin = mysqli_real_escape_string($conn,$_POST['nadm']);
	$remove = mysqli_real_escape_string($conn,$_POST['ruid']);
	$insert = "INSERT INTO professional(username, password, form_of_profession) VALUES('$newUsername','$newPassword','$isAdmin')";
	$delete = "DELETE FROM professional WHERE username ='$remove'";
	if($isAdmin == 1){
		$formOfProf=null;
		
	}
	if(!empty($newUsername)&& !empty($newPassword)&&$isAdmin!="unselected"){
		if(mysqli_query($conn,$insert)==true){
			include 'addform.php';
		echo 'new record created successfully ';
		echo $newUsername ." " . $newPassword ." ". $isAdmin;}
		
	}else if(!empty($remove)&&empty($newUsername)&& empty($newPassword)){
		mysqli_query($conn,$delete);
		include 'addform.php';
		echo 'user deleted <br>';

		
	}else{
		//echo 'error' . $sql . '<br>' . $conn->error;
		echo 'unable to run';
	}
}
newUser();
?>