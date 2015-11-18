<?php
	$count = isset($_GET['val']) ? $_GET['val'] : 0;
	require_once '../../Input.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
	<link rel="stylesheet" type="text/css" href="pingpong.css">
</head>
<body>
	<h2>Key Available: <?=Input::has('val')?></h2>
	<h2>Total Score<div id = "score"><?=Input::get('val')?></div></h2>
	<a id = "hit" href="ping.php?val=<?=$count+1?>">Hit</a>
	<a id = "miss" href="pong.php?val=<?=0?>">Miss</a>
	<br><br><br><br><br>
	<img src="pong.png">
<script type="text/javascript">
	var audio1 = new Audio('grunt.wav');
	audio1.play();
</script>
</body>
</html>