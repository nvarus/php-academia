<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<style>
	td {
		width: 200px;
		height: 200px;
		text-align: right;
		vertical-align: bottom;
		font-size: 10px;
	}
	
</style>
<body>



<?php
/**   Вывести на экран шахматную доску элементом «таблица».
 *    Добавить к шахматной доске фигуры (фигуры хранятся как png-файл в папке img)*/

	

const CELL_COUNT = 8;

// именование ячеек
$horiz = ["A","B","C","D","E","F","G","H"];
$vert = CELL_COUNT;
// переключение цвета
$color_bool = true;

echo "<table>";
// ряд
for ($tr = 1; $tr <= CELL_COUNT; $tr++) {
	echo "<tr>";
	// строка
	for ($td = 1, $h = 0; $td <= CELL_COUNT; $td++, $h++) {
		$back_color = ($color_bool)?"white":"black";
		// меняем цвет текста в зависимости от цвета ячейки
		$text_color = ($back_color == "white")?"black":"white";
		$id = $horiz[$h].$vert; // создаем id с именем ячейки
		echo "<td style='background: {$back_color}; color: $text_color' id='$id'>$id</td>";
		$color_bool = !$color_bool;   // инверсия цвета
	}
	echo "</tr>";
	$color_bool = !$color_bool;   // инверсия цвета
	$vert--;
}
echo "</table>";

/** Функция для добавления фигур на доску
 * $cage - клетка
 * $piece - имя фигуры  */
	function set_piece ($cage, $piece):void {
		$path = "./img/".$piece.".svg";
		$cg = "#".$cage;
		echo "<style>{$cg}:before{content: url('{$path}');display: block;}</style>";
	}
	
// расставляем белые
set_piece("A1", "wR");
set_piece("B1", "wN");
set_piece("C1", "wB");
set_piece("D1", "wQ");
set_piece("E1", "wK");
set_piece("F1", "wB");
set_piece("G1", "wN");
set_piece("H1", "wR");
// белые пешки
for ($i = 0; $i < CELL_COUNT; $i++) {
	set_piece($horiz[$i]."2", "wP");
}

	// расставляем черные
set_piece("A8", "bR");
set_piece("B8", "bN");
set_piece("C8", "bB");
set_piece("D8", "bQ");
set_piece("E8", "bK");
set_piece("F8", "bB");
set_piece("G8", "bN");
set_piece("H8", "bR");
	// черные пешки
	for ($i = 0; $i < CELL_COUNT; $i++) {
		set_piece($horiz[$i]."7", "bP");
	}
?>


</body>
</html>
