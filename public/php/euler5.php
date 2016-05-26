<?php
$j = 100000;
for($i = 2; $i < $argv[1];) {
	if($j % $i == 0) {
		$i++;
	} else {
		$j = $j + 2;
		$i = 2;
	}
}
echo "The smallest number is " . $j . PHP_EOL;
?>