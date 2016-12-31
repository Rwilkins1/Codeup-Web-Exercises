<?php

$array = [2, 4, 1, 3];

$array = array_reverse($array);

foreach($array as $item => $number) {
	if($item != 3) {
		array_splice($array, ($item + ($item + 1)), 0, ":");
	}
}
$array = implode($array);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?= $array ?>
</body>
</html>