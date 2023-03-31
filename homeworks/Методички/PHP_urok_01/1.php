<?php
	/** Написать PHP-скрипт, в котором создать текстовый массив с названиями цветов. Количество разных цветов должно
	 * быть больше четырех. Затем с помощью PHP отобразить на странице четыре div одинакового размера. Сделать так, чтобы
	 * при загрузке страницы все четыре div заливались случайными цветами, выбранными из массива. При этом, все четыре
	 * div должны заливаться разными цветами. Ни один цвет не должен повторяться */

	$color_storage = ["Crimson", "OrangeRed", "Fuchsia", "SaddleBrown", "Purple", "Navy", "Lime", "DarkOliveGreen",
			  "Teal", "MediumSlateBlue", "Coral", "HotPink"];

	// функция возвращает случайное число от 0 до длины массива $color_storage
	$rand_color = fn() => rand(0, count($color_storage) - 1);
	$div_color = [];

	// функция возвращает false, если $num встречается в массиве $div_color
	function check_color($num, $div_color): bool
	{
		foreach ($div_color as $item) {
			if ($item == $num) return false;
		}
		return true;
	}

	$div_color[0] = $rand_color();
	for ($index = 1; $index < 4; $index++) {
		$tmp = $rand_color();

		// продолжаем цикл, пока check_color не вернет true
		while (true) {
			if (check_color($tmp, $div_color)) {
				array_push($div_color, $tmp);
				break;
			} else $tmp = $rand_color();
		}
	}
?>

<!doctype html>
<html lang="en">
<head>
	<title>Document</title>
	<style>
		.content {
			display: flex;
			max-width: 500px;
			margin: 20px auto;
		}

		.content > div {
			width: 25%;
			height: 100px;
			color: white;
			display: flex;
			margin-left: 5px;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>
<div class="content">
	<div style="background: <?php echo $color_storage[$div_color[0]]; ?>">
		<?php echo $color_storage[$div_color[0]]; ?>
	</div>
	<div style="background: <?php echo $color_storage[$div_color[1]]; ?>">
		<?php echo $color_storage[$div_color[1]]; ?>
	</div>
	<div style="background: <?php echo $color_storage[$div_color[2]]; ?>">
		<?php echo $color_storage[$div_color[2]]; ?>
	</div>
	<div style="background: <?php echo $color_storage[$div_color[3]]; ?>">
		<?php echo $color_storage[$div_color[3]]; ?>
	</div>
</div>
</body>
</html>

