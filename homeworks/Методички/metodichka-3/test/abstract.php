<?php

abstract class Point
{
	protected int|float $x;
	protected int|float $y;
	
	function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	function Show(): void
	{
		echo 'Vertex: (' . $this->x . ', ' . $this->y . ')<br/>';
	}
	
 	abstract function Area();
	abstract function Perimeter();
}

class Rectangle extends Point
{
	protected int|float $width;
	protected int|float $height;
	
	function __construct($x, $y, $w, $h)
	{
		parent::__construct($x, $y);
		$this->width = $w;
		$this->height = $h;
	}
	
	function Show(): void
	{
		parent::Show();
		echo 'Width:' . $this->width . 'Height:' . $this->height . '<br/>';
	}
	
	function Area()
	{
		return $this->width * $this->height;
	}
	
	function Perimeter()
	{
		return ($this->height + $this->width) / 2;
	}
	
}

class Circle extends Point
{
	protected int $radius;
	
	function __construct($x, $y, $r)
	{
		parent::__construct($x, $y);
		$this->radius = $r;
	}
	
	function Show(): void
	{
		echo 'Vertex: (' . $this->x . ',' . $this->y . ')
				radius:' . $this->radius . '<br/> ';
	}
	
	function Area()
	{
		return $this->radius * $this->radius * 3.1415;
	}
	
	function Perimeter()
	{
		return $this->radius * 3.1415 * 2;
	}
}

$figures = [];
$figures[] = new Rectangle(100, 200, 100, 100);
$figures[] = new Circle(200, 200, 100);
//$figures[] = new Point(100, 100);
$figures[] = new Circle(300, 200, 100);
$totalArea = 0;
$totalPerimeter = 0;
foreach ($figures as $f)
{
	$totalArea += $f->Area();
	$totalPerimeter += $f->Perimeter();
}

echo "<pre>";
print_r($totalArea);
echo "<pre/>";
echo "<pre>";
print_r($totalPerimeter);
echo "<pre/>";
