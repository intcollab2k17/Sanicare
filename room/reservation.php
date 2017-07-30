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
	<div class="page-content-wrapper">
		<div class="page-content new-row">	
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Reservation Form - <span class="step-title">
								Step 1 of 4 </span>
							</div>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form action="#" class="form-horizontal" id="submit_form" method="POST">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Basic Info </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Profile Setup </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Reservation Set up </span>
												</a>
											</li>
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Confirm </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide your account details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Firstname <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="firstname"/>
														<span class="help-block">
														Provide your Firstname </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Lastname <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="lastname"/>
														<span class="help-block">
														Provide your Lastname </span>
													</div>
												</div>												
												<div class="form-group">
													<label class="control-label col-md-3">Email <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="email"/>
														<span class="help-block">
														Provide your email address </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Contact Number <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="contact_number"/>
														<span class="help-block">
														Provide your contact number </span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide your profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Home Address <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<textarea type="text" class="form-control" name="address"/></textarea>
														<span class="help-block">
														Provide your complete address </span>
													</div>
												</div>
													<div class="form-group">
													<label class="control-label col-md-3">City/Town <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="city"/>
														<span class="help-block">
														Provide your city or town </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="phone_number"/>
														<span class="help-block">
														Provide your phone number </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<label>
															<input type="radio" name="gender" value="M" data-title="Male"/>
															Male </label>
															<label>
															<input type="radio" name="gender" value="F" data-title="Female"/>
															Female </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>												
											
												
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Provide your billing and credit card details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Selected Hotel <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
													<?php include 'dbcon.php';
													 $querym=mysqli_query($con,"select * from room WHERE room_id = '$room'")or die(mysqli_error($con));	
													 	$row=mysqli_fetch_array($querym)
														?>												
														<input type="text" class="form-control" value = "Room# <?=$row['room_number'];?>" placeholder = "<?=$row['room_number'];?>" disabled/>
														<input type = "hidden" name = "room_id" value= "<?=$room?>">
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Room Rate<span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" value = "<?=$row['room_rate'];?>" name="room_rate" disabled="true"/>
														<span class="help-block">
														</span>
													</div>
												</div>												
												<div class="form-group">
													<label class="control-label col-md-3">Number of Person <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" maxlength="7" class="form-control" name="number_of_person"/>
														<span class="help-block">
													 </span>
													</div>
												</div>												
											</div>
											<div class="tab-pane" id="tab4">
												<h3 class="block">Confirm your account</h3>
												<h4 class="form-section">Basic Info</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Firstname:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="firstname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Fullname:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="fullname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="city">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Country:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="country">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="remarks">
														</p>
													</div>
												</div>
												<h4 class="form-section">Billing</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Card Holder Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_name">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Number:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_number">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">CVC:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_cvc">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_expiry_date">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Options:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="payment">
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<a href="javascript:;" class="btn default button-previous">
												<i class="m-icon-swapleft"></i> Back </a>
												<a href="javascript:;" class="btn blue button-next">
												Continue <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<button name = "save" class="btn green button-submit">
												Submit <i class="m-icon-swapright m-icon-white"></i>
												</button>
											</div>
										</div>
									</div>
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
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../admin/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../admin/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../admin/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../admin/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../admin/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../admin/assets/admin/pages/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormWizard.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>