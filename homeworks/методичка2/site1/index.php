<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./style/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row">
				<header class="col"></header>
			</div>
			
			
			<nav class="col-sm-12 col-md-12 col-lg-12">
			<?php include_once('pages/menu.php');?>
			</nav>
		</div>
		
		<div class="row">
			<section class="col-sm-12 col-md-12 col-lg-12">
				<?php
					if(isset($_GET['page']))
					{
						$page = $_GET['page'];
						if($page == 1) include_once('pages/home.php');
						if($page == 2) include_once('pages/upload.php');
						if($page == 3) include_once('pages/gallery.php');
						if($page == 4) include_once('pages/registration.php');
					}
				?>
			</section>
		</div>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>