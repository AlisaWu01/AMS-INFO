<?php
//name of server running on
	$dbServername = "localhost";
//bcuz server on local host
	$dbUsername = "root";
//password empty by default
	$dbPassword = "Welkom01";
//database name
	$dbName = "db1";
//activate connection to database w/ php function
	$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
	
	if(mysqli_connect_errno()){
		echo "failed to cnonect to mysql:" . mysqli_connect_error();
		
	}/*else{
		echo "connected!";
	}*/

