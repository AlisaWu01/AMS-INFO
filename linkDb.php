<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
function accessDb($sql,$attribute1){
	include 'dbh.php';
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);
	if(mysqli_query($conn,$sql)==true){
              echo '<li>' . $row[$attribute1] ;

}
}


?>