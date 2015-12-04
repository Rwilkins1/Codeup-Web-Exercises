<?php

require_once 'rectangle.php';

class Square extends Rectangle  
{
	public function __construct($height)
	{
		$this->height = $height;
		$this->width = $height;
		parent::__construct($this->height, $this->width);
	}

	public function area()
	{
		return ($this->height) * ($this->height);
	}
	public function perimeter()
	{
		return 4 * $this->height;
	}
}
?>