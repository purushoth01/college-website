<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'infi@ssgovernmentcolle.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
               "User Email: $name.\n".
                "Subject: $name.\n".
                "User Message: $name.\n";

$to = 'purushoth0@gamil.com';

$header = "From: $email_from \r\n";

$header. = "Reply-To: $visitor_email \r\n";

email($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>