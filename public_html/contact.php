<?php

// Check for empty fields
if(empty($_POST['name'])||
   empty($_POST['email']) ||
   empty($_POST['comments']))
   {
	echo "Message Not Provided";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['comments'];
	
// Create the email and send the message
$to = "akaur0404@yahoo.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@akaur00.com\n"; // This is the email address the generated message will be from. Recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;		

?> 
<html>
<p><a href="http://csc412sfsu.com/~kaur0404/contact.html">Redirect</a></p>

</html>