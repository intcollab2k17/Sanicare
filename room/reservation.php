<?php
$room = $_GET['id']; 
?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Sea Breeze Hotel Bacolod</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../admin/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../admin/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="../admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/select2/select2.css"/>




<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="../admin/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="../admin/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../admin/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="../admin/assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../admin/assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="../admin/assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style>
	.new-row{
		margin-left:0px !important;
	}
</style>
</head>
<body class="page-md page-header-fixed">
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
				<h3 class = "center">Sea Breeze Hotel</h3>
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
	<div class="col-md-12">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-green-haze">
								<i class="icon-user font-green-haze"></i>
								<span class="caption-subject bold uppercase"> Personal Information</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only green" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only red" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" action  = "add_reservation.php" method = "POST" class="form-horizontal" id="submit_form">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Firstname</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name = "firstname" id="form_control_1" placeholder="Enter your first name">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Lastname</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name = "lastname" id="form_control_1" placeholder="Enter your last name">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Email Address</label>
										<div class="col-md-10">
											<input type="email" class="form-control" name = "email" id="form_control_1" placeholder="Enter your email address">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Contact Number</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="contact_number" id="form_control_1" placeholder="enter phone number or mobile number">
											<div class="form-control-focus">
											</div>
										</div>
									</div>										
								
								<div class="caption font-green-haze">
									<i class="icon-settings font-green-haze"></i>
									<span class="caption-subject bold uppercase"> Other Information</span>
								</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Home Address</label>
										<div class="col-md-10">
											<textarea class="form-control" name="address"></textarea>
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">City</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="city" id="form_control_1" placeholder="">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="control-label col-md-2">Gender <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<select name = "gender" class= "form-control">
															<option></option>
															<option>Male</option>
															<option>Female</option>
														</select>
														<div id="form_gender_error">
														</div>
													</div>
									</div>
									<div class="caption font-green-haze">
									<i class="icon-settings font-green-haze"></i>
									<span class="caption-subject bold uppercase"> Reservation Information</span>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Selected Hotel</label>
										<div class="col-md-10">
											<?php include 'dbcon.php';
											$querym=mysqli_query($con,"select * from room WHERE room_id = '$room'")or die(mysqli_error($con));	
													 	$row=mysqli_fetch_array($querym)
														?>												
														<input type="text" class="form-control" name = "room_name" value = "Room# <?=$row['room_number'];?>" placeholder = "<?=$row['room_number'];?>" disabled/>
														<input type = "hidden" name = "room_id" value= "<?=$room?>">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Room Rate</label>
										<div class="col-md-10">
											Php. <input type="text" class="form-control" value= "<?=$row['room_rate'];?>" name="room_rate" id="form_control_1" placeholder="" disabled>
											<div class="form-control-focus">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-2">Date Check In</label>
										<div class="col-md-3">
											<input class="form-control form-control-inline input-medium date-picker" name = "check_in" size="16" type="text" value="">
											<span class="help-block">
											Select date </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-2">Date Check out</label>
										<div class="col-md-3">
											<input class="form-control form-control-inline input-medium date-picker" name = "check_out" size="16" type="text" value="">
											<span class="help-block">
											Select date </span>
										</div>
									</div>
									<div class="form-group form-md-line-input">
										<label class="col-md-2 control-label" for="form_control_1">Number of Person</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="number_of_person" id="form_control_1" placeholder="">
											<div class="form-control-focus">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-2 col-md-10">
											<button type="button" class="btn default">Cancel</button>
											<button type="submit" class="btn blue">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	
</div>
			<!-- END PAGE CONTENT-->
		
	
	<!-- END CONTENT -->
<script src="../admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../admin/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script type="text/javascript" src="../admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../admin/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../admin/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../admin/assets/admin/pages/scripts/components-pickers.js"></script>
<script src="../admin/assets/admin/pages/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           ComponentsPickers.init();
        });   
    </script>
<!-- END BODY -->
</html>