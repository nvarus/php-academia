<?php
	
	// загрузка страниц
	function loading_pages(): void
	{
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
	function add_category_option(): void
	{
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
	
	
	// запись в файл
	$books = 'files/books.txt';
	function create_record($title, $author, $difficulty, $annotation, $photo): bool
	{
		// функция для замены точек с запятой и двоеточий
		$colon_semicolon_replace = fn($str): string => str_replace([';', ':', ' '], ['.', ',', '_'], $str);
		
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
		while ($line = fgets($file, 3024)) {
			$read_title = substr($line, 0, strpos($line, ':'));
			if (strtolower($read_title) == strtolower($title)) {
				echo "<h2 style='color: crimson; font-size: 29px'>ТАКАЯ ЗАПИСЬ УЖЕ СУЩЕСТВУЕТ</h2>";
				return false;
			}
		}
		// замены знаков ';' ':' ' '
		$title = $colon_semicolon_replace($title);
		$author = $colon_semicolon_replace($author);
		$annotation = $colon_semicolon_replace($annotation);
		
		// загрузка файлов
		$photo_path = upload_file($photo, '/upload/picture');
		
		// создаем новую запись в файл
		$line =
			'book_name:' . $title . ';' .
			'author:' . $author . ';' .
			'difficulty:' . $difficulty . ';' .
			'annotation:' . $annotation .
			
			
			"\r\n";
		fputs($file, $line);
		fclose($file);
		return true;
	}
	
	function upload_file($file, $upload_dir): string {
		$upload_file = $file['name'];
		var_dump($upload_file);
		var_dump($_FILES['photo']['error']);
		if (move_uploaded_file($file['tmp_name'], "$upload_dir/$upload_file")) {
			echo "<h2 style='color: teal; font-size: 29px'>Файл загружен корректно</h2>";
		} else {
			echo "<h2 style='color: crimson; font-size: 29px'>ЧТО-ТО ПОШЛО НЕ ТАК</h2>";
			
		}
		return 0;
	}
