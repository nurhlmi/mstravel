<?php
	$path = $_SERVER['PHP_SELF'];
	
	// Home
	if($path == "/mstravel/index.php") {
		$home = '<li class="nav-item nav-link active mr-3">Home</li>';
	} else {
		$home = '<li class="nav-item mr-3"><a class="nav-link" href="/mstravel/">Home</a></li>';
	}
	
	// About
	if($path == "/mstravel/about.php") {
		$about = '<li class="nav-item nav-link active mr-3">About</li>';
	} else {
		$about = '<li class="nav-item mr-3"><a class="nav-link" href="about">About</a></li>';
	}
	
	// News
	if($path == "/mstravel/news.php") {
		$news = '<li class="nav-item nav-link active mr-3">News</li>';
	} else {
		$news = '<li class="nav-item mr-3"><a class="nav-link" href="news">News</a></li>';
	}
	
	// Gallery
	if($path == "/mstravel/gallery.php") {
		$gallery = '<li class="nav-item nav-link active mr-3">Gallery</li>';
	} else {
		$gallery = '<li class="nav-item mr-3"><a class="nav-link" href="gallery">Gallery</a></li>';
	}
?>

<div class="fixed-top">
	<nav class="navbar navbar-expand-lg navbar-light shadow bg-white py-1" id="navigation">
		<div class="container">
			<div class="p-0 mr-auto">
				<a class="navbar-brand" href="/mstravel/">
					<img src="/mstravel/img/logo.jpg" class="d-inline-block align-top rounded-circle" alt="" width="50">
				</a>
			</div>
			<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
				<i id="nav-icon" class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0 font-weight-bold mr-3">
					<?php echo $home; ?>
					<?php echo $gallery; ?>
					<?php echo $news; ?>
					<?php echo $about; ?>
				</ul>
			</div>
		</div>
	</nav>
</div>