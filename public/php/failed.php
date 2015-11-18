<?php
require '../../Auth.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Error</title>
</head>
<body>
<?= Auth::check(Input::get('Loggedinuser')) ?>
<br>
<a href="login.php">Back to login</a>
</body>
</html>