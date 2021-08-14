<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title id="title">7D Hyogo - Himeji Castle & Akashi Kaikyo Bridge Tour</title>
		
		<link rel="stylesheet" href="/mstravel/vendor/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/fontawesome/css/all.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/owlcarousel/assets/owl.carousel.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/owlcarousel/assets/owl.theme.default.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" />
		<link rel="stylesheet" href="/mstravel/vendor/theme/style.css" />
		<link rel="shortcut icon" href="/mstravel/img/logo.jpg" />
	</head>
	
	<body class="bg-light">
		<?php require "page/navigation.php"; ?>
		
		<section class="pt-4">
			<div class="banner mb-2 container">
				<div class="row">
					<div class="col-lg-8 mb-2 text-left">
						<a href="#" data-toggle="" data-target="">
							<img src="img/country/all.png" width="100%" />
						</a>
						<p class="text-muted pt-3">
							<a href="./" class="text-dark">Home</a> <i class="fa fa-angle-right px-2"></i>
							<a href="./tour" class="text-dark">Tour</a> <i class="fa fa-angle-right px-2"></i>
							Packages
						</p>
						<div class="card-detail mb-4">
							<div class="card-body text-left text-dark">
								<h5 class="font-weight-bold">7D Hyogo - Himeji Castle & Akashi Kaikyo Bridge Tour</h5>
								<small class="py-2">
									<i class="fa fa-check-circle text-success pr-1"></i>
									<span class="font-weight-bold">Flight</span>
									<i class="fa fa-check-circle text-success pr-1 pl-4"></i>
									<span class="font-weight-bold">Hotel</span>
								</small>
								<nav class="pt-5">
								  	<div class="nav nav-tabs" id="nav-tab" role="tablist">
									    <a class="nav-item nav-link active" id="nav-itinerary-tab" data-toggle="tab" href="#nav-itinerary" role="tab" aria-controls="nav-itinerary" aria-selected="true"><span class="font-weight-bold">Itinerary</span></a>
									    <a class="nav-item nav-link" id="nav-tc-tab" data-toggle="tab" href="#nav-tc" role="tab" aria-controls="nav-tc" aria-selected="false"><span class="font-weight-bold">Terms & Conditions</span></a>
								  	</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
								  	<div class="tab-pane fade show active" id="nav-itinerary" role="tabpanel" aria-labelledby="nav-itinerary-tab">
								  		<div class="container pt-3">
								  		<h6 class="font-weight-bold">Rencana Perjalanan</h6>
										<ol>
										<li>Tidak ada pengembalian uang untuk service yang tidak terpakai</li>
										<li>Harga sesuai jadwal dan hotel yang dipilih.</li>
										<li>Harga berlaku sesuai dengan validity tetapi TIDAK TERMASUK harga pada PEAK SEASON (berlaku surcharge).</li>
										<li>Harga & jadwal perjalanan dapat berubah sewaktu-waktu dengan / tanpa pemberitahuan terlebih dahulu.</li>
										<li>Jika diluar jam penjemputan (08:00-20:00) akan dikenakan biaya tambahan IDR 700.000 / Group.</li>
										</ol>
										</div>
								  	</div>
								  	<div class="tab-pane fade" id="nav-tc" role="tabpanel" aria-labelledby="nav-tc-tab">
								  		<div class="container pt-3">
								  		<h6 class="font-weight-bold">Cancellation Policy</h6>
										<ul>
										<li>Tidak ada pengembalian uang untuk service yang tidak terpakai</li>
										</ul>
								  		<h6 class="font-weight-bold">Terms & Conditions</h6>
								  		<ul>
										<li>Harga sesuai jadwal dan hotel yang dipilih.</li>
										<li>Harga berlaku sesuai dengan validity tetapi TIDAK TERMASUK harga pada PEAK SEASON (berlaku surcharge).</li>
										<li>Harga & jadwal perjalanan dapat berubah sewaktu-waktu dengan / tanpa pemberitahuan terlebih dahulu.</li>
										<li>Jika diluar jam penjemputan (08:00-20:00) akan dikenakan biaya tambahan IDR 700.000 / Group.</li>
										</ul>
										</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 text-left">
						<form method="get" action="booking">
							<?php
								function create_random($length)
								{
								    $data = 'ABCDEFGHIJKLMNOPQRSTU1234567890';
								    $string = '';
								    for($i = 0; $i < $length; $i++) {
								        $pos = rand(0, strlen($data)-1);
								        $string .= $data{$pos};
								    }
								    return $string;
								}
							?>
							<input type="hidden" name="tour" value="<?php echo create_random(6); ?>">
						<div class="card-detail border-0">
							<div class="card-header border-0">
								<span class="font-weight-bold">Choose Date and Participans</span>
							</div>
							<div class="card-body">
								<i class="fa fa-calendar-week text-danger pr-2"></i>
								<span class="font-weight-bold">Date</span>
								<div class="form-group pt-3">
									<select name="departure" class="form-control">
										<option value="1">15 Nov 2019 - 22 Nov 2019</option>
										<option value="2">23 Nov 2019 - 30 Nov 2019</option>
									</select>
								</div>
							</div>
							<div class="card-body border-top">
								<i class="fa fa-user text-danger pr-2"></i>
								<span class="font-weight-bold">Participans</span>
								<div id="room">
									<div class="card-detail mt-3" id="room1">
										<div class="card-body text-center">
											<h6 class="font-weight-bold">Room</h6>
										</div>
										<div class="card-body border-top">
											<div class="form-row">
										     	<div class="col-9 pt-2">
													<label class="text-muted" for="adults">Adults</label>
												</div>
										     	<div class="col-3">
											     	<select name="adults" class="form-control" id="adults">
												        <option value="1">1</option>
												        <option value="2">2</option>
											      	</select>
												</div>
										     	<div class="col-9 pt-2">
													<label class="text-muted" for="childs">Children</label>
												</div>
										     	<div class="col-3">
											     	<select name="childs" class="form-control" id="childs">
												        <option value="0">0</option>
												        <option value="1">1</option>
												        <option value="2">2</option>
											      	</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--<a href="javascript:void(0)" class="btn btn-outline-danger btn-block btn-sm font-weight-bold mt-3" id="addroom">
									Add Room
								</a>-->
							</div>
							<div class="card-body border-top">
								<small class="font-weight-bold">Start From</small>
								<h4 class="font-weight-bold text-danger mb-4">IDR 5.000.000</h4>
								<button class="btn btn-danger btn-block font-weight-bold">Book Now</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<?php require "page/footer.php"; ?>
		<script type="text/javascript">
			var i = 1;
			$('#addroom').click(function(){
				var card = '';
				card += '<div class="card-detail mt-3">';
				card += '<div class="card-body text-center">';
				card += '<h6 class="font-weight-bold">Room '+(i+1)+'</h6>';
				card += '</div>';
				card += '<div class="card-body border-top">';
				card += '<div class="form-row">';
		     	card += '<div class="col-9 pt-2">';
				card += '<label class="" for="adults">Adults</label>';
				card += '</div>';
		     	card += '<div class="col-3">';
		     	card += '<select name="a[]" class="form-control" id="adults">';
		        card += '<option value="1">1</option>';
		        card += '<option value="2">2</option>';
		      	card += '</select>';
				card += '</div>';
		     	card += '<div class="col-9 pt-2">';
				card += '<label class="" for="adults">Children</label>';
				card += '</div>';
		     	card += '<div class="col-3">';
		     	card += '<select name="c[]" class="form-control" id="adults">';
		        card += '<option value="0">0</option>';
		        card += '<option value="1">1</option>';
		        card += '<option value="2">2</option>';
		      	card += '</select>';
				card += '</div>';
				card += '</div>';
				card += '</div>';
				card += '</div>';

				$('#room').append(card);
				i = i + 1;
			})
		</script>
	</body>
</html>