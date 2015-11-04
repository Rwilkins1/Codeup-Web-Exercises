<?php
$increment = 1;
$start = 1;
$end = 100;

do {
	fwrite(STDOUT, "Enter a Starting Number: ");
	$start = trim(fgets(STDIN));
	if (empty($start)) {
		$start = 1;
	} else if (!is_numeric($start)) {
		echo "Please enter a valid number\n";
	}
} while (!is_numeric($start));

do {
	fwrite(STDOUT, "Enter an Ending Number: ");
	$end = trim(fgets(STDIN));
	if (empty($end)) {
		$end = 100;
	} else if(!is_numeric($end)) {
		echo "Please enter a valid number\n";
	}
} while (!is_numeric($end));

do {
	fwrite(STDOUT, "Enter an Increment: ");
	$increment = trim(fgets(STDIN));
	if (empty($increment)) {
		$increment = 1;
	} else if (!is_numeric($increment)) {
		echo "Please enter a valid number\n";
	}
} while (!is_numeric($increment));


for ($number = $start; $number <= $end; $number += $increment) {
	if ($number == 0) {
		echo $number . "\n";
	} else if ($number % 15 == 0) {
		echo "Fizzbuzz\n";
	} else if ($number % 3 == 0) {
		echo "Fizz\n";
	} else if ($number % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo $number . "\n";
	}
}
?>