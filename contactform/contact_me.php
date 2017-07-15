<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['subject'])		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$subject = $_POST['subject'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'dhruvajdt2016@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Registration Form:  $name";
$email_body = "You have received a new registration from dhruva'16.\n\n"."Here are the details:\n\nName: $name\n\nsubject: $subject\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@dhruvajdt.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
