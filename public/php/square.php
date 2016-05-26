<?php

require_once 'rectangle.php';

class Square extends Rectangle  
{
	public function __construct($height)
	{
		parent::__construct($height, $height);
	}
	// protected function setheight($height)
	// {
	// 	parent::setheight($height);
	// }
	// public function getheight($height)
	// {
	// 	return $this->height;
	// }
	// public function area()
	// {
	// 	return ($this->height) * ($this->height);
	// }
	// public function perimeter()
	// {
	// 	return 4 * $this->getheight();
	// }
}
?>