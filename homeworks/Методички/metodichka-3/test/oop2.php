<?php

class Point
{
	protected int | float $x;
	protected int | float $y;
	
	function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	function Show(): void
	{
		echo 'Vertex: (' . $this->x . ', ' . $this->y . ')<br/>';
	}
}

class Rectangle extends Point
{
	protected int | float $width;
	protected int | float $height;
	
	function __construct($x, $y, $w, $h)
	{
		parent::__construct($x, $y);
		$this->width = $w;
		$this->height = $h;
	}
	function Show(): void
	{
		parent::Show();
		echo 'Width:' . $this->width. 'Height:' . $this->height . '<br/>';
	}
}
$r = new Rectangle(100, 100, 200, 150);
$r->Show();
$p = new Point(100, 200);
echo "<pre>";
print_r($r);
echo "<pre/>";