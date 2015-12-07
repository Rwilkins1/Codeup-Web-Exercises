<?php

require_once 'rectangle.php';

class Square extends Rectangle  
{
	public function __construct($height)
	{
		parent::__construct($height, $height);
	}
	public function setheight($height)
	{
		$this->height = $height;
	}
	// public function area()
	// {
	// 	return ($height) * ($height);
	// }
	// public function perimeter()
	// {
	// 	return 4 * $height;
	// }
}
?>