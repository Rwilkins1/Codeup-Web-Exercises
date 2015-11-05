<?php
for ($i = 1; $i <= 100; $i++) {
	if ($i % 2 !== 0) {
		continue;
	}
	echo $i . PHP_EOL;
}
echo PHP_EOL;
for ($j = 1; $j <= 100; $j++) {
	echo $j.PHP_EOL;
	if ($j >= 10) {
		break;
	}
}
?>