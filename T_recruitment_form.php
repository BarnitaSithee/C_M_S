<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$nid = $_POST['nid'];
$ssc_result = $_POST['GPA-SSC'];
$hsc_result = $_POST['GPA-HSC'];
$institution = $_POST['Institution'];
$major = $_POST['major'];
$CGPA = $_POST['CGPA'];

$email_from = 'iwtfinalproject.000webhostapp.com';
$email_subject = 'New Teacher Recruitment Request';

$email_body = "Name: $name.\n". 
                "Email: $visitor_email.\n". 
                "NID: $nid.\n".
                "SSC_Result: $ssc_result.\n".
                "HSC_Result: $hsc_result.\n".
                "Institution Name: $institution.\n".
                "Major Subject: $major.\n".
                "CGPA: $CGPA.\n";
                
$to = 'sakifdhrubo1997@gmail.com';

$headers ="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: T_recruitment.html");

?>