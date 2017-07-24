<?php include 'header.php';
	$id = $_GET['id'];
?>

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
						<h1 class="text-center">Choose Our Hotel</h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-hotel-section">
		<div class="container">
				<?php
					include('dbcon.php');
					$query=mysqli_query($con,"select * from room_category WHERE room_category_id = $id")or die(mysqli_error($con));
					while ($row1=mysqli_fetch_array($query)){
					$room_category_id=$row1['room_category_id'];
					$category_name=$row1['category_name'];
				?>
				<h1><?=$category_name;?></h1>
			<div class="row">
			<?php
						
							$querym=mysqli_query($con,"select * from room natural join room_category where room_category_id='$room_category_id' order by category_name")or die(mysqli_error($con));
								while ($rowm=mysqli_fetch_array($querym)){
								$room_id=$rowm['room_id'];
								$room_number=$rowm['room_number'];
								$room_desc=$rowm['room_desc'];								
								$room_rate=$rowm['room_rate'];								
								$room_pic=$rowm['room_pic'];								
								
			?>  	
				<div class="col-md-4">				
					<div class="hotel-content">					
						<div class="hotel-grid" style="background-image: url(admin/uploads/<?=$rowm['room_pic']?>);">
							<div class="price"><small>For as low as</small><span>Php. <?=$rowm['room_rate']?>.00/per night</span></div>
							<a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
						</div>
						<div class="desc">
							<span class = "room-number"><a href="viewroom.php?.room_id=<?=$room_id?>">Room# <?=$rowm['room_number']?></a><a class = "pull-right btn btn-xs btn-success" href = "viewroom.php?.room_id=<?=$room_id?>">view more</a></span>
							<p><?=$rowm['room_desc'];?></p>
						</div>
					</div>					
				</div>		
				<?php }?>
		</div>
		<?php }?>
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

	<script src="js/custom.js"></script>

</body>
</html>