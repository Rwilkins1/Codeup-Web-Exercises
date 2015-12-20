<?php
function parser($filename)
{
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
	$parentharray = str_split($content);
	$floor = 0;

	foreach ($parentharray as $parenthesis) {
		if ($parenthesis == "(") {
			$floor += 1;
		} else if ($parenthesis == ")") {
			$floor -= 1;
		}
	}

	echo $floor;
}

parser('advent1.txt');
?>