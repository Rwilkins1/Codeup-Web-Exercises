<?php
function pagecontroller() {
	$count = isset($_GET['val']) ? $_GET['val'] : 0;
	return array(
		'count' => $count,
	);
}
extract(pagecontroller());
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Counter</title>
	<link rel="stylesheet" type="text/css" href="counter.css">
</head>
<body>
	<h2>Counter:<div id = "counter"><?= $count ?></div></h2>
	<a id = "up" href = "counter.php?val=<?=($count+1)?>">Up</a>
	<a id = "down" href = "counter.php?val=<?=($count-1)?>">Down</a>
	<a id = "home" href="counter.php">Home</a>
</body>
</html>