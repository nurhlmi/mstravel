<!Doctype html>
<html>
	<?php require "page/head.php"; ?>
	
	<body>
		<?php require "page/navigation.php"; ?>
		
		<section class="pt-4">
			<div class="banner mb-2">
				<div class="owl-carousel owl-theme" id="owl-slide">
					<?php for($i=1;$i<3;$i++) { ?>
					<div class="item">
						<a href="package?id=70" target="_blank">
							<img src="img/banner/<?php echo $i; ?>.jpg">
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
				
		<div class="container mb-5">
			<div class="bg-search"></div>
			<div class="search">
				<div class="search-head p-3">
					<ul class="nav nav-tabs border-0 text-center" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link border-0 rounded active" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="true">
								<span class="font-weight-bold">
									<i class="fa fa-map-marked-alt"></i><br>Tour
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link border-0 rounded" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
								<span class="font-weight-bold">
									<i class="fa fa-hotel"></i><br>Hotel
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link border-0 rounded" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="false">
								<span class="font-weight-bold">
									<i class="fa fa-plane-departure"></i><br>Flight
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-content p-3" id="myTabContent">
					<div class="tab-pane fade show active" id="tour" role="tabpanel" aria-labelledby="tour-tab">
						<form method="get" action="tour">
							<div class="row py-2">
								<div class="col-md-6 mb-4">
									<div class="form-group">
										<label class="font-weight-bold" for="category">
											<i class="fa fa-globe-americas pr-2"></i>Category
										</label>
										<select name="category" id="category" class="form-control form-select">
											<option value="all" selected>All Category</option>
											<option value="domestic">Domestic</option>
											<option value="international">International</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 mb-4">
									<div class="form-group">
										<label class="font-weight-bold" for="destination">
											<i class="fa fa-map-marker-alt pr-2"></i>Destination
										</label>
										<select name="destination" id="destination" class="form-control form-select">
											<option value="all" selected>All Destination</option>
											<option value="asia">Asia</option>
											<option value="japan">Japan</option>
											<option value="korea">Korea</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="text-right">
										<input type="reset" class="btn btn-link text-danger font-weight-bold" value="Reset" />
										<button class="btn btn-danger font-weight-bold">
											<i class="fa fa-search pr-2"></i>Search
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="flight-tab">
						<div class="row py-2">
							<div class="col-md-4 mb-4">
								<div class="form-group">
									<label class="font-weight-bold" for="select-from">From</label>
									<select id="select-from" class="form-control form-select">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 mb-4">
								<div class="form-group">
									<label class="font-weight-bold" for="select-to">To</label>
									<select id="select-to" class="form-control form-select">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 mb-4">
								<div class="form-group">
									<label class="font-weight-bold" for="select-date">Departure</label>
									<select id="select-date" class="form-control form-select">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="text-right">
									<input type="reset" class="btn btn-link text-danger font-weight-bold" value="Reset" />
									<button class="btn btn-danger font-weight-bold">
										<i class="fa fa-fw fa-search"></i> Search
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--<section id="popular" class="pb-0">
			<div class="container">
				<h2 class="font-weight-bold text-center">Popular Destinations</h2>
				<p class="text-secondary">The most visited destination.</p>
			</div>
		</section>
		<div class="owl-carousel owl-theme text-left pt-2 mb-5" id="owl-destination">
			<?php
				for($i=1;$i<=3;$i++) {
					if($i==1){$name = "japan";}
					else if($i==2){$name = "asia";}
					else{$name = "korea";}
			?>
			<div class="item pb-3">
				<a href="tour?category=domestic&destination=<?php echo $name; ?>" class="text-white">
					<div class="card">
						<div class="card-img" style="background-image:url(img/country/<?php echo $name; ?>.png)">
							<div class="card-overlay">
								<h5 class="font-weight-bold text-capitalize"><?php echo $name; ?></h5>
								<small>Starting From</small>
								<h4 class="font-weight-bold mb-0">IDR 5.000.000</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>-->
		
		<section id="about" class="bg-light">
			<div class="container">
				<h2 class="font-weight-bold">Why Choose Us?</h2>
				<div class="row pt-5">
					<div class="col-lg-4 mb-3">
						<img src="img/icon/briefcase.png" class="img-circle pb-3" />
						<h5 class="font-weight-bold">Quality Service</h5>
						<p class="text-secondary">Hardworking and excellent services are our dedication to give a best quality services.</p>
					</div>
					<div class="col-lg-4 mb-3">
						<img src="img/icon/map.png" class="img-circle pb-3" />
						<h5 class="font-weight-bold">Great Destinations</h5>
						<p class="text-secondary">We provide great destination to make our customer comfortable and satisfied.</p>
					</div>
					<div class="col-lg-4 mb-3">
						<img src="img/icon/flight.png" class="img-circle pb-3" />
						<h5 class="font-weight-bold">Experienced</h5>
						<p class="text-secondary">Our staffs are recruited from top tourism schools and they are trained to be creative and knowleageable.</p>
					</div>
				</div>
			</div>
		</section>
		
		<!--
		<section id="content" style="background-image:url('img/gallery/background.png')">
			<div class="container pt-5">
				<h2 class="card-text-shadow font-weight-bold text-uppercase text-white">Gallery</h2>
			</div>
		</section>
		<div class="row m-0">
			<?php for($i=1;$i<=12;$i++) { ?>
				<div class="col-2 p-0">
					<img src="img/gallery/<?php echo $i; ?>.png" style="width:100%" />
				</div>
			<?php } ?>
		</div>
		-->
		
		<section id="news" class="pb-0">
			<div class="container">
				<h2 class="font-weight-bold text-center">Latest News</h2>
				<p class="text-secondary">News recently uploaded.</p>
			</div>
		</section>
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
		<div class="container pb-5">
			<div class="text-center mb-4">
				<button class="btn btn-outline-danger font-weight-bold text-uppercase px-5">More</button>
			</div>
		</div>
		
		<?php require "page/footer.php"; ?>
	</body>
</html>