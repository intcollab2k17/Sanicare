<?php include 'header.php';?>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<?php include 'header_nav.php';?>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Contact Us</h1>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-contact-section">
		<div class="row">
			<div class="col-md-6">
				<div id="map" class="fh5co-map"></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<h3>Our Address</h3>
					<p>Located at the heat of City of Smile along with the beautiful smile of every bacoleño</p>
					<ul class="contact-info">
						<li><i class="ti-map"></i>San Juan St, Bacolod, Negros Occidental</li>
						<li><i class="ti-mobile"></i></li>
						<li><i class="ti-envelope"></i><a href="#">seabreezehotel@gmail.com</a></li>
						<li><i class="ti-home"></i><a href="#">seabreezehotel.69.it</a></li>
					</ul>
				</div>
				<div class="col-md-12">
					<div class="row">
					<form method = "POST">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name = "fullname" required="true">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name = "email" required="true">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required="true"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<button name = "send" value="Send Message" class="btn btn-primary">Send Message</button>
							</div>
						</div>
						<?php 
							if(isset($_POST['send'])){
								$fullname = $_POST['fullname'];
								$email = $_POST['email'];
								$message = $_POST['message'];
								mysqli_query($con,"INSERT INTO message(fullname,email,message) 
								VALUES('$fullname','$email','$message')")or die(mysqli_error());
								$to = "rgb2k15@gmail.com";
								$subject = "Sea Breeze Hotel Response";
								$message = "
								<html>
								<head>
								<title>Sea Breezze Hotel Bacolod</title>
								</head>
								<body>
								<p>Your Request to us has been accepted</p>
								<table>
								<tr>
								<th>Firstname</th>
								<th>Lastname</th>
								</tr>
								<tr>
								<td>sadsad</td>
								<td>Hahahahahahah</td>
								</tr>
								</table>
								</body>
								</html>
								";
								// Always set content-type when sending HTML email
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								// More headers
								$headers .= 'From: <webmaster@example.com>' . "\r\n";
								$headers .= 'Cc: rgb2k16@gmail.com' . "\r\n";
								mail($to,$subject,$message,$headers);
									echo "<script>alert('Thank you for sending us your message')</script>";
							}							
						?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<?php include 'footer.php';?>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/custom.js"></script>

</body>
</html>