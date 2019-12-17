<?php	
	if(empty($_POST['name_34034']) && strlen($_POST['name_34034']) == 0 || empty($_POST['email_34034']) && strlen($_POST['email_34034']) == 0 || empty($_POST['message_34034']) && strlen($_POST['message_34034']) == 0)
	{
		return false;
	}
	
	$name_34034 = $_POST['name_34034'];
	$email_34034 = $_POST['email_34034'];
	$message_34034 = $_POST['message_34034'];
	$optin_34034 = $_POST['optin_34034'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_34034: $name_34034 \nEmail_34034: $email_34034 \nMessage_34034: $message_34034 \nOptin_34034: $optin_34034 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_34034";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>