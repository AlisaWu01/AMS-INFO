<?php

	if(!isset($_SESSION)){
		session_start();
	}
	include'dbh.php';
	//include_once 'laws.php';
	
function updateInfo($name,$where){
	
	$attribute = $_POST[$name];
	//$spec='%opium%';
	if(isset($_SESSION['u_pol'])){
		$update = "UPDATE law SET sanction = '$attribute' WHERE law like '$where'";
		include_once 'laws.php';
		if(mysqli_query($conn,$update)==true){
		
		echo 'record changed';
	}
	}
	if(isset($_SESSION['u_doc'])){
		$update = "UPDATE narcotic SET effect = '$attribute' WHERE drugname like '$where'";
		
		include_once 'narcotics.php';
		if(mysqli_query($conn,$update)==true){
		echo'adios druggy';
		
		}
	}
	
	
}
function setUpdate($postVar,$where){
	//updateInfo($spec);
	if(isset($_POST[$postVar])){
		updateInfo($postVar,$where);
	}else{
	$_POST[$postVar]=null;
	}
}



setUpdate('opiumT','%opium%');
setUpdate('prostiT','%prosti%');
setUpdate('hashT','Hash');
setUpdate('marijuanaT','Marijuana');
//setUpdate($_SESSION['PROSTI'],'%prosti%');

/*
updateInfo('opiumT','%opium%');
updateInfo('prostiT','%opium%');*/

?>
	