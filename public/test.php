<?php
	var_dump($_GET);
	var_dump($_POST);
?>

	<form method="POST" action="test.php">
		<label for="fname">First Name</label>
		<input type="name" name="fname" id="fname" placeholder="Enter Your Name">

		<label for "transmission">What is your Transmission Type?</label>
		<select id="transmission" name="transmission[]" multiple>
			<option disabled selected>Select a Transmission</option>
			<option value="man">Manual</option>
			<option value="auto">Automatic</option>
		</select>
		<p>
			<input type="Submit">
		</p>
	</form>



