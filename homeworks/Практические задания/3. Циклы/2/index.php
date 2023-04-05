<?php
/** Проверить, является ли число простым. Вывести в параграфе результат в формате: Число — Простое/Сложное. */

const NUMBER = 17;

function simple_or_complex ($num):string
{
	for ($i = 2; $i <= sqrt(NUMBER); $i++) {
		if (NUMBER % $i == 0) return "Число $num сложное";
	}
	return "Число $num простое";
}

echo simple_or_complex(NUMBER);
