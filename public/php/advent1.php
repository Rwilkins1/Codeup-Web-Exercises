<?php
function parser($filename)
{
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
	$parentharray = str_split($content);
	$floor = 0;
	// $position = 0;

	foreach ($parentharray as $position => $parenthesis) {
		// var_dump ($parentharray);
		if ($floor == -1) {
			echo $floor . PHP_EOL;
			echo $position . PHP_EOL;
			return $position;
		} else {
			if ($parenthesis == "(") {
				$floor += 1;
			} else if ($parenthesis == ")") {
				$floor -= 1;
			}
		}
	}

	echo $floor;
}

parser('advent1.txt');
?>