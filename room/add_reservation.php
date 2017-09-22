<?php
include 'dbcon.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$room_id = $_POST['room_id'];
$room_rate = $_POST['room_rate'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$number_of_person = $_POST['number_of_person'];
$date = date("Y-m-d");


	$string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$code="";
	$limit=10;
	$i=0;
	while($i<=$limit)
	{
		$rand=rand(0,61);
		$code.=$string[$rand];
		$i++;
	}
	
	mysqli_query($con,"INSERT INTO reservation(firstname,lastname,email,contact_number,address,city,gender,room_id,room_rate,check_in,check_out,number_of_person,r_code,date_reserved,reservation_status)VALUES('$firstname','$lastname','$email', '$contact_number', '$address', '$city','$gender','$room_id','$room_rate','$check_in','$check_out','$number_of_person','$code','$date','Pending')")or die(mysqli_error($con));  
$to = $email;
$subject = "Sea Breeze Hotel Response";
$message = "
<html>
<head>
<title>Sea Breezze Hotel Bacolod</title>
</head>
<body>
<p>
We would like to thank you for choosing to stay at Sea Breeze Hotel. 
I hope that the accommodations and service were to your liking, as complete satisfaction is our goal at Sea Breeze Hotel.
We would love to have the pleasure of seeing you as a regular guest. 
We are looking forward to your next visit and wish you the best in your business and personal endeavors.

Kindly please click this link <a href = 'seabreezehotel.000webhostapp.com'>seabreezehotel.000webhostapp.com</a> </p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email Address</th>
</tr>
<tr>
<td>".$firstname."</td>
<td>".$lastname."</td>
<td>".$email."</td>
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
$headers .= 'Cc: seabreezebacolodcity@gmail.com' . "\r\n";
mail($to,$subject,$message,$headers);

	echo "<script>window.location = '../index.php'</script>";
?>



