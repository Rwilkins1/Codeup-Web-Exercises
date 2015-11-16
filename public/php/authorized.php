<?php
session_start();
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
<h1>You are authorized to enter</h1>
<a href="login.php">Back to login</a>
<a href="logout.php">Log Out</a>
</body>
</html>