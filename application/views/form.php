<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Flight Booking Form a Flat Responsive Widget Template :: w3layouts </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="<?php echo base_url(); ?>assets/web/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/css/jquery-ui.css" />
	<!-- //Calendar -->
	<link href="<?php echo base_url(); ?>assets/web/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<!-- Time-script-CSS -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
		Flight Booking Form</h1>
		<div class="appointment-w3">
			<form action="<?php echo base_url('reservation/prosestambah'); ?>" method="post">
				<div class="personal">
					<h2>Personal Details</h2>
					<div class="main">
						<div class="form-left-w3l">

							<input type="text" class="top-up" name="name" placeholder="Name" required="">
						</div>
						<div class="form-right-w3ls ">

							<input type="text" class="top-up" name="lastname" placeholder="Last Name" required="">
							<div class="clearfix"></div>
						</div>

					</div>
					<div class="main">
						<div class="form-left-w3l">

							<input type="email" name="email" placeholder="Email" required="">
						</div>
						<div class="form-right-w3ls ">

							<input class="buttom" type="text" name="phonenumber" placeholder="Phone Number" required="">
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="information">
					<h3>Trip Information</h3>
					
					<div class="main">
						<div class="form-left-w3l">

							<input type="text" class="top-up" name="reservationcode" placeholder="Reservation Code" required="">
						</div>
						<div class="form-right-w3ls ">

							<input type="text" class="top-up" name="reservationat" placeholder="Reservation At" required="">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="main">
						<div class="form-left-w3l">

							<input type="text" id="datepicker" class="top-up" name="reservationdate" placeholder="Reservation Date" required="">
						</div>
						<div class="form-right-w3ls ">

							<input type="text" class="top-up" name="seatcode" placeholder="Seat Code" required="">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="main">
						<div class="form-left-w3l">

							<input type="text" class="top-up" name="customerid" placeholder="Customer Id" required="">
						</div>
						<div class="form-right-w3ls ">

							<input type="text" class="top-up" name="ruteid" placeholder="Rute Id" required="">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="main">
						<div class="form-left-w3l">
							<input type="text" id="timepicker" class="timepicker form-control hasWickedpicker" name="departat" placeholder="Depart At" required="">
						</div>
						<div class="form-right-w3ls ">
							<input type="text" class="top-up" name="userid" placeholder="User Id" required="">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="main">
						<div class="form-left-w3l">
							<input type="text" class="top-up" name="price" placeholder="Price" required="">
						</div>
						<div class="form-right-w3ls ">
							
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="btnn">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
			<div class="copy">
				<p>&copy;2018 Flight Booking Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
			</div>
			<!-- js -->
			<script type='text/javascript' src='<?php echo base_url(); ?>assets/web/js/jquery-2.2.3.min.js'></script>
			<!-- //js -->
			<!-- Calendar -->
			<script src="<?php echo base_url(); ?>assets/web/js/jquery-ui.js"></script>
			<script>
				$(function () {
					$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
				});
			</script>
			<!-- //Calendar -->
			<!-- Time -->
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/web/js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
			</script>
			<!-- //Time -->

		</body>

		</html>