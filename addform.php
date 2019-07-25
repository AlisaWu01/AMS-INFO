<?php

	if(!isset($_SESSION)){
		session_start();
	}
	include 'login1.php';
	?>
<!DOCTYPE html>
<html>
	
		<form action="addu.php" method=POST>
			<div class="addform" >
			<input type="text" name="nuid" placeholder="Username">
			<input type="password" name="npwd" placeholder="Password">
			
			<select name="nadm">
				<!--<option value="unselected">Select</option>-->
				<option value="Admin">System Admin</option>
				<option value="Doctor">Doctor</option>
				<option value="Policy maker">Policy Maker</option>
			</select>

			<!-- name submit checks if button been clicked-->
			<button type="submit" name="submit">Add User</button>
		<br><br>
		 
			<input type="text" name="ruid" placeholder="Username">
			<!-- name submit checks if button been clicked-->
			<button type="submit" name="submit">Delete User</button>
			</div>
		</form>
		<?php
		include_once'footer.php';
		?>

</html>