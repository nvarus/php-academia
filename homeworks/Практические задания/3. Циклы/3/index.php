<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		.circle {
			position: absolute;
			top: 200px;
			left: 200px;
			border: 1px solid red;
			border-radius: 50%;}
	</style>
</head>
<body>
<?php
	/** Написать скрипт, который будет строить 10 эллипсов только по контуру, которые выходят из одной точки
	 * (каждый эллипс будет на 15 рх больше, чем предыдущий, минимальный размер — 20 рх) */
	
	for ($size = 20, $count = 1; $count <= 10; $size += 15, $count++) {
		echo "<div class='circle' style='width: {$size}px; height: {$size}px'>ssss</div>";
	}
	
	
	
	
	
?>
</body>
</html>


