<?php
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
   		echo "No arguments Provided!";
   		return false;
   }
   
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));
   
	$to = 'makfly@makflybcn.com';
	$email_subject = "MakFlyBcn Website Contact Form:  $name";
	$email_body = "Hi Martin! How are you?. You have received a new message from your website MakFlyBcn contact form.\n\n"."Here are the details:\n\nCustomer's name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
	$headers = "From: noreply@makflybcn.com\n";
	$headers .= "Reply-To: $email_address";   
	mail($to,$email_subject,$email_body,$headers);
	echo '<script type="text/javascript">alert("Your message has been sent. Thank you!"); window.location.assign("index.php");</script>';
	return true;
?>