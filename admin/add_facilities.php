<?php 
include('dbcon.php');	

$facilities_name = $_POST['facilities_name'];	

	$query2=mysqli_query($con,"select * from facilities where facilities_name='$facilities_name'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Product already exist!');</script>";
			echo "<script>document.location='facilities.php'</script>";  
		}
		else
		{			
			mysqli_query($con,"INSERT INTO facilities(facilities_name)VALUES('$facilities_name')")or die(mysqli_error()); 			
			echo "<script>document.location='facilities.php'</script>";
		}
?>