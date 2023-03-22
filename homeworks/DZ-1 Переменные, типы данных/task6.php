<!--Разработать страницу с переменными:
a) tag, background_color, color, width, height;
b) Значение в этих переменных — это значение соответствующего property тега, который описан в переменной tag;
c) Вывести тег, записанный в переменной tag со стилями, которые записаны в переменных.-->

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
	$tag = "div";
	$background_color = "blue";
	$color = "red";
	$width = "100px";
	$height = "100px";
	echo "background-color: $background_color", "<br>";
	echo "color: $color", "<br>";
	echo "width: $width", "<br>";
	echo "height: $height", "<br>";
	echo "<$tag style=\"background-color: $background_color;color: $color;width: $width;height: $height;\">
				hello
			</$tag>";
?>



</body>
</html>