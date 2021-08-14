<!Doctype html>
<html>

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title>Tour Booking - MS Travel</title>
		
		<link rel="stylesheet" href="/mstravel/vendor/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/fontawesome/css/all.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/owlcarousel/assets/owl.carousel.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/owlcarousel/assets/owl.theme.default.min.css" />
		<link rel="stylesheet" href="/mstravel/vendor/datepicker/dist/datepicker.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" />
		<link rel="stylesheet" href="/mstravel/vendor/theme/style.css" />
		<link rel="shortcut icon" href="/mstravel/img/logo.jpg" />
	</head>
	
	<body class="bg-light">

		<div class="fixed-top">
			<nav class="navbar navbar-expand-lg navbar-light shadow bg-white py-1" id="navigation">
				<div class="container">
					<div class="p-0 mr-auto">
						<a class="navbar-brand" href="#" onclick="history.back()">
							<i class="fa fa-arrow-left pr-2"></i>
							<span class="font-weight-bold">Tour</span>
						</a>
					</div>
				</div>
			</nav>
		</div>
		
		<section class="pt-4">
			<div class="banner mb-2 container">
				<div class="row">
					<div class="col-lg-12 mb-4 text-left">
						<h4 class="font-weight-bold">Tour Booking</h4>
						<p class="text-muted">Fill in your details and review your booking.</p>
					</div>
					<div class="col-lg-8 text-left">
						<div class="card-detail mb-4">
							<div class="card-body text-left text-dark">
								<h6 class="font-weight-bold text-center pb-3">Contact Information</h6>
								<div class="form-row">
									<div class="col-12 pb-3">
										<div class="form-group">
									    	<label for="name">Full Name</label>
									    	<input id="full_name" type="text" class="form-control" placeholder="e.g. Rowan Atkinson">
									   		<div class="invalid-feedback">Required</div>
									  	</div>
									</div>
									<div class="col-md-6 pb-3">
										<div class="form-group">
									    	<label for="phone">Phone Number</label>
									    	<input id="phone_number" type="tel" class="form-control" placeholder="e.g. 087712345678">
									   		<div class="invalid-feedback">Required</div>
									  	</div>
									</div>
									<div class="col-md-6 pb-3">
										<div class="form-group">
									    	<label for="email">Email</label>
									    	<input id="email" type="email" class="form-control" placeholder="e.g. rowanatkinson@gmail.com">
									   		<div class="invalid-feedback">Required</div>
									  	</div>
									</div>
								</div>
							</div>
						</div>

						<div id="room">
							<div class="card-detail mb-4">
								<div class="card-body text-left text-dark">
									<h6 class="font-weight-bold text-center pb-3">Room</h6>
									<input id="room" type="hidden" value="1" />
									<div id="participant">
										<?php for($i=1;$i<=$_GET['adults'];$i++) { ?>
										<h6 class="font-weight-bold text-left pb-3">Adult <?php echo $i; ?></h6>
										<input id="category_room<?php echo $i; ?>" type="hidden" value="adult" />
										<div class="form-row">
											<div class="col-3 col-md-2 pb-3">
												<div class="form-group">
												    <label for="title">Title</label>
												    <select id="title<?php echo $i; ?>" class="form-control">
												      	<option value="Mr.">Mr.</option>
												      	<option value="Ms.">Ms.</option>
												      	<option value="Mrs.">Mrs.</option>
												    </select>
											   		<div class="invalid-feedback">Required</div>
											  	</div>
											</div>
											<div class="col-9 col-md-10 pb-3">
												<div class="form-group">
											    	<label for="fullname">Full Name</label>
											    	<input id="full_name_room<?php echo $i; ?>" type="text" class="form-control" placeholder="e.g. Rowan Atkinson">
											   		<div class="invalid-feedback">Required</div>
											  	</div>
											</div>
											<div class="col-12 pb-3">
												<div class="form-group">
											    	<label for="birth">Birth</label>
											    	<div class="form-row">
											    		<div class="col-8 col-md-6 pb-3">
											    			<input id="date_of_birth<?php echo $i; ?>" type="text" class="form-control" data-toggle="datepicker" placeholder="yyyy-mm-dd">
											   				<div class="invalid-feedback">Required</div>
														</div>
											    		<div class="col-4 col-md-6">
															<div class="custom-control custom-checkbox">
																<input id="visa<?php echo $i; ?>" type="checkbox" class="custom-control-input" id="visa<?php echo $i; ?>" value="true">
															 	<label class="custom-control-label" for="visa<?php echo $i; ?>"><i class="fab fa-cc-visa fa-2x"></i></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php } for($i=1;$i<=$_GET['childs'];$i++) { ?>
										<h6 class="font-weight-bold text-left pb-3">Children <?php echo $i; ?></h6>
										<input id="ccategory_room<?php echo $i; ?>" type="hidden" value="children" />
										<div class="form-row">
											<div class="col-3 col-md-2 pb-3">
												<div class="form-group">
												    <label for="title">Title</label>
												    <select id="ctitle<?php echo $i; ?>" class="form-control">
												      	<option value="Mr.">Mr.</option>
												      	<option value="Ms.">Ms.</option>
												      	<option value="Mrs.">Mrs.</option>
												    </select>
											   		<div class="invalid-feedback">Required</div>
											  	</div>
											</div>
											<div class="col-9 col-md-10 pb-3">
												<div class="form-group">
											    	<label for="fullname">Full Name</label>
											    	<input id="cfull_name_room<?php echo $i; ?>" type="text" class="form-control" placeholder="e.g. Rowan Atkinson">
											   		<div class="invalid-feedback">Required</div>
											  	</div>
											</div>
											<div class="col-12 pb-3">
												<div class="form-group">
											    	<label for="birth">Birth</label>
											    	<div class="form-row">
											    		<div class="col-8 col-md-6 pb-3">
											    			<input id="cdate_of_birth<?php echo $i; ?>" type="text" class="form-control" data-toggle="datepicker" placeholder="yyyy-mm-dd">
											   				<div class="invalid-feedback">Required</div>
														</div>
											    		<div class="col-4 col-md-6">
															<div class="custom-control custom-checkbox">
																<input id="cvisa<?php echo $i; ?>" type="checkbox" class="custom-control-input" id="cvisa<?php echo $i; ?>" value="true">
															 	<label class="custom-control-label" for="cvisa<?php echo $i; ?>"><i class="fab fa-cc-visa fa-2x"></i></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card-detail text-left">
							<div class="card-body">
								<h6 class="font-weight-bold">Akashi Kaikyo Bridge Tour</h6>
							</div>
							<div class="card-body border-top text-muted">
								<p>
									<i class="fa fa-plane pr-2"></i>Air Asia
								</p>
								<p>
									<i class="fa fa-user pr-2"></i>
									<?php 
										if($_GET['adults'] == 1){
											echo $_GET['adults'].' Adult - ';
										} else {
											echo $_GET['adults'].' Adults - ';
										}
										echo $_GET['childs'].' Children';
									?>
								</p>
								<button class="btn btn-danger btn-block font-weight-bold" id="book">Book Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<input type="hidden" name="order_id" value="AIYPWZQP" id="order_id" />
		<input type="hidden" name="package_id" value="72" id="package_id" />
		<input type="hidden" name="departure_id" value="648" id="departure_id" />

		<script type="text/javascript" src="/mstravel/vendor/jquery/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="/mstravel/vendor/owlcarousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/mstravel/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/mstravel/vendor/theme/main.js"></script>
		<script src="/mstravel/vendor/datepicker/dist/datepicker.js"></script>
		<script type="text/javascript">
			$('[data-toggle="datepicker"]').datepicker({
				format: 'yyyy-mm-dd'
			});
		</script>
	</body>
</html>