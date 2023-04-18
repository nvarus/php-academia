<?php

class Point
{
	public int | float $x;
	public int | float $y;
	
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

$r = new Point(100, 200);
echo "<pre>";
print_r($r);
echo "<pre/>";