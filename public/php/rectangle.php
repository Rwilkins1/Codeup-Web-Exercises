<?php
class Rectangle 
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->setheight($height);
		$this->setwidth($width);
	}

	protected function setheight($height)
	{
		$this->height = $height;
	}

	protected function setwidth($width) 
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