<?php
session_start();
require '../../Input.php';
require_once '../../Auth.php';
$sessionid = session_id();
if (empty($_SESSION['Loggedinuser'])) {
	header('location: login.php');
	die();
} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
Logged in: <?= Auth::check(Input::get('Loggedinuser')) ?>
<br>
<h1>You are authorized to enter. Welcome, <?= Auth::user(Input::get('Loggedinuser'))?>!</h1>
<a href="logout.php">Log Out</a>
</body>
</html>