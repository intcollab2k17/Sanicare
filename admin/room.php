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
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
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
								<th>Room Number</th>
								<th>Room Description</th>						
								<th>Image</th>						
								<th>Rate</th>								
								<th>Edit</th>
							</tr>
							</thead>
							<tbody>
							<?php
								include('dbcon.php');
								    $query=mysqli_query($con,"select * from room LEFT JOIN room_category ON room_category.room_category_id = room.room_category_id order by room_id")or die(mysqli_error());
								      while ($row=mysqli_fetch_array($query)){
								        $room_id=$row['room_id'];							       						       
							?>
							<tr class="odd gradeX">
								
								
								<td>Room#<?= $row['room_number'];?></td>
								<td><?= $row['room_desc'];?></td>									
								<td><img src = "uploads/<?= $row['room_pic'];?>" style = "width:100px; height:80px;"/></td>		
								<td>Php.<?= $row['room_rate'];?>.00</td>
								<td>
									<a href = "#update_room<?=$row['room_id']?>" class = "btn btn-xs btn-success" data-toggle = "modal" data-target = "#update_room<?=$row['room_id']?>"><i class = "fa fa-pencil"></i> Edit</a>

								</td>
							</tr>
							<div class="modal fade" id="update_room<?=$row['room_id']?>" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Edit Room</h4>
										</div>
										<div class="modal-body">
											<form  method="POST" id = "form" action ="update_room.php" enctype="multipart/form-data">
								<div class="form-body">			
								<input type="hidden" name = "room_id" value="<?=$row['room_id']?>">						
									<div class="form-group form-md-line-input has-info">
										<select name = "room_category_id"class="form-control" id="form_control_1" required="true">
										<option><?=$row['category_name'];?></option>				
										<option></option>				
										<?php	
											include 'dbcon.php';								
											$query1=mysqli_query($con,"select * from room_category")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['room_category_id'];
											?>
											<option value = "<?= $row1['room_category_id'];?>"><?= $row1['category_name'];?></option>
											<?php }?>
										</select>
										<label for="form_control_1">Room Category</label>
									</div>
									<div class="form-group form-md-line-input">
										<input type="number" class="form-control" name = "room_number" id="form_control_1" placeholder=" Room number" value = "<?=$row['room_number']?>" required>
										<label for="form_control_1">Room Number</label>
										<span class="help-block">Enter the room number here...</span>
									</div>
									<div class="form-group form-md-line-input">
										<textarea class="form-control" name = "room_desc" rows="3" placeholder="Enter room description here..." required><?=$row['room_desc']?></textarea>
										<label for="form_control_1">Desciption</label>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<div class="input-group">
											<span class="input-group-addon">₱</span>
											<input type="text" name = "room_rate" class="form-control" value ="<?=$row['room_rate']?>">
											<span class="input-group-addon">.00</span>
											<label for="form_control_1">Room Rate</label>
										</div>
									</div>															
								</div>
								<br/>
								<div class="form-actions noborder">
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
				</div>
				<div class = "col-lg-4 col-sm-4 col-md-4 col-xs-4">					
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-plus font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Add Rooms</span>
							</div>							
						</div>
						<div class="portlet-body form">
							<form  method="POST" id = "form" action ="add_room.php" enctype="multipart/form-data">
								<div class="form-body">									
									<div class="form-group form-md-line-input has-info">
										<select name = "room_category_id"class="form-control" id="form_control_1">					
										<?php	
											include 'dbcon.php';								
											$query1=mysqli_query($con,"select * from room_category")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['room_category_id'];
											?>
											<option value = "<?= $row1['room_category_id'];?>"><?= $row1['category_name'];?></option>
											<?php }?>
										</select>
										<label for="form_control_1">Room Category</label>
									</div>
									<div class="form-group form-md-line-input">
										<input type="number" class="form-control" name = "room_number" id="form_control_1" placeholder=" Room number" required>
										<label for="form_control_1">Room Number</label>
										<span class="help-block">Enter the room number here...</span>
									</div>
									<div class="form-group form-md-line-input">
										<textarea class="form-control" name = "room_desc" rows="3" placeholder="Enter room description here..." required></textarea>
										<label for="form_control_1">Desciption</label>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<div class="input-group">
											<span class="input-group-addon">₱</span>
											<input type="text" name = "room_rate" class="form-control">
											<span class="input-group-addon">.00</span>
											<label for="form_control_1">Room Rate</label>
										</div>
									</div>
									<div class="form-group form-md-line-input has-warning">
										<div class="input-group">											
											<input type="file" name = "image" class="form-control">											
											<label for="form_control_1">Room Picture</label>
										</div>
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
