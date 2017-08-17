<?php
$firstname = $_POST['firstname'];



$to = "rgb2k15@gmail.com";
$subject = "Sea Breeze Hotel Response";

$message = "
<html>
<head>
<title>Sea Breezze Hotel Bacolod</title>
</head>
<body>
<p>Your Request to us has been accepted</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>".$firstname."</td>
<td>Hahahahahahah</td>
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
?>