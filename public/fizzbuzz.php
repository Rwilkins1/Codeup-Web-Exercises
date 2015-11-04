<?php
$number = 1;

while ($number <= 100) {
	if ($number % 15 == 0) {
		echo "Fizzbuzz\n";
	} else if ($number % 3 == 0) {
		echo "Fizz\n";
	} else if ($number % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo $number . "\n";
	}
	$number++;
}
?>