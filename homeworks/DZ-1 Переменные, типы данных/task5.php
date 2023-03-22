<!--Разработать php-страницу, в которой выбрать правильные html-элементы и вывести 3 вопроса в следующем формате-->

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		form {
			width: 600px;
			margin: 0 auto;
			padding: 15px;
		}

		section {
			text-align: center;
			margin: 10px;
		}

		h2 {
			text-align: center;
			color: DarkOliveGreen;
		}

		p {
			font-weight: 600;
			font-size: 18px;
		}

		button {
			margin-top: 20px;
			width: 100%;
			height: 30px;
			background: crimson;
			color: white;
			font-size: 18px;
			border-radius: 7px;
		}

		input {
			margin-right: 15px;
		}

	</style>
</head>
<body>
<form method="post" action="">
	<section>
		<h2>Вопрос 1</h2>
		<p>Как называется несущая поверхность самолета?</p>
		<label for="">Лопасть</label>
		<input type="radio" value="Лопасть" name="quest1">
		<label for="">Крыло</label>
		<input type="radio" value="Крыло" name="quest1">
		<label for="">Киль</label>
		<input type="radio" value="Киль" name="quest1">
		<label for="">Лонжерон</label>
		<input type="radio" value="Лонжерон" name="quest1">
	</section>
	<hr>
	<section>
		<h2>Вопрос 2</h2>
		<p>Какой из этих языков является живым?</p>
		<label for="">Русский</label>
		<input type="checkbox" value="1" name="quest2[]">
		<label for="">Латынь</label>
		<input type="checkbox" value="-1" name="quest2[]">
		<label for="">Английский</label>
		<input type="checkbox" value="1" name="quest2[]">
		<label for="">Китайский</label>
		<input type="checkbox" value="1" name="quest2[]">
	</section>
	<hr>
	<section>
		<h2>Вопрос 3</h2>
		<p>Расскажите немного о себе</p>
		<textarea name="quest3" cols="80" rows="5"></textarea>
	</section>
	<button type="submit">Отправить</button>
</form>

<?php
	if (isset($_POST['quest1']) && isset($_POST['quest2']) && isset($_POST['quest3'])) {
		$q1 = $_POST['quest1'];
		$q2 = $_POST['quest2'];
		$q3 = $_POST['quest3'];
		// первый вопрос
		if ($q1 == "Крыло") {
			echo "Вопрос 1: Вы ответили правильно.";
		} else echo "Вопрос 1: Вы ошиблись, правильный ответ: Крыло.";
		// второй вопрос
		$count = 0;
		foreach ($q2 as $item) $count += $item;
		echo "<br>";
		if ($count < 3) {
			echo "Вопрос 2: Вы ошиблись, правильный ответ: русский, английский и китайский.";
		} else echo "Вопрос 2: Вы ответили правильно.";
		// третий вопрос
		echo "<br>","Ваша история: $q3";
	} else {
		echo 'Не выбрано.';
	}
?>


</body>
</html>



