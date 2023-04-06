<?php
	
	if (create_record(
		$_POST['title'],
		$_POST['author'],
		$_POST['difficulty'],
		$_POST['annotation'],
		$_FILES['photo'],
		
	)) {
		echo "<h2 style='font-size: 29px; color: green'>Книга добавлена</h2>";
	}
