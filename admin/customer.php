<?php include 'header_default.php';?>

<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<?php include 'header_top.php';?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<?php include 'sidebar.php';?>		
	</div>
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Rooms <small></small></h1>
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Customer Report Table
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>								
							</div>
						</div>
						<div class="portlet-body">							
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>							  
							<tr>								
								<th>Customer Name</th>
								<th>Room Number</th>						
								<th>Status</th>						
								<th>Date Check In</th>						
								<th>Date Check out</th>						
								<th>No. of Days stayed</th>						
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php
								include('dbcon.php');
								    $query=mysqli_query($con,"select * from reservation LEFT JOIN room ON room.room_id = reservation.room_id WHERE reservation_status = 'Cancel' OR reservation_status = 'Accept' OR reservation_status = 'Finished'")or die(mysqli_error());
								      while ($row=mysqli_fetch_array($query)){
								        $reservation_id=$row['reservation_id'];
								        $date_check = new DAteTime($row['check_in']);				       						       
								        $date_out = new DAteTime($row['check_out']);	
								        $diff = $date_out->diff($date_check)->format("%a");				       						       
							?>
							<tr class="odd gradeX">
								
								
								<td><?=$row['firstname']?></td>									
								<td>Room#<?= $row['room_number'];?></td>
								<td><label class = "label label-primary"><?=$row['reservation_status']?></label></td>
								<td><?=date("F d, Y", strtotime($row['check_in']));?></td>
								<td><?=date("F d, Y", strtotime($row['check_out']));?></td>
								<td><?=$diff?></td>
								
								<td>
									<a href = "view_customer_details.php?code=<?=$row['r_code']?>" class = "btn btn-xs btn-success"><i class = "fa fa-eye"></i> View Info</a>

								</td>
							</tr>
							<?php } ?>						
							</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
				<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<?php include 'script.php';?>
</body>
<!-- END BODY -->
</html>
