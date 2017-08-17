<?php 
include 'header.php';

?>

<body>
<style>
	.form-group {
    margin-bottom: 0px;
	}
</style>
<div class = "container">
	
	<div class = "clearfix">
	</div>
	<div class = "row">
		<div class = "panel panel-success">
			<div class = "panel-heading">
				<a href="index.php"><i class = "fa fa-arrow-left"></i> Back</a>		
			</div>
				<?php
					include('dbcon.php');
					$rcode = $_REQUEST['rcode'];	
					$query=mysqli_query($con,"select * from reservation natural join room where r_code='$rcode'")or die(mysqli_error($con));
					$row=mysqli_fetch_array($query)	
				?>
			<div class = "panel-body">
				<h3 style = "text-align:center;">Reservation Status</h3>
				<div class ="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<div>
						<h5>Status : <span class = "label label-success"><?=$row['reservation_status'];?></span></h5>
					</div>
				</div>
				<div class = "col-lg-6 col-md-4 col-sm-12 col-xs-12">
					<div class = "panel panel-default col-lg-12">
						<div class ="panel-body">
						<h4>Personal Information</h4>
							<div class = "form-group">
								<label>First name :</label> <?=$row['firstname'];?>
							</div>
							<div class = "form-group">
								<label>Last name :</label> <?=$row['lastname'];?>
							</div>
							<div class = "form-group">
								<label>Email Address :</label> <?=$row['email'];?>
							</div>
							<div class = "form-group">
								<label>Contact Number :</label> <?=$row['contact_number'];?>
							</div>
						</div>
					</div>
				</div>
				<div class = "col-lg-6 col-md-4 col-sm-12 col-xs-12">
					<div class = "panel panel-default col-lg-12">
						<div class ="panel-body">
						<h4>Other Info</h4>
							<div class = "form-group">
								<label>Home address :</label> <?=$row['address'];?>
							</div>
							<div class = "form-group">
								<label>City :</label> <?=$row['city'];?>
							</div>
							<div class = "form-group">
								<label>Date reserved :</label> <?php echo date("F d, Y",strtotime($row['date_reserved']));?>
							</div>
							<div class = "form-group">
								<label>Gender :</label> <?=$row['gender'];?>
							</div>
						</div>
					</div>
				</div>
				<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class = "panel panel-default col-lg-12">
						<div class ="panel-body">
						<h4>Reservation Info</h4>
							<div class = "form-group">
								<label>Room No. :</label> <?=$row['room_number'];?>
							</div>
							<div class = "form-group">
								<label>Room rate :</label> <?=$row['room_rate'];?>
							</div>
							<div class = "form-group">
								<label>Date Check in :</label> <?php echo date("F d, Y",strtotime($row['check_in']));?>
							</div>
							<div class = "form-group">
								<label>Date Check Out :</label> <?php echo date("F d, Y",strtotime($row['check_out']));?>
							</div>
						</div>
					</div>
				</div>


			</div>
		

		</div>
	</div>
</div>



	
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

	<script src="js/custom.js"></script>

</body>
</html>