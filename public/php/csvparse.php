<?php
function parser($filename) {
	$handle = fopen($filename, 'r');
	$main = fseek($handle, 520, SEEK_SET);
	$content = trim(fread($handle, filesize($filename)));
	$rawdataarray = explode("\n", $content);
	$totalunits = 0;
	foreach ($rawdataarray as $innerdata) {
		$innerdataarray = explode(",", $innerdata);
		$totalunits += $innerdataarray[3];
	}


	fclose($handle);
	$totalemployees = "Total number of employees: " . (count($rawdataarray)+1) . PHP_EOL;
	$unitssold = "Total number of units sold: " . $totalunits . PHP_EOL;	
	$averageunits = "Average number of units sold per employee: " . ($totalunits/(count($rawdataarray)+1)) .PHP_EOL;
	return $totalemployees . $unitssold . $averageunits;
}

echo parser('report.txt');
?>