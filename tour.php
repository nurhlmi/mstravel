<?php
	if(!isset($_GET['category']) || !isset($_GET['destination'])) {
		echo "<script>location='tour?category=all&destination=all'</script>";
	}
	else {
		if($_GET['category'] == null || $_GET['destination'] == null) {
			echo "<script>location='tour?category=all&destination=all'</script>";
		}
		else {
			if($_GET['category'] == 'all' || $_GET['category'] == 'domestic' || $_GET['category'] == 'international') {

				if($_GET['destination'] == 'all' || $_GET['destination'] == 'asia' || $_GET['destination'] == 'japan' || $_GET['destination'] == 'korea') {
					$destination = $_GET['destination'];
				} else {
					echo "<script>location='tour?category=all&destination=all'</script>";
				}
			}
		}
	}
?>

<!Doctype html>
<html>
	<?php require "page/head.php"; ?>
	
	<body class="bg-light">
		<?php require "page/navigation.php"; ?>
		
		<section id="background" class="d-none d-lg-block" style="background-image:url(img/country/<?php echo $destination; ?>.png)">
			<div class="title">
				<h2 class="font-weight-bold text-capitalize">
					<?php 
						if($_GET['destination'] == 'all') {
							echo "All Destination";
						} else {
							echo $_GET['destination'];
						}
					?>
				</h2>
			</div>
		</section>

		<div class="container pt-4">
			<p class="text-muted">
				<a href="./" class="text-dark">Home</a> <i class="fa fa-angle-right px-2"></i>
				Tour
			</p>
		</div>

		<section id="tour" class="pt-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6 mb-5">
						<a href="package?id=1">
							<div class="card shadow border-0">
								<div class="card-head" style="background-image:url('img/country/asia.png')"></div>
								<div class="card-body text-left text-dark">
									<h6 class="font-weight-bold">Hyogo - Himeji Castle & Akashi Kaikyo Bridge Tour</h6>
									<div class="badge badge-danger text-wrap mb-3">7 Days</div><br>
									<small>Starting From</small>
									<h4 class="font-weight-bold mb-4">IDR 5.000.000</h4>
									<button class="btn btn-outline-danger btn-block font-weight-bold">View Package</button>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-5">
						<a href="package?id=">
							<div class="card shadow border-0">
								<div class="card-head" style="background-image:url('img/country/asia.png')"></div>
								<div class="card-body text-left text-dark">
									<h6 class="font-weight-bold">Hyogo - Himeji Castle & Akashi Kaikyo Bridge Tour</h6>
									<div class="badge badge-danger text-wrap mb-3">7 Days</div><br>
									<small>Starting From</small>
									<h4 class="font-weight-bold mb-4">IDR 5.000.000</h4>
									<button class="btn btn-outline-danger btn-block font-weight-bold">View Package</button>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-5">
						<a href="package?id=">
							<div class="card shadow border-0">
								<div class="card-head" style="background-image:url('img/country/asia.png')"></div>
								<div class="card-body text-left text-dark">
									<h6 class="font-weight-bold">Hyogo - Himeji Castle & Akashi Kaikyo Bridge Tour</h6>
									<div class="badge badge-danger text-wrap mb-3">7 Days</div><br>
									<small>Starting From</small>
									<h4 class="font-weight-bold mb-4">IDR 5.000.000</h4>
									<button class="btn btn-outline-danger btn-block font-weight-bold">View Package</button>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    	<div class="modal-content">
		    		<form action="packages" method="get">
		      		<div class="modal-header">
		        		<h5 class="modal-title">Change Packages</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
		      		<div class="modal-body">
						<div class="container-fluid">
							<div class="row text-left mt-4 mb-4">
								<div class="col-sm-6 mb-4">
									<label class="font-weight-bold" for="category">
										<i class="fa fa-globe-americas pr-2"></i>Category
									</label>
									<select name="category" id="category" class="form-control form-select">
										<option value="all" selected>All Category</option>
										<option value="domestic">Domestic</option>
										<option value="international">International</option>
									</select>
								</div>
								<div class="col-sm-6 mb-4">
									<label class="font-weight-bold" for="category">
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
						</div>
		      		</div>
		      		<div class="modal-footer">
						<input type="reset" class="btn btn-link text-danger font-weight-bold" value="Reset" />
						<button class="btn btn-danger font-weight-bold">
							<i class="fa fa-search pr-2"></i>Search
						</button>
		      		</div>
		      		</form>
		    	</div>
		  	</div>
		</div>
		
		<?php require "page/footer.php"; ?>
	</body>
</html>