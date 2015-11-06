<?php

$a = 5;
$b = 10;

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
    } else {
    	return "Warning: Invalid Characters\n";
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
	} else {
		return "Warning: Invalid Characters\n";
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		$i = 0;
	    for ($c = 0; $c < $b; $c++) {
	    	$i = $i + add($a, $a);
	    }
	    return $i;
	} else {
		return "Warning: Invalid Characters\n";
	}
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a / $b;
    } else {
    	return "Warning: Invalid Characters\n";
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return "Warning: Invalid Characters\n";
	}
}

echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply(3, 4) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus("Hello!", 2) . PHP_EOL;
?>