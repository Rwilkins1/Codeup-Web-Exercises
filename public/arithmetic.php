<?php

$a = 5;
$b = 10;

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
    } else {
    	return error($a, $b);
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
	} else {
		return error($a, $b);
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
		return error($a, $b);
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
    	return error($a, $b);
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return error($a, $b);
	}
}

function error($a, $b)
{
	return "Warning: Invalid Characters.\nFirst Argument is a(n) " . gettype($a) . " & Second Argument is a(n) " . gettype($b) . ".\nBoth arguments must be numeric";
}
echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply("Hello", true) . PHP_EOL;
echo divide($a, 0) . PHP_EOL;
echo modulus(2, 2) . PHP_EOL;
?>