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
	<title>Pong</title>
</head>
<body>
	<h2><div id = "score"><?=$count?></div></h2>
	<a href="ping.php?val=<?=$count+1?>">Hit</a>
	<a href="pong.php?val=<?=0?>">Miss</a>
</body>
</html>