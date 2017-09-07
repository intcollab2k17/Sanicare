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
							<a href = "reservation.php?id=<?=$rowm['room_id'];?>" class = "btn-success btn btn-block btn-lg">Book Now</a>
						</div>
						<br/>
						<div class="fb-page" data-href="https://www.facebook.com/Sea-Breeze-Hotel-1198620890242990/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Sea-Breeze-Hotel-1198620890242990/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Sea-Breeze-Hotel-1198620890242990/">Sea Breeze Hotel</a></blockquote></div>	
						<hr>
						<blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:37.45454545454546% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BYvmMZ1gtAJ/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Sea Breeze (@seabreezebacolodcity)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-09-07T14:47:45+00:00">Sep 7, 2017 at 7:47am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1079040008850867";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>