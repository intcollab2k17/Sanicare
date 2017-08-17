<?php 
include('dbcon.php');	
$room_category_id = $_POST['room_category_id'];
$room_number = $_POST['room_number'];
$room_desc = $_POST['room_desc'];
$room_rate = $_POST['room_rate'];	

	$query2=mysqli_query($con,"select * from room where room_number='$room_number'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Product already exist!');</script>";
			echo "<script>document.location='room.php'</script>";  
		}
		else
		{	

			$pic = $_FILES["image"]["name"];
			if ($pic=="")
			{
				$pic="default.gif";
			}
			else
			{
				$pic = $_FILES["image"]["name"];
				$type = $_FILES["image"]["type"];
				$size = $_FILES["image"]["size"];
				$temp = $_FILES["image"]["tmp_name"];
				$error = $_FILES["image"]["error"];
			
				if ($error > 0){
					die("Error uploading file! Code $error.");
					}
				else{
					if($size > 100000000000) //conditions for the file
						{
						die("Format is not allowed or file size is too big!");
						}
				else
				      {
					move_uploaded_file($temp, "uploads/".$pic);
				      }
					}
			}
			mysqli_query($con,"INSERT INTO room(room_category_id,room_number,room_desc,room_rate,room_pic) 
			VALUES('$room_category_id','$room_number','$room_desc','$room_rate','$pic')")or die(mysqli_error()); 			
			echo "<script>document.location='room.php'</script>";
		}
?>