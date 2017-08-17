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
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Rooms <small></small></h1>
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Rooms Table
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
								<th>Facilities ID</th>
								<th>Facilities</th>
								<th>Status</th>
							</tr>
							</thead>
							<tbody>
							<?php
								include('dbcon.php');
								    $query=mysqli_query($con,"select * from facilities order by facilities_id")or die(mysqli_error());
								      while ($row=mysqli_fetch_array($query)){
								        $facilities_id=$row['facilities_id'];
								?>
							<tr class="odd gradeX">
								<td><?= $row['facilities_id'];?></td>
								<td><?= $row['facilities_name'];?></td>
								<td><a href = "#" class = "btn btn-success"><i class = "fa fa-pencil"></i> Edit</a></td>
							</tr>
							<?php } ?>						
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>

				<div class = "col-lg-4 col-sm-4 col-md-4 col-xs-4">					
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-plus font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Add Facilities</span>
							</div>							
						</div>
						<div class="portlet-body form">
							<form  method="POST" id = "form" action ="add_facilities.php" enctype="multipart/form-data">
								<div class="form-body">									
									
									<div class="form-group form-md-line-input">
										<input type="number" class="form-control" name = "room_number" id="form_control_1" placeholder=" Room number" required>
										<label for="form_control_1">Room Number</label>
										<span class="help-block">Enter the room number here...</span>
									</div>													
								</div>
								<div class="form-actions noborder">
									<button  name = "submit" class="btn btn-block blue">Submit</button>				
								</div>
							</form>
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
