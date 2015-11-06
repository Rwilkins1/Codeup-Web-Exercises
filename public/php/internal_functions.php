<?php

function inspect($argument) 
{
	if (is_numeric($argument) || (is_string($argument))) {
		if (is_numeric($argument) || !empty($argument)) {
			return "The " . gettype($argument) . " is $argument\n";
		} else if (is_string($argument) && empty($argument)) {
			return "The " . gettype($argument) . " is empty\n";
		}
	} else if (is_array($argument)) {
		if (!empty($argument)) {
			return "The value is an array with contents: [$argument[0], $argument[1], $argument[2]]\n";
		} else {
			return "The value is an empty array\n";
		}
	} else {
		if (is_null($argument)) {
			return "The value is NULL\n";
		} else if (is_bool($argument)) {
			return "The boolean value is " . (boolval($argument) ? 'true' : 'false') . "\n";
		} else {
			return "The value is somethine else\n";
		}
	}
}

$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1);

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2);

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3);

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4);

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null);

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1);

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2);

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1);

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2);

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1);

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2);
?>