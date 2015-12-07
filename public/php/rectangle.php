<?php
class Rectangle 
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function setheight($height)
	{
		$this->height = $height;
	}
	public function setwidth($width) 
	{
		$this->width = $width;
	}
	public function area() 
	{
		return $this->height * $this->width;
	}

	public function perimeter()
	{
		return 2 * ($this->height + $this->width);
	}
}
?>