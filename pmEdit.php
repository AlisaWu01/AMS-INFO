<?php
	if(!isset($_SESSION)){
		session_start();
	}
	include_once 'linkDb.php';
	
	
//check if logged in as policy maker and button on edit this law clicked
	if(isset($_SESSION['u_pol'])&&!isset($_POST['commit'])){
	include'laws.php';
		if(isset($_POST['opium'])){
		
			echo'<div class="container"><article id="main-col">';
			accessDb("SELECT * from law WHERE law like '%opium%'",'law');
			insertEdit('opiumT');
			accessDb("SELECT * from law WHERE law like '%prosti%'",'law');
			echo'</article></div>';
		}
		
	
		if(isset($_POST['prosti'])){
		
			echo'<div class="container"><article id="main-col">';
			accessDb("SELECT * from law WHERE law like '%opium%'",'law');
			echo'<br><br>';
			accessDb("SELECT * from law WHERE law like '%prosti%'",'law');
			insertEdit('prostiT');
			echo'</article></div>';
		}
	}
if(isset($_SESSION['u_doc'])&&!isset($_POST['commit'])){
		include_once'narcotics.php';
		if(isset($_POST['Marijuana'])){
		
			echo'<div class="container"><article id="main-col">';
			accessDb("SELECT * from narcotic WHERE DrugName ='Marijuana'",'DrugName');
			insertEdit('marijuanaT');
			
			accessDb("SELECT * from narcotic WHERE DrugName ='hash'",'DrugName');
			echo'</article></div>';
		}
	
	
	
	if(isset($_POST['hash'])){
		
			echo'<div class="container"><article id="main-col">';
			accessDb("SELECT * from narcotic WHERE DrugName ='Marijuana'",'DrugName');
			echo'<br><br>';
			accessDb("SELECT * from narcotic WHERE DrugName ='hash'",'DrugName');
			insertEdit('hashT');
			echo'</article></div>';
		}
	
	
	
	
}
	
	
function insertEdit($name){
	
	echo'<form action="pmCommit.php" method=POST>
				<button type="submit" name="commit">Done Editing</button>
				
				<textarea class="myText" name="'.$name.'"></textarea></form>';
		
}

	?>
