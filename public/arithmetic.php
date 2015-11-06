<?php

$a = 5;
$b = 10;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
	$i = 0;
    for ($c = 0; $c < $b; $c++) {
    	$i = $i + add($a, $a);
    }
    return $i;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo add($a, $b) . PHP_EOL;
echo subtract($a, $b) . PHP_EOL;
echo multiply(3, 4) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus(6, 2) . PHP_EOL;
?>