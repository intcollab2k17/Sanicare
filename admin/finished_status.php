<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['reservation_id'];
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
	 $reservation_status = $_POST['reservation_status'];	 
	 $sales_amount = $_POST['sales_amount'];	 
	 $date = date('Y-d-m');
	 
	 mysqli_query($con,"UPDATE reservation SET reservation_status='$reservation_status' where reservation_id='$id'")
	 or die(mysqli_error($con)); 


		 mysqli_query($con,"INSERT INTO sales(sales_amount,reservation_id,payment_date)VALUES('$sales_amount','$id','$date')")or die(mysqli_error($con));

$to = $email;
$subject = "Sea Breeze Hotel Response";

$message = "
<html>
<head>
<title>Sea Breezze Hotel Bacolod</title>
</head>
<body>
<p>Your Request to us has been </p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>".$firstname."</td>
<td></td>
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
$headers .= 'Cc: rgb2k16@gmail.com' . "\r\n";
mail($to,$subject,$message,$headers);

echo "<script type='text/javascript'>alert('Successfully Updated Sending Email to client');</script>";
echo "<script>document.location='reservation_accepted.php'</script>";
}

 ?>