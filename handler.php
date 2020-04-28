<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$email_from = 'uditlamas@gmail.com';
	
	$email_subject = "New Person Contacting";
	
	$email_body = "User Name: $name.\n".
					"User Email:$email.\n".
						"User Phone no:$phone.\n".
							"User message:$message.\n";
	
	$to = "uditlamas26@gmail.com";
	
	$headers = "From: $email_from\r\n";
	
	$headers .= "Reply-To: $email\r\n";

	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: contact.html");
?>