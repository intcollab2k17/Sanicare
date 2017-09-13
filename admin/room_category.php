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
					<h1>Room Category <small></small></h1>
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Managed Table
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
								<th>Action</th>
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
								<td>
									<a href = "#update_category<?=$row['room_category_id']?>" class = "btn btn-xs btn-success" data-toggle = "modal" data-target = "#update_category<?=$row['room_category_id']?>"><i class = "fa fa-pencil"></i> Edit</a>

								</td>
							</tr>
							<div class="modal fade" id="update_category<?=$row['room_category_id']?>" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Category</h4>
										</div>
										<div class="modal-body">
											<form  method="POST" id = "form" action ="edit_room_category.php">
												<div class="form-body">
													<div class="form-group form-md-line-input">
														<input type="text" class="form-control" name = "category_name" id="form_control_1" placeholder=" Category name" value = "<?=$row['category_name']?>">
														<input type="hidden" class="form-control" name = "room_category_id" id="form_control_1" placeholder=" Category name" value = "<?=$row['room_category_id']?>">
														<label for="form_control_1">Room Category Name</label>
														<span class="help-block">Edit  the room category name here...</span>
													</div>									
												</div>
												<div class="form-actions noborder">
												<br/>
												<br/>
													<button  name = "submit" class="btn btn-block blue">Submit</button>				
												</div>
										</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
											
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
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
								<span class="caption-subject bold uppercase"> Add Category</span>
							</div>							
						</div>
						<div class="portlet-body form">
							<form  method="POST" id = "form" action ="add_room_category.php">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" name = "category_name" id="form_control_1" placeholder=" Category name" required>
										<label for="form_control_1">Room Category Name</label>
										<span class="help-block">Enter the room category name here...</span>
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