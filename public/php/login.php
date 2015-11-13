<?php
$name = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Hello, <?= $name ?></h2>
	<h3>Your password is <?= $password?></h3>
	<form method = "POST" action = "login.php">
		<p>
		<label for "username">Username</label>
		<input type = "text" id = "username" name = "username">
		</p>
		<p>
		<label for "password">Password</label>
		<input type = "text" id = "password" name = "password">
		</p>
		<button type = "submit" value = "submit">Submit</button>
	</form>
</body>
</html>