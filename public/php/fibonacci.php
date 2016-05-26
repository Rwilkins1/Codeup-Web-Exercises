<?php
$even = [2];
$fibonacci = [1, 2, 3];
$highestnumber = 3;
$sum = 0;
while($highestnumber < 4000000) {
	$fibcount = count($fibonacci) -1;
	$highestnumber = $fibonacci[$fibcount] + $fibonacci[$fibcount-1];
	array_push($fibonacci, $highestnumber);
	if($highestnumber % 2 == 0) {
		array_push($even, $highestnumber);
		echo $highestnumber . " is an even number" . PHP_EOL;
	}
}
foreach($even as $num) {
	$sum = $sum + $num;
}
echo "Sum of even numbers is " . $sum . PHP_EOL;
// echo $fibonacci[count($fibonacci)-1] + $fibonacci[count($fibonacci)-2];
?>