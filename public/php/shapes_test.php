<?php
	require_once 'rectangle.php';
	require_once 'square.php';
	$rectangle1 = new Rectangle(3, 5);
	echo $rectangle1->area() . PHP_EOL;
	$rectangle2 = new Rectangle(10,150);
	echo $rectangle2->area() . PHP_EOL;

	$square1 = new Square(5, 5);
	echo $square1->area() . PHP_EOL;
	echo $square1->perimeter() . PHP_EOL;

	$square2 = new Square(10, 10);
	echo $square2->area() . PHP_EOL;
	echo $square2->perimeter() . PHP_EOL;
?>