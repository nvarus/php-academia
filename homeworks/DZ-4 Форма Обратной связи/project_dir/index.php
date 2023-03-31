<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./style/style.css">
	<title>Document</title>
</head>
<body>
<div class="content">
	<nav class="nav-menu">
		<?php
			include_once('menu.php');
			include_once ('functions.php');
		?>
	</nav>

	<section> <?php loading_pages(); ?> </section>


	<script src="js/script.js"></script>
</div>
</body>
</html>