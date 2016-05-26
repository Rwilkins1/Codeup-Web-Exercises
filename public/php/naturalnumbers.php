<?php
$sumofsquaresarray = [];
$squareofsumsarray = [];
$totalsumsquare = 0;
$totalsquaresum = 0;
for($i = 1; $i <= $argv[1]; $i++) {
	array_push($sumofsquaresarray, $i * $i);
	array_push($squareofsumsarray, $i);
}
foreach($sumofsquaresarray as $square) {
	$totalsumsquare = $totalsumsquare + $square;
}
foreach($squareofsumsarray as $sum) {
	$totalsquaresum = $totalsquaresum + $sum;
}
$totalsquaresum = $totalsquaresum * $totalsquaresum;

$answer = $totalsquaresum - $totalsumsquare;

echo $totalsumsquare . PHP_EOL;
echo $totalsquaresum . PHP_EOL;
echo $answer . PHP_EOL;


?>