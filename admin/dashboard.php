<?php include 'header_admin.php';?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php include 'header_top.php';?>
<div class="clearfix">
</div>
<div class="page-container">	
	<div class="page-sidebar-wrapper">		
		<?php include 'sidebar.php';?>
	</div>	
	<div class="page-content-wrapper">
		<div class="page-content">			
			<div class="page-head">				
				<div class="page-title">
					<h1>Reservation Status <small></small></h1>
				</div>				
			</div>
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						<?php
			   				 $query=mysqli_query($con,"select COUNT(*) as count from reservation where reservation_status='Pending'")or die(mysqli_error($con));
			     				 $row=mysqli_fetch_array($query);
			      				  $count=$row['count'];
						?>
							<div class="number">
								<h3 class="font-green-sharp"><?=$count;?><small class="font-green-sharp"></small></h3>
								<small>Pending Reservation</small>
							</div>
							<div class="icon">
								<i class="fa fa-exclamation-triangle"></i>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						<?php
			   				 $query=mysqli_query($con,"select COUNT(*) as count from reservation where reservation_status='Accepted'")or die(mysqli_error($con));
			     				 $row=mysqli_fetch_array($query);
			      				  $count=$row['count'];
						?>
							<div class="number">
								<h3 class="font-blue-sharp"><?=$count;?></h3>
								<small>Accepted</small>
							</div>
							<div class="icon">
								<i class="fa fa-check"></i>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						<?php
			   				 $query=mysqli_query($con,"select COUNT(*) as count from reservation where reservation_status='Cancel'")or die(mysqli_error($con));
			     				 $row=mysqli_fetch_array($query);
			      				  $count=$row['count'];
						?>
							<div class="number">
								<h3 class="font-red-haze"><?=$count;?></h3>
								<small>Cancelled</small>
							</div>
							<div class="icon">
								<i class="fa fa-trash-o"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
						<?php
			   				 $query=mysqli_query($con,"select COUNT(*) as count from reservation where reservation_status='Finished'")or die(mysqli_error($con));
			     				 $row=mysqli_fetch_array($query);
			      				  $count=$row['count'];
						?>
							<div class="number">
								<h3 class="font-purple-soft"><?=$count?></h3>
								<small>Finished</small>
							</div>
							<div class="icon">
								<i class="fa fa-thumbs-up"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					
				</div>
				<div class="col-md-6 col-sm-12">
					
				</div>
				<div class = "col-xs-12 col-lg-12 col-md-12">
				<div class = "panel panel-success">
					<div class = "panel-heading">
						<h5>Monthly Sales Report</h5>
					</div>
					<div class = "panel-body">
						<div id = "graph"></div>
					</div>
				</div>
				</div>
			</div>
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
<?php include('../includes/js.php');?> 

<script type="text/javascript">
   jQuery(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graph',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  
                  title: {
                      text: 'Total Monthly Sales'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data1.php", function(json) {
     	 options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];
            
            
            
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graph1',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  
                  title: {
                      text: 'Total Monthly Reservations'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#f00'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data_reserve1.php", function(json) {
      options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];
            
            
            
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>