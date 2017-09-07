<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Sea Breeze Hotel Bacolod</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Rooms</a>
								<ul class="fh5co-sub-menu">
								<?php include 'dbcon.php';
						
							$querym=mysqli_query($con,"select * from room_category")or die(mysqli_error($con));
								while ($rowm=mysqli_fetch_array($querym)){
								$room_category_id=$rowm['room_category_id'];													
								
								?>  
								 	<li><a href="hotel.php?id=<?=$room_category_id;?>"><?=$rowm['category_name'];?></a></li>
								 <?php } ?>
									<!-- <li>
										<a href="#" class="fh5co-sub-ddown">King Hotel</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
											<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
											<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
											<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
										</ul>
									</li> -->
									<!-- <li><a href="#">Five Star Hotel</a></li>  -->
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							<!-- <li><a href="blog.html">Blog</a></li> -->
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>