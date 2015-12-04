<?php
	require_once 'rectangle.php';
	$rectangle1 = new Rectangle(3, 5);
	echo $rectangle1->area() . PHP_EOL;
	$rectangle2 = new Rectangle(10,150);
	echo $rectangle2->area() . PHP_EOL;
?>