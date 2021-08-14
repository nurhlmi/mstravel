<?php
	$path = $_SERVER['PHP_SELF'];
	
	if($path == "/mstravel/index.php") {
		$title = '';
	}
	else if($path == "/mstravel/about.php") {
		$title = 'About - ';
	}
	else if($path == "/mstravel/news.php") {
		$title = 'News - ';
	}
	else if($path == "/mstravel/gallery.php") {
		$title = 'Gallery - ';
	}
	else if($path == "/mstravel/tour.php") {
		$title = 'Tour Packages - ';
	}
?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
	
	<title><?php echo $title; ?>MS Travel</title>
	
	<link rel="stylesheet" href="/mstravel/vendor/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/mstravel/vendor/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="/mstravel/vendor/owlcarousel/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="/mstravel/vendor/owlcarousel/assets/owl.theme.default.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" />
	<link rel="stylesheet" href="/mstravel/vendor/theme/style.css" />
	<link rel="shortcut icon" href="/mstravel/img/logo.jpg" />
</head>