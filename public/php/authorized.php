<?php
session_start();
require 'functions.php';
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
Session ID = <?= $sessionid ?>
<br>
Input = <?= escape('Loggedinuser') ?>
<h1>You are authorized to enter. Welcome, <?= $_SESSION['Loggedinuser']?>!</h1>
<a href="logout.php">Log Out</a>
</body>
</html>