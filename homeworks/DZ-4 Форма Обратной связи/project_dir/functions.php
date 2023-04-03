<?php

	// загрузка страниц
	function loading_pages():void {
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			switch ($page) {
				case 1:
					include_once('home.php');
					break;
				case 2:
					include_once('backpage.php');
					break;
				case 3:
					include_once('book_list.php');
					break;
			}
		} else if (isset($_POST['page'])) {
			$page = $_POST['page'];
			if ($page == 2) {
				include_once('backpage.php');
			}
		}
	}
	
	// загрузить массив в SELECT - OPTION
	function add_category_option():void {
		$category =
			[
				"Языки программирования",
				"Алгоритмы",
				"Базы данных",
				"Операционные системы",
				"Архитектура ЭВМ",
			];
		
		foreach ($category as $item) {
			echo "<option value=\"$item\">$item</option>";
		}
	}

	$books = 'files/books.txt';
	function create_record($title, $author,):bool {
		
		// валидация
		$title = trim(htmlspecialchars($title));
		$author = trim(htmlspecialchars($author));
		if ($title == '' || $author == '') {
			echo "<h2 style='color: crimson; font-size: 29px'>ЗАПОЛНЕНЫ НЕ ВСЕ ПОЛЯ</h2>";
			return false;
		}
		
		// проверка на уже существующую запись
		global $books;
		$file = fopen($books, 'a+');
		while ($line = fgets($file, 1024))
		{
			$read_title = substr($line, 0, strpos($line, ':'));
			if (strtolower($read_title) == strtolower($title))
			{
				echo "<h2 style='color: crimson; font-size: 29px'>ТАКАЯ ЗАПИСЬ УЖЕ СУЩЕСТВУЕТ</h2>";
				return false;
			}
		}
		
		// создаем новую запись в файл
		$line = $title.':'.$author."\r\n";
		fputs($file, $line);
		fclose($file);
		return true;
	}