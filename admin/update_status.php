<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['reservation_id'];
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
	 $reservation_status = $_POST['reservation_status']; 
	 $r_code = $_POST['r_code'];
	 
	 mysqli_query($con,"UPDATE reservation SET reservation_status='$reservation_status' where reservation_id='$id'")
	 or die(mysqli_error($con)); 

$to = $email;
$subject = "Sea Breeze Hotel Response";

$message = "
<html>
<head>
<title>Sea Breezze Hotel Bacolod</title>
</head>
<body>
<p>Your Request to us has been ".$reservation_status." </p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Reservation Code</th>
</tr>
<tr>
<td>".$firstname."</td>
<td>".$lastname."</td>
<td>".$r_code."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";
mail($to,$subject,$message,$headers);

echo "<script type='text/javascript'>alert('Successfully Updated Sending Email to client');</script>";
echo "<script>document.location='reservation_pending.php'</script>";
}

 ?>