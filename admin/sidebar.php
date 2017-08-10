<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">			
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li>
					<a href="dashboard.php">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<?php
   				 $query=mysqli_query($con,"select COUNT(*) as count from reservation where reservation_status='Pending'")or die(mysqli_error($con));
     				 $row=mysqli_fetch_array($query);
      				  $count=$row['count'];
				?>
				<li class = "open" style = "pointer-events:none;"><a href="reservation_pending.php"><i class="fa fa-folder-o"></i>Reservation </a></li>	
				<li><a href="reservation_pending.php"><i class="fa fa-exclamation-triangle"></i> Pending Reservation <span class="badge badge-roundless badge-danger"><?php echo $row['count'];?></span></a></li>
				<?php
   				 $query=mysqli_query($con,"select COUNT(*) as count from reservation where reservation_status='Accepted'")or die(mysqli_error($con));
     				 $row=mysqli_fetch_array($query);
      				  $count=$row['count'];
				?>	
						<li><a href="reservation_accepted.php"><i class="fa fa-check"></i> Accepted Reservation <span class="badge badge-roundless badge-success"><?php echo $row['count'];?></span></a></li>					

						<li><a href="reservation_cancel.php"><i class="icon-trash"></i>Cancelled Reservation</a></li>					
						<li><a href="reservation_finished.php"><i class="fa fa-thumbs-up"></i> Finished Reservation</a></li>	


				<li class = "open">&nbsp;</li>
				<li>
					<a href="javascript:;">
					<i class="icon-wrench"></i>
					<span class="title">Room Maintenace</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li><a href="room_category.php"><i class="icon-folder"></i>Room Category</a></li>					
						<li><a href="facilities.php"><i class="icon-folder"></i>Room Facilities</a></li>						
						<li><a href="room.php"><i class="icon-folder"></i>Room List</a></li>						
					</ul>
				</li>				
				<li>
					<a href="javascript:;">
					<i class="fa fa-sellsy"></i>
					<span class="title">Reports</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li><a href="reservation_pending.php"><i class="fa fa-money"></i>Sales</a></li>	
						<li><a href="reservation_accepted.php"><i class="fa fa-file-zip-o"></i>Reservation</a></li>
					</ul>
				</li>
				<li><a href="messages.php"><i class="icon-envelope"></i>Messages</a></li>	
			</ul>
		</div>