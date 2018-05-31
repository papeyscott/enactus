<?php

$name = $_POST['name'];
$visitors_email = $_POST['email'];
$message = $_POST['message'];



$email_from = 'enactusnigeria@gmail.com';

$email_subject = "NEW FORM SUBMISSION";

$email_body = "USER NAME $name.\n".
				"USER EMAIL: $visitors_email.\n"
					"MESSAGE: $message.\n";


$to = "tadeayodeji@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: join.php");
