<?php
function parser($filename)
{
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
	$individual_dimensions = explode("\n", $content);
	$totalfeet = 0;
	$totalslack = 0;
	foreach($individual_dimensions as $dimensions) {
		$lwh = explode("x", $dimensions);
		sort($lwh);
		$firstdimension = $lwh[0] * $lwh[1];
		$seconddimension = $lwh[1] * $lwh[2];
		$thirddimension = $lwh[2] * $lwh[0];
		if($firstdimension < $seconddimension && $firstdimension < $thirddimension) {
			$shortestside = $firstdimension;
		} else if ($seconddimension < $firstdimension && $seconddimension < $thirddimension) {
			$shortestside = $seconddimension;
		} else if ($thirddimension < $firstdimension && $thirddimension < $seconddimension) {
			$shortestside = $thirddimension;
		}
		
		$addedfeet = (2 * $firstdimension) + (2 * $seconddimension) + (2 * $thirddimension);
		$totalfeet += $addedfeet;
		$totalslack += $shortestside;
		echo $totalfeet . PHP_EOL;
		echo $totalslack . PHP_EOL;
	}
	echo ($totalfeet + $totalslack) . PHP_EOL;
}
parser('advent2.txt');
?>