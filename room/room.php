<?php include 'header_room.php';?>
<body class="page-md page-header-fixed">
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
				<h3>Sea Breeze Hotel</h3>
			</a>			
		</div>
		
		
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">			
			<div class="top-menu">			
			</div>
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<div class="page-container">
		<div class="page-container">
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
					<?php
						
							$querym=mysqli_query($con,"select * from room natural join room_category where room_id='$id' order by category_name")or die(mysqli_error($con));
								while ($rowm=mysqli_fetch_array($querym)){								
								$room_number=$rowm['room_number'];
								$room_desc=$rowm['room_desc'];								
								$room_rate=$rowm['room_rate'];								
								$room_pic=$rowm['room_pic'];								
								
					?> 
						<div class="col-md-9 news-page blog-page">
							<div class="row">
								<div class="col-md-12 blog-tag-data">
									
									<img style = "width:100%;" src="../admin/uploads/<?=$room_pic?>" class="img-responsive" alt="">								
									<div class="news-item-page">
									<h3 style="margin-top:0">Room# <?=$room_number;?></h3>
										<p>
											 <?=$room_desc?>
										</p>										
									</div>									
							</div>
						</div>
					</div>
					
					<div class= "col-lg-3 col-sm-3 col-md-3 col-xs-3">
						<span style="font-size:32px;">Rate :</span> Php. <?=$room_rate?>.00
						<div class = "clearfix">
							&nbsp;
						</div>
						<div class = "row">
							<a href = "" class = "btn-success btn btn-block btn-lg">Book Now</a>
						</div>
					</div>
					<?php }?>		
				</div>
			</div>
		</div>
	</div>
<script src="../admin/assets//global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../admin/assets//global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../admin/assets//global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../admin/assets//global/scripts/metronic.js" type="text/javascript"></script>
<script src="../admin/assets//admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../admin/assets//admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>