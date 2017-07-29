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
					<h1>Room Rate <small></small></h1>
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Room Rate List
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
								<th>Category ID</th>
								<th>Category Name</th>								
							
								<th>Status</th>
							</tr>
							</thead>
							<tbody>
							<?php
								include('dbcon.php');
								    $query=mysqli_query($con,"select * from room_category order by category_name")or die(mysqli_error());
								      while ($row=mysqli_fetch_array($query)){
								        $room_category_id=$row['room_category_id'];
								        $category_name=$row['category_name'];  							       
								?>
							<tr class="odd gradeX">
								
								<td><?= $row['room_category_id'];?></td>
								<td><?= $row['category_name'];?></td>							
								<td>
									<span class="label label-sm label-success">Approved </span>
								</td>
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
								<span class="caption-subject bold uppercase"> Add Rate</span>
							</div>							
						</div>
						<div class="portlet-body form">
							<form  method="POST" id = "form" action ="add_room_rate.php">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										Php.<input type="text" class="form-control" name = "room_rate" id="form_control_1" placeholder="" required>
										<label for="form_control_1">Room Rate</label>
										<span class="help-block">Enter room rate in Peso</span>
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