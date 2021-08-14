<!Doctype html>
<html>
	<?php require "page/head.php"; ?>
	
	<body>
		<?php require "page/navigation.php"; ?>
		
		<section id="slider">
			<div class="banner">
				<div class="owl-carousel owl-theme" id="owl-slide">
					<?php for($i=1;$i<3;$i++) { ?>
					<div class="item">
						<div class="slider" style="background-image: url('img/banner.png')"></div>
					</div>
					<?php } ?>
					
				</div>
				<div class="search py-4">
					<div class="container">
						<button class="btn btn-danger my-2 my-sm-0 font-weight-bold text-uppercase">
							<i class="fa fa-fw fa-search"></i> Search</button>
					</div>
				</div>
			</div>
		</section>
		
		<section id="content">
			<div class="container">
				<h2 class="font-weight-bold text-center text-uppercase">News</h2>
				<div class="owl-carousel owl-theme pt-2" id="owl-news">
					<?php
						for($i=1;$i<=3;$i++) {
							if($i==1){$name = "japan";}
							else if($i==2){$name = "asean";}
							else{$name = "korea";} 
					?>
					<div class="item pb-4">
						<a href="page/berita/?read=1">
							<div class="card shadow border-0">
								<div class="card-head" style="background-image:url('img/news/<?php echo $name; ?>.png')"></div>
								<div class="card-body text-left">
									<small class="font-weight-bold text-dark">
										Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
										sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
									</small>
									<small class="text-muted float-right pt-3">Jumat, 21 Juni 2019</small>
								</div>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="text-center mb-4">
					<button class="btn btn-outline-danger font-weight-bold text-uppercase px-5">More</button>
				</div>
			</div>
		</section>
		
		<?php require "page/footer.php"; ?>
	</body>
</html>