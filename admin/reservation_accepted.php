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
					<h1>Reservation <small></small></h1>
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Accepted Reservation
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
								<th>Firstname</th>
								<th>Lastname</th>						
								<th>Email</th>						
								<th>Room Number</th>
								
								<th>Current Status</th>
								<th>Update Status</th>
							</tr>
							</thead>
							<tbody>
								<?php
						
							$querym=mysqli_query($con,"select * from reservation LEFT JOIN room ON room.room_id = reservation.room_id WHERE reservation_status = 'Accepted'")or die(mysqli_error($con));
								while ($row=mysqli_fetch_array($querym)){
								$reservation_id = $row['reservation_id'];							
							?>  	
								<tr class="odd gradeX">
								
								
								<td><?= $row['firstname'];?></td>
								<td><?= $row['lastname'];?></td>									
								<td><?= $row['email'];?></td>		
								<td>Room# <?= $row['room_number'];?></td>							
								<td><span class = "label label-success"><?= $row['reservation_status'];?></span></td>							
								<td>
									<form method = "POST" action = "send_email.php">
										<input type = "hidden" name = "firstname" value = "<?=$row['firstname'];?>">
										<a href="#update<?=$row['reservation_id']?>" role="button" class="btn btn-danger" data-target = "#update<?=$row['reservation_id'];?>" data-toggle="modal">
											<i class = "fa fa-pencil"></i> cancel reservation
										</a>
									</form>
									<a href="#finish<?=$row['reservation_id']?>" role="button" class="btn btn-success" data-target = "#finish<?=$row['reservation_id'];?>" data-toggle="modal">
											<i class = "fa fa-pencil"></i> Finished reservation
										</a>
								</td>
							</tr>

							<div id="update<?=$row['reservation_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">										
											<h4 class="modal-title">Edit Status</h4>
										</div>
										<form method="POST" action = "update_status.php">
										<div class="modal-body">


										<center><p class = "">Are you sure you want to cancel reservation?</p></center>
											<input type = "hidden" name = "reservation_id" value = "<?=$row['reservation_id'];?>">
											<input type = "hidden" name = "firstname" value = "<?=$row['firstname'];?>">
											<input type = "hidden" name = "lastname" value = "<?=$row['lastname'];?>">
											<input type = "hidden" name = "email" value = "<?=$row['email'];?>">
											<input type = "hidden" name = "reservation_status" value = "Cancel">
											
											<button name = "update" class = "btn btn-block btn-danger">Cancel Reservation</button>
										</div>
										<div class="modal-footer">
											
										</div>
										</form>
									</div>
								</div>
							</div>

							<div id="finish<?=$row['reservation_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">										
											<h4 class="modal-title">Edit Status</h4>
										</div>
										<form method="POST" action = "finished_status.php" class = "form-horizontal">
										<div class="modal-body">
										<center><p class = "">Finished Reservation?</p></center>
											<input type = "hidden" name = "reservation_id" value = "<?=$row['reservation_id'];?>">
											<input type = "hidden" name = "firstname" value = "<?=$row['firstname'];?>">
											<input type = "hidden" name = "lastname" value = "<?=$row['lastname'];?>">
											<input type = "hidden" name = "email" value = "<?=$row['email'];?>">
											<input type = "hidden" name = "reservation_status" value = "Finished">
											<div class = "form-group">
												<label>Total amount to be payed!</label><br/>
												
												<input  id = "number"class = "form-control" name = "sales_amount" type = "text" required placeholder="Php 0.00">
											</div>

											
											<button name = "update" class = "btn btn-block btn-success">Finished Reservation</button>
										</div>
										<div class="modal-footer">
											
										</div>
										</form>
									</div>
								</div>
							</div>


							<?php } ?>						
							</tbody>
							</table>
						</div>
					</div>
				</div>
				<div
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
<script>
	$('#number').keypress(function(event) {
    var $this = $(this);
    if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
       ((event.which < 48 || event.which > 57) &&
       (event.which != 0 && event.which != 8))) {
           event.preventDefault();
    }

    var text = $(this).val();
    if ((event.which == 46) && (text.indexOf('.') == -1)) {
        setTimeout(function() {
            if ($this.val().substring($this.val().indexOf('.')).length > 3) {
                $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
            }
        }, 1);
    }

    if ((text.indexOf('.') != -1) &&
        (text.substring(text.indexOf('.')).length > 2) &&
        (event.which != 0 && event.which != 8) &&
        ($(this)[0].selectionStart >= text.length - 2)) {
            event.preventDefault();
    }      
});

$('#number').bind("paste", function(e) {
var text = e.originalEvent.clipboardData.getData('Text');
if ($.isNumeric(text)) {
    if ((text.substring(text.indexOf('.')).length > 3) && (text.indexOf('.') > -1)) {
        e.preventDefault();
        $(this).val(text.substring(0, text.indexOf('.') + 3));
   }
}
else {
        e.preventDefault();
     }
});
</script>



</body>
<!-- END BODY -->
</html>
