<?php 
include('dbcon.php');	
$room_id = $_POST['room_id'];	
$room_category_id = $_POST['room_category_id'];	
$room_number = $_POST['room_number'];	
$room_desc = $_POST['room_desc'];	
$room_rate = $_POST['room_rate'];	

	mysqli_query($con,"UPDATE room SET room_category_id = '$room_category_id', room_number = '$room_number', room_desc = '$room_desc', room_rate = '$room_rate' WHERE room_id = '$room_id'")or die(mysqli_error()); 			
			echo "<script>alert('Data Successfully Updated');</script>";
			echo "<script>document.location='room.php'</script>";
?>