<?php
$sum = 0;
$i = 1;
while($i <= 1000) {
	if ($i == 1000) {
		echo $sum . PHP_EOL;
		return $i;
	} else if ($i%3 == 0) {
		$sum += $i;
		$i++;
	} else if ($i%5 == 0) {
		$sum += $i;
		$i++;
	} else {
		$i++;
	}
}
?>