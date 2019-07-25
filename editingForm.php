<?php
function editingForm($name){
	
	echo '	<form action="pmEdit.php" method=POST>
				<button type="submit" name="'.$name.'">Edit this text</button>
			</form><br><br>';
		
}

?>