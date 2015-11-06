<?php

$a = 5;
$b = 10;

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
    } else {
    	return "Warning: Invalid Characters";
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
	} else {
		return "Warning: Invalid Characters";
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
		return "Warning: Invalid Characters";
	}
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if($a == 0 || $b == 0) {
			return "WHAT ARE YOU TRYING TO DO?!";
		} else {
    		return $a / $b;
    	}
    } else {
    	return "Warning: Invalid Characters";
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return "Warning: Invalid Characters";
	}
}

echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply("Hello!", 4) . PHP_EOL;
echo divide($a, 0) . PHP_EOL;
echo modulus(2, 2) . PHP_EOL;
?>