<?php

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
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

echo add(2, 3) . PHP_EOL;
echo subtract(5, 3) . PHP_EOL;
echo multiply(2, 3) . PHP_EOL;
echo divide(6, 3) . PHP_EOL;
?>