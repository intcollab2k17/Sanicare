<?php 
include('dbcon.php');	
$category_name = $_POST['category_name'];	
	mysqli_query($con,"INSERT INTO room_category(category_name) 
			VALUES('$category_name')")or die(mysqli_error()); 			
			echo "<script>document.location='room_category.php'</script>";
?>