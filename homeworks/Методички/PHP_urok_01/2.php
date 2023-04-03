<html lang="ru">
<head>
	<title>Document</title>
	<style>
		*, *::before, *::after {
			-moz-box-sizing: border-box
			-webkit-box-sizing: border-box
			box-sizing: border-box
		}

		body {
			margin: 5px;
		}

		.content {
			display: grid;
			grid-template-columns: repeat(7, minmax(25px, 50px));
			grid-template-rows: repeat(6, 25px);
			column-gap: 2px;
			row-gap: 2px;
		}

		.content > div {
			display: flex;
			justify-content: center;
			align-items: center;

		}

		.calendar {
			max-width: 355px;
			border: 1px solid LightSlateGray;
			margin: 0 auto;
			padding: 0px 10px 5px 5px;
		}

		.title {
			text-align: center;
			font-weight: 600;
			line-height: 26px;
		}

		.week-day {
			background: LightSlateGray;
			color: white;
		}

		.week-day:nth-child(6), .week-day:nth-child(7) {
			background: Red;
		}

		.day {
			background: DarkGray;
		}

		.over-day {
			background: Gainsboro;
		}
	</style>
</head>
<body>
<div class="calendar">
	<?php
		/** Создать PHP функцию, принимающую один целочисленный параметр m, со значением в диапазоне 1-12. При вызове эта
		 * функция должна создавать в теге table календарь для месяца с номером m для текущего года. */

		function show_calendar($m): void
		{
			$year = date("Y"); // текущий год
			$month_storage = ["", "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
			echo "<div class='title'>$month_storage[$m], $year</div>";
			echo "<div class='content'>";
			// количество дней в заданном месяце
			$count_day = cal_days_in_month(CAL_GREGORIAN, $m, $year);
			$week_storage = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"];
			// выводим дни недели
			foreach ($week_storage as $item) echo "<div class='week-day'>$item</div>";
			// кол-во пустых ячеек перед месяцем
			$pre_day = -1 + date("N", mktime(0, 0, 0, $m, 1, date("Y")));
			for ($j = 1; $j <= $pre_day; $j++) {
				echo "<div class='over-day'></div>";
			}
			for ($i = 1; $i <= $count_day; $i++) {
				echo "<div class='day'>$i</div>";
			}
			// кол-во пустых ячеек после месяца
			$post_day = 7 - date("N", mktime(0, 0, 0, $m, $count_day, date("Y")));
			for ($j = 1; $j <= $post_day; $j++) {
				echo "<div class='over-day'></div>";
			}
			echo "</div>";
		}

		show_calendar(4);
	?>
</div>
</body>
</html>
