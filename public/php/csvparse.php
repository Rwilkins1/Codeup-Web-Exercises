<?php
function parser($filename) {
	$handle = fopen($filename, 'r');
	$main = fseek($handle, 520, SEEK_SET);
	$content = trim(fread($handle, filesize($filename)));
	$rawdataarray = explode("\n", $content);
	$totalunits = 0;
	$units = "Units   |   ";
	$fullname = "Full Name   |   ";
	$employeenumber = "Employee Number";
	$report = "";
	
	foreach ($rawdataarray as $innerdata) {
		$innerdataarray = explode(",", $innerdata);
		$totalunits += $innerdataarray[3];
		arsort($innerdataarray);
		$report .= $innerdataarray[3] . "       " . $innerdataarray[1] . $innerdataarray[2] . "       " . $innerdataarray[0] . PHP_EOL;
	}
	$reporthead = $units . $fullname . $employeenumber . PHP_EOL;

	fclose($handle);
	$totalemployees = "Total number of employees: " . (count($rawdataarray)+1) . PHP_EOL;
	$unitssold = "Total number of units sold: " . $totalunits . PHP_EOL;	
	$averageunits = "Average number of units sold per employee: " . ($totalunits/(count($rawdataarray)+1)) .PHP_EOL;
	return $totalemployees . $unitssold . $averageunits . $reporthead . $report;
}

echo parser('report.txt');
?>