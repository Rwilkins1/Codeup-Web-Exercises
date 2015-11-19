<?php
session_start();
require_once '../../Input.php';
require_once '../../Auth.php';

$name = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
Auth::attempt($name, $password);
if(!empty($_SESSION['Loggedinuser'])) {
	header('location: authorized.php');
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method = "POST" action = "login.php">
		<p>
		<label for "username">Username</label>
		<input type = "text" id = "username" name = "username">
		</p>
		<p>
		<label for "password">Password</label>
		<input type = "password" id = "password" name = "password">
		</p>
		<button type = "submit" value = "submit">Submit</button>
	</form>
</body>
</html>