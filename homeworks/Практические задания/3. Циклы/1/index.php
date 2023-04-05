<?php
	/** Вывести первые 10 четных чисел и дополнительно:
	 *    a) посчитать их сумму;
	 *    b) посчитать их среднее значение
	 * Формат вывода: <span>-элемент; размер текста должен быть равен порядковому номеру элемента * 5
	 * (для 1-го: 1*5, для 2-го: 2*5 и т. д.); цвет текста — зеленый. */
	
	const QUANTITY_NUMBERS = 10; // количество чисел
	$sum = 0;
	for ($i = 2, $count = 1; $count <= QUANTITY_NUMBERS; $i += 2, $count++) {
		$fz = $count * 5 . 'px';
		$comma = ($count < QUANTITY_NUMBERS)? ', ': '';
		echo "<span style='color: green; font-size: $fz;'>$i$comma</span>";
		$sum += $i;
	}
	
	echo "<br>";
	echo "<br>";
	echo "Сумма = $sum";
	echo "<br>";
	echo "Среднее = " .$sum / QUANTITY_NUMBERS;
	