<?php
/** Перевести число из десятичной в двоичную систему счисления, результат вывести в
 *  параграфе со стандартным размером текста и цветом */

const DEC_NUMBER = 2;

$bin_array = [];

echo "DEC: ".DEC_NUMBER;
echo "<br>", "BIN: ";
for ($i = DEC_NUMBER; $i >= 1; ) {
	array_push($bin_array, ($i % 2));
	$i = intdiv($i, 2);
}
for ($i = count($bin_array) - 1; $i >= 0; $i--) {
	echo $bin_array[$i];
}