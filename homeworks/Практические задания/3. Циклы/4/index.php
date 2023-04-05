<?php
/** Найти количество 4-значных чисел, в которых:
 *    a) все цифры разные;
 *    b) все цифры одинаковые. */

const BEGIN = 1000;
const END = 9999;

$different = 0;
$same = 0;

for ($i = BEGIN; $i <= END; $i++) {
	$str = (string) $i;
	if (  $str[0] == $str[1] &&
			$str[0] == $str[2] &&
			$str[0] == $str[3]) {
		$same++;
		echo $str, "<br>";
	} else $different++;
}

echo "Чисел, в которых цифры совпадают: $same", "<br>";
echo "Чисел, в которых цифры не совпадают: $different", "<br>";