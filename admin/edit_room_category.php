<?php 
include('dbcon.php');	
$category_id = $_POST['room_category_id'];	
$category_name = $_POST['category_name'];	
	mysqli_query($con,"UPDATE room_category SET category_name = '$category_name' WHERE room_category_id = '$category_id'")or die(mysqli_error()); 			
			echo "<script>alert('Data Successfully Updated');</script>";
			echo "<script>document.location='room_category.php'</script>";
?>