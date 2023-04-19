<?php

trait Collect
{
	public function Add(&$arr)
	{
		$arr[] = $this;
	}
}

interface Geometry
{
	const PI = 3.1415926;
	
	function Area();
	
	function Perimeter();
}

class Point
{
	protected $x;
	protected $y;
	
	function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	
	function Show()
	{
		echo 'Vertex: (' . $this->x . ',' . $this->y . ')
 <br/>';
	}
}

class Rectangle extends Point implements Geometry
{
	use Collect;
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

class Circle extends Point implements Geometry
{
	use Collect;
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
		return $this->radius * $this->radius * self::PI;
	}
	
	function Perimeter()
	{
		return $this->radius * self::PI;
	}
}

$figures = array();
$o1 = new Rectangle(100, 200, 100, 100);
$o2 = new Circle(200, 200, 100);
$o3 = new Point(100, 100);
$o4 = new Circle(300, 200, 100);
$o1->Add($figures);
$o2->Add($figures);
$o4->Add($figures);

$totalArea = 0;
$totalPerimeter = 0;
foreach ($figures as $f) {
	$totalArea += $f->Area();
	$totalPerimeter += $f->Perimeter();
}

echo "<pre>";
print_r($totalArea);
echo "<pre/>";
echo "<pre>";
print_r($totalPerimeter);
echo "<pre/>";
print_r(PDO::getAvailableDrivers());


