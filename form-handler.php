<?php
$name= $_POST['name'];
$subject= $_POST['subject'];
$visitor_email= $_POST['email'];
$message= $_POST['message'];

$email_from="info@infodales.com";

$email_subject="New Form Submission";

$email_body = 	"User Name : $name .\n"
				"User Email : $visitor_email .\n"
				"Subject : $subject .\n"
				"User Message : $message .\n";

$to ="info@infodales.com";

$header = "From : $email_from \r\n";

$headers = "Reply-To : $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")

?>