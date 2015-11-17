<?php
session_start();
require 'functions.php';

$sessionid = session_id();
$name = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
if(!empty($_SESSION['Loggedinuser'])) {
	header('location: authorized.php');
	die();
}
if (($name == "guest" || $name == "Guest") && ($password == "password" || $password == "Password")) {
	header('location: authorized.php');
	$_SESSION['Loggedinuser'] = $name;
	die();
} else {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		header('location: failed.php');
		die();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	Session ID = <?= $sessionid ?>
	<br>
	Key is available: <?= inputhas('Loggedinuser') . PHP_EOL ?>
	<?= inputget('Loggedinuser') . PHP_EOL ?>

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