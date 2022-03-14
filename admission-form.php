<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$Regestration_no = $_POST['Registration-Number'];
$ssc_roll = $_POST['ExamIdSSC'];


$email_from = 'iwtfinalproject.000webhostapp.com';
$email_subject = 'New Admission Request';

$email_body = "Name: $name.\n". 
                "Email: $visitor_email.\n". 
                "Subject: $subject.\n".
                "Regestration_number: $Regestration_no.\n".
                "SSC_Roll: $ssc_roll.\n";
$to = 'sakifdhrubo1997@gmail.com';

$headers ="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: admission.html");

?>