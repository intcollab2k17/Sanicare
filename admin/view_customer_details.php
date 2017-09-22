<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sea Breeze Hotel Bacolod</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="../css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="../css/cs-select.css">
	<link rel="stylesheet" href="../css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="../css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		#availability .a-col.action button {
    align-items: center;
    vertical-align: middle;
    heght: 100%;
    line-height: 20px;
    padding: 14px;
    display: block;
    width: 100%;
    color: #fff;
    text-align: center;
    background: #3c4146;
    text-transform: uppercase;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}
#availability .a-col {
	width: 100% !important;
}
#availability .a-col.action {
	width:100% !important;
}
	</style>

</head>

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
				<a href="customer.php"><i class = "fa fa-arrow-left"></i> Back</a>		
			</div>
				<?php
					include('dbcon.php');
					$rcode = $_REQUEST['code'];	
					$query=mysqli_query($con,"select * from reservation LEFT JOIN room ON room.room_id = reservation.room_id LEFT JOIN sales ON sales.reservation_id = reservation.reservation_id where r_code='$rcode'")or die(mysqli_error($con));
					$row=mysqli_fetch_array($query);
					$date_check = new DAteTime($row['check_in']);				       						       
				    $date_out = new DAteTime($row['check_out']);	
					$diff = $date_out->diff($date_check)->format("%a");
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
				<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
							<div class = "form-group">
								<label> No. of days stayed :</label> <?=$diff;?> day/s
							</div>
						</div>
					</div>
				</div>
				<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class = "panel panel-default col-lg-12">
						<div class ="panel-body">
						<h4>Payment Information </h4>
							<div class = "form-group">
								<label>Amount Paid</label> <span class = "label label-warning">Php. <?=$row['sales_amount'];?></span>
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